<?php

namespace HoraDeMudar\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
      /*  if ($this->sessao->existe('Usuario'))
            return $this->response->setContent($this->twig->render('cadastro.twig'));
        else{
            $destino = '/login';
            $redirecionar = new RedirectResponse($destino);
            $redirecionar->send();
            
        }*/
         return $this->response->setContent($this->twig->render('formularioCadastroImovel.twig'));
       
    }

    
    
    public function cadastro() {
        // validação
        $tipoImovel = $this->contexto->get('tipoImovel');
        $tipoNegocio = $this->contexto->get('tipoImovel');
        $titulo = $this->contexto->get('titulo');
        $imagem1 = $this->contexto->get('imagem1');
        $descricao = $this->contexto->get('descricao');
        $endereco = $this->contexto->get('endereco');
        $bairro = $this->contexto->get('bairro');
        $cidade = $this->contexto->get('cidade');
        $contato = $this->contexto->get('contato');
        $qntcomodos = $this->contexto->get('qntcomodos');
        $qntquartos = $this->contexto->get('qntquartos');
        $valor = $this->contexto->get('valor');
        $imovel = new Imovel($tipoImovel, $tipoNegocio, $titulo, $imagem1, $descricao, $endereco, $bairro, $cidade, $contato, $qntcomodos, $qntquartos, $valor);
        $modeloImovel = new ModeloImovel();
        if ($id = $modeloImovel->cadastrar($imovel))
            echo ("Imovel $id inserido com sucesso");
        else
            echo "erro na inserção";        
        
    }
    
    
    

}
