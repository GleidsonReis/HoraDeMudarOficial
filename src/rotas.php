<?php

namespace HoraDeMudar\Rotas;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$rotas = new RouteCollection();


// Rota Raíz
$rotas->add('rotas', new Route('/', array('_controller' => 'HoraDeMudar\Controller\ControllerPrincipal',"method" => 'chamaIndex')));

//Rotas Relativas a Autenticação
$rotas->add('telaLogin', new Route('/login', array('_controller' => 'HoraDeMudar\Controller\ControllerPrincipal', "method" => 'exibeTelaLogin')));
$rotas->add('acaoautenticaAdministrador', new Route('/acao-autentica-adm', array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador', "method" => 'login')));
$rotas->add('acaologoutAdministrador', new Route('/acao-logout-adm', array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador', "method" => 'logoff')));



//Rotas Relativas ao Administrador
$rotas->add('telaAdministrador', new Route('/tela-adm', array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador', "method" => 'exibeTelaAdministrador')));
$rotas->add('formCadastroAdministrador', new Route('/form-cadastro-adm', array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador', "method" => 'exibeTelaCadastro')));
$rotas->add('acaocadastroAdministrador', new Route('/acao-cadastro-adm', array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador', "method" => 'cadastro')));



//Rotas Relativas ao Imovel
//Cadastro
$rotas->add('formCadastroImovel', new Route('/form-cadastro-imovel', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'exibeTelaCadastroImovel')));
$rotas->add('cadastroImovel', new Route('/acao-cadastro-imovel', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'cadastro')));
//Alteração
//
//Exclusão
$rotas->add('excluirImovelCadastradoUsuario', new Route('/excluir-imovel-user', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'exibeTelaImoveisExcluir')));
$rotas->add('excluirImovel', new Route('/acao-excluir-imovel/{suffix}',array('_controller' => 'HoraDeMudar\Controller\ControllerImovel',"method" => 'acaoExcluirImovel', 'suffix' => '')));



//Exibição
$rotas->add('exibirImovelCadastradoUsuario', new Route('/mostrar-imovel-user', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'mostrarImoveisUsuario')));

//Rotas Acesso Sub-Paginas
$rotas->add('subPagina', new Route('/subPagina/{suffix}',array('_controller' => 'HoraDeMudar\Controller\ControllerPrincipal',"method" => 'chamaSubPagina', 'suffix' => '')));




//Rotas Testes
//$rotas->add('formCadastroImovelTeste', new Route('/form-cadastro-imovelT', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'exibeTelaCadastroImovelTeste')));
//$rotas->add('cadastroImovelT', new Route('/acao-cadastrar-imovelT', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'cadastroT')));


$rotas->add('listarUsuario', new Route('/list-user',array('_controller' => 'HoraDeMudar\Controller\ControllerAdministrador',"method" => 'listarUsuario')));
$rotas->add('cadastroProduto', new Route('/cad-Imovel',
        array('_controller' => 'HoraDeMudar\Controller\ControllerImovel',
            "method" => 'exibeTelaCadastro')));

$rotas->add('cadastroImoveis', new Route('/cadastroImovel',
        array('_controller' => 'HoraDeMudar\Controller\ControllerImovel',
            "method" => 'cadastro')));



return $rotas;

