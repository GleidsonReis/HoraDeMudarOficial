<?php

namespace HoraDeMudar\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Twig\Environment;
use HoraDeMudar\Util\Sessao;
use HoraDeMudar\Entidades\Usuario;
use HoraDeMudar\Modelos\ModeloUsuarios;

class ControllerAdministrador {
    private $response;
    private $contexto;
    private $twig;
    private $sessao;

    public function __construct(Response $response, Request $contexto, Environment $twig, Sessao $sessao) {
        $this->response = $response; // devolver as coisas usuario
        $this->contexto = $contexto; // requisicao com os dados que o usuario quer para trabalhar
        $this->twig = $twig; // jogar os dados na tela
        $this->sessao = $sessao; // sessao
    }

    public function exibeTelaCadastro() {
      /*  if ($this->sessao->existe('Usuario'))
            return $this->response->setContent($this->twig->render('cadastro.twig'));
        else{
            $destino = '/login';
            $redirecionar = new RedirectResponse($destino);
            $redirecionar->send();
            
        }*/
         return $this->response->setContent($this->twig->render('formularioCadastroUsuario.twig'));
       
    }
    
     public function exibeTelaAdministrador() {
        if ($this->sessao->existe('Usuario'))
            return $this->response->setContent($this->twig->render('telaAdministrador.twig'));
        else{
            $destino = '/login';
            $redirecionar = new RedirectResponse($destino);
            $redirecionar->send();
            
        }
         return $this->response->setContent($this->twig->render('telaAdministrador.twig'));
       
    }
    
    public function cadastro() {
        // validação
        $login = $this->contexto->get('login');
        $senha = $this->contexto->get('senha');
        $telefone = $this->contexto->get('telefone');
        $email = $this->contexto->get('email');
        $usuario = new Usuario($login, $senha, $telefone, $email);
        $modeloUsuario = new ModeloUsuarios();
        if ($id = $modeloUsuario->cadastrar($usuario))
            echo ("Usuario $id inserido com sucesso");
        else
            echo "erro na inserção";        
        
    }
    
    
    public function listarUsuario() {
       
        $modeloUsuario = new ModeloUsuarios();
        
        if ($dados = $modeloUsuario->listarUsuarios())
             return $this->response->setContent($this->twig->render('exibeUsuario.twig', ['usuarios' => $dados]));
        else
            echo "não há Usuários";        
        
    }
    
    
     public function logoff() {

        $this->sessao->del();
                    echo '<script>location.href = "/"</script>';

    }

    public function login() {
        // Constante com a quantidade de tentativas aceitas
        define('TENTATIVAS_ACEITAS', 4);

        // Constante com a quantidade minutos para bloqueio
        define('MINUTOS_BLOQUEIO', 30);
        $usuario = $this->contexto->get('login');
        $senha = $this->contexto->get('senha');
        
      $modeloUsuario = new ModeloUsuarios();
      $dados= $modeloUsuario->buscarusuario($usuario,$senha);
      if ($dados==true){
              
            echo "Encontrei";
            $this->sessao->add('idUser', $dados->id);
            $this->sessao->add('Usuario', $dados->login);
            $this->sessao->add('telefone', $dados->telefone);
            $this->sessao->add('email', $dados->email);
            
            echo $this->sessao->get('idUser');
            echo $this->sessao->get('Usuario');
            echo $this->sessao->get('telefone');
            echo $this->sessao->get('email');
            
            /*echo $dados->id;
            echo $dados->login;
            echo $dados->senha;
            echo $dados->telefone;
            echo $dados->email;*/   
            echo '<script>location.href = "tela-adm"</script>';
        }else {
                echo "Usuário e/ou Senha Inválido";
        }
        /*
        $User = new Usuario();
        $User->setUsername($username);
        $senha += 'ERTYUI';
        $senha = md5($senha);
        $User->setSenha($senha);
        $mUser = new MUsuario();
        //$result = $mUser->ler($User);

        if ($mUser->ler($User)) {
            $this->sessao->add('username', $User->getUsername());
            // $this->sessao->add('senha', $User->getSenha());
            // echo 'logado';
            echo '<script>location.href = "logado"</script>';
//            $response = new RedirectResponse('//logado');
//            $response->send();
        } else {
            echo 'nao logado';
        }

        if ($this->sessao->existe('ez')) {
            echo json_encode($_SESSION);
            exit();*/
    }
    
    

}
