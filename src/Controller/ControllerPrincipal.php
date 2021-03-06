<?php

namespace HoraDeMudar\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Twig\Environment;
use HoraDeMudar\Entidades\Produto;
use HoraDeMudar\Modelos\ModeloProdutos;
use HoraDeMudar\Modelos\ModeloImovel;
use HoraDeMudar\Util\Sessao;
use HoraDeMudar;

class ControllerPrincipal {

    private $response;
    private $contexto;
    private $twig;
    private $sessao;

    public function __construct(Response $response, Request $contexto, Environment $twig, Sessao $sessao) {
        $this->response = $response;
        $this->contexto = $contexto;
        $this->twig = $twig;
        $this->sessao = $sessao;
    }

    
    
     
    public function chamaIndex(){
        //return $this->response->setContent($this->twig->render('master.twig'));
        $modeloImovel = new ModeloImovel();
        
        if ($dados = $modeloImovel->listarImoveis())
             return $this->response->setContent($this->twig->render('paginaPrincipal.twig', ['imoveis' => $dados]));
        //return $this->response->setContent($this->twig->render('paginaPrincipal.twig', ['imoveis' => $dados]));
        else
            echo "não há Imoveis Cadastrados";        
         
    }

    public function chamaSubPagina($id) {
        
        $modeloImovel = new ModeloImovel();
        
        if ($dados = $modeloImovel->buscarImovelID($id))
             return $this->response->setContent($this->twig->render('subPagina.twig', ['imoveis' => $dados]));
        //return $this->response->setContent($this->twig->render('paginaPrincipal.twig', ['imoveis' => $dados]));
        else
            echo "não há Imoveis Cadastrados";        
    }
    
    
     public function exibeTelaLogin() {
        if ($this->sessao->existe('Usuario'))
            return $this->response->setContent($this->twig->render('telaAdministrador.twig'));
        else{
             return $this->response->setContent($this->twig->render('telaLogin.twig'));
            
        }
       
    }
    
     public function chamaIndexFiltrada(){
        //return $this->response->setContent($this->twig->render('master.twig'));
        $modeloImovel = new ModeloImovel();
        $bairro = $this->contexto->get('filtroBairro');
        $cidade = $this->contexto->get('filtroCidade');
        $valor = $this->contexto->get('filtroValor');
       
        if ($dados = $modeloImovel->listarImoveisFiltrado($bairro, $cidade, $valor)){
        return $this->response->setContent($this->twig->render('paginaPrincipal.twig', ['imoveis' => $dados]));
        }else{
            echo "Não há Imoveis com esses Filtros Procurados";        
        }
    }
    
}
