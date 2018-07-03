<?php

namespace HoraDeMudar\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File;
use Twig\Environment;
use HoraDeMudar\Util\Sessao;
use HoraDeMudar\Modelos\ModeloImovel;
use HoraDeMudar\Entidades\Imovel;

class ControllerImovel {
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

    public function exibeTelaCadastroImovel() {
       if ($this->sessao->existe('Usuario'))
            return $this->response->setContent($this->twig->render('formularioCadastroImovel.twig'));
       else{
            $destino = '/login';
            $redirecionar = new RedirectResponse($destino);
            $redirecionar->send();    
        }
    }

   
    public function mostrarImoveisUsuario() {
        $modeloImovel = new ModeloImovel();
        if ($dados = $modeloImovel->buscarImovelIDUsuario($this->sessao->get('idUser')))
             return $this->response->setContent($this->twig->render('telaMostrarImoveisUser.twig', ['imoveis' => $dados]));
        //return $this->response->setContent($this->twig->render('paginaPrincipal.twig', ['imoveis' => $dados]));
        else
            echo "não há Imoveis Cadastrados";        
    }
    
       public function exibeTelaImoveisExcluir() {
        $modeloImovel = new ModeloImovel();
        if ($dados = $modeloImovel->buscarImovelIDUsuario($this->sessao->get('idUser')))
             return $this->response->setContent($this->twig->render('telaExcluirImoveisUser.twig', ['imoveis' => $dados]));
        //return $this->response->setContent($this->twig->render('paginaPrincipal.twig', ['imoveis' => $dados]));
        else
            echo "não há Imoveis Cadastrados";        
    }
    
    public function acaoExcluirImovel($id){
       $modeloImovel = new ModeloImovel();
       $modeloImovel->excluirImovelID($id);
       $destino = '/excluir-imovel-user';
       $redirecionar = new RedirectResponse($destino);
       $redirecionar->send();
    }
    
    
     public function exibeTelaImoveisAlterar() {
        $modeloImovel = new ModeloImovel();
        if ($dados = $modeloImovel->buscarImovelIDUsuario($this->sessao->get('idUser')))
             return $this->response->setContent($this->twig->render('telaAlterarImoveisUser.twig', ['imoveis' => $dados]));
        //return $this->response->setContent($this->twig->render('paginaPrincipal.twig', ['imoveis' => $dados]));
        else
            echo "não há Imoveis Cadastrados";        
    }
    
    
  public function chamaFormularioAlterarImovel($id) {
        
        $modeloImovel = new ModeloImovel();
        
        if ($dados = $modeloImovel->buscarImovelID($id))
             return $this->response->setContent($this->twig->render('formularioAlterarImovel.twig', ['imoveis' => $dados]));
        //return $this->response->setContent($this->twig->render('paginaPrincipal.twig', ['imoveis' => $dados]));
        else
            echo "não há Imoveis Cadastrados";        
    }
    
    public function cadastro() {
        // Função Upload Imagem
         // validação
        $imagem = $this->contexto->files->get('imagem');
        $path = "img/".$imagem->getClientOriginalName();
        $imagem->move("img/", $imagem->getClientOriginalName());
        // echo $imagem->getClientMimeType();
        $imagem2 = $this->contexto->files->get('imagem2');
        $path2 = "img/".$imagem2->getClientOriginalName();
        $imagem2->move("img/", $imagem2->getClientOriginalName());
        
        $imagem3 = $this->contexto->files->get('imagem3');
        $path3 = "img/".$imagem3->getClientOriginalName();
        $imagem3->move("img/", $imagem3->getClientOriginalName());
        
        $imagem4 = $this->contexto->files->get('imagem4');
        $path4 = "img/".$imagem4->getClientOriginalName();
        $imagem4->move("img/", $imagem4->getClientOriginalName());
        
        $imagem5 = $this->contexto->files->get('imagem5');
        $path5 = "img/".$imagem5->getClientOriginalName();
        $imagem5->move("img/", $imagem5->getClientOriginalName());
        
        $tipoImovel = $this->contexto->get('tipoImovel');
        $tipoNegocio = $this->contexto->get('tipoNegocio');
        $titulo = $this->contexto->get('titulo');
        $descricao = $this->contexto->get('descricao');
        $endereco = $this->contexto->get('endereco');
        $bairro = $this->contexto->get('bairro');
        $cidade = $this->contexto->get('cidade');
        $contato = $this->contexto->get('contato');
        $qntcomodos = $this->contexto->get('qntcomodos');
        $qntquartos = $this->contexto->get('qntquartos');
        $valor = $this->contexto->get('valor');
        $idUser = $this->sessao->get('idUser');
        $dataExpiracao = $this->contexto->get('dataExpiracao');
        $status = true;
        $imovel = new Imovel($tipoImovel, $tipoNegocio, $titulo, $path, $path2,$path3,$path4,$path5, $descricao, $endereco, $bairro, $cidade, $contato, $qntcomodos, $qntquartos, $valor, $dataExpiracao, $status, $idUser);
        $modeloImovel = new ModeloImovel();
        if ($id = $modeloImovel->cadastrar($imovel))
            echo ("Imovel $id inserido com sucesso");
        else
            echo "erro na inserção";      
            
        }
        
         public function acaoAlterarImovel($id) {
        // Função Upload Imagem
        // validação
        $id = $this->contexto->get('id');
        $path = $this->contexto->get('imagem');
        $path2 = $this->contexto->get('imagem2');
        $path3 = $this->contexto->get('imagem3');
        $path4 = $this->contexto->get('imagem4');
        $path5 = $this->contexto->get('imagem5');
        $tipoImovel = $this->contexto->get('tipoImovel');
        $tipoNegocio = $this->contexto->get('tipoNegocio');
        $titulo = $this->contexto->get('titulo');
        $descricao = $this->contexto->get('descricao');
        $endereco = $this->contexto->get('endereco');
        $bairro = $this->contexto->get('bairro');
        $cidade = $this->contexto->get('cidade');
        $contato = $this->contexto->get('contato');
        $qntcomodos = $this->contexto->get('qntcomodos');
        $qntquartos = $this->contexto->get('qntquartos');
        $valor = $this->contexto->get('valor');
        $idUser = $this->sessao->get('idUser');
        $dataExpiracao = $this->contexto->get('dataExpiracao');
        $status = true;
        $imovel = new Imovel($tipoImovel, $tipoNegocio, $titulo, $path, $path2, $path3, $path4, $path5, $descricao, $endereco, $bairro, $cidade, $contato, $qntcomodos, $qntquartos, $valor, $dataExpiracao, $status, $idUser);
        $modeloImovel = new ModeloImovel();
        if ($id = $modeloImovel->alterar($imovel, $id)){
         echo '<script>location.href = "../alterar-imovel-user"</script>';
            echo ("Imovel $id alterado com sucesso");
        } else{
            echo "erro na inserção";
        }
    }
        
        
        
}
    
  