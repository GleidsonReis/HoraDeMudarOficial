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
      /*  if ($this->sessao->existe('Usuario'))
            return $this->response->setContent($this->twig->render('cadastro.twig'));
        else{
            $destino = '/login';
            $redirecionar = new RedirectResponse($destino);
            $redirecionar->send();
            
        }*/
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

}
