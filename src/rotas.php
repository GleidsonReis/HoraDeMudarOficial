<?php

namespace HoraDeMudar\Rotas;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$rotas = new RouteCollection();
$rotas->add('esporte', new Route('/esportes/{suffix}',
        array('_controller' => 'HoraDeMudar\Controller\ControllerEsporte',"method" => 'msgInicial', 'suffix' => '')));

$rotas->add('produtos', new Route('/produtos',
        array('_controller' => 'HoraDeMudar\Controller\ControllerEsporte',
            "method" => 'listarProdutos')));


// Rota Raíz
$rotas->add('rotas', new Route('/', array('_controller' => 'HoraDeMudar\Controller\ControllerPrincipal',"method" => 'chamaIndexTeste')));

//Rotas Relativas a Autenticação
$rotas->add('telaLogin', new Route('/login', array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador', "method" => 'exibeTelaAdministrador')));



//Rotas Relativas ao Administrador
$rotas->add('telaAdministrador', new Route('/adm', array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador', "method" => 'exibeTelaAdministrador')));
$rotas->add('formCadastroAdministrador', new Route('/form-cadastro-adm', array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador', "method" => 'exibeTelaCadastro')));
$rotas->add('acaocadastroAdministrador', new Route('/acao-cadastro-adm', array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador', "method" => 'cadastro')));



//Rotas Relativas ao Imovel
//Cadastro
$rotas->add('formCadastroImovel', new Route('/form-cadastro-imovel', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'exibeTelaCadastroImovel')));
$rotas->add('cadastroImovel', new Route('/acao-cadastro-imovel', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'cadastro')));
  //Alteração
  //Exclusão

//Rotas Acesso Sub-Paginas
$rotas->add('subPagina', new Route('/subPagina/{suffix}',array('_controller' => 'HoraDeMudar\Controller\ControllerPrincipal',"method" => 'chamaSubPagina', 'suffix' => '')));




//Rotas Testes
$rotas->add('listarUsuario', new Route('/list-user',array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador',"method" => 'listarUsuario')));
$rotas->add('cadastroProduto', new Route('/cad-Imovel',
        array('_controller' => 'HoraDeMudar\Controller\ControllerImovel',
            "method" => 'exibeTelaCadastro')));

$rotas->add('cadastroImoveis', new Route('/cadastroImovel',
        array('_controller' => 'HoraDeMudar\Controller\ControllerImovel',
            "method" => 'cadastro')));



return $rotas;

