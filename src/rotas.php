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
$rotas->add('alterarImovelCadastradoUsuario', new Route('/alterar-imovel-user', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'exibeTelaImoveisAlterar')));
$rotas->add('formularioAlterarImovel', new Route('/formulario-alterar-imovel/{suffix}',array('_controller' => 'HoraDeMudar\Controller\ControllerImovel',"method" => 'chamaFormularioAlterarImovel', 'suffix' => '')));
$rotas->add('alterarImovel', new Route('/acao-alterar-imovel', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'acaoAlterarImovel', 'suffix' => '')));
//Exclusão
$rotas->add('excluirImovelCadastradoUsuario', new Route('/excluir-imovel-user', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'exibeTelaImoveisExcluir')));
$rotas->add('excluirImovel', new Route('/acao-excluir-imovel/{suffix}',array('_controller' => 'HoraDeMudar\Controller\ControllerImovel',"method" => 'acaoExcluirImovel', 'suffix' => '')));
//Inativar Imovel
$rotas->add('inativarImovelCadastradoUsuario', new Route('/inativar-imovel-user', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'exibeTelaImoveisInativar')));
$rotas->add('inativarImovel', new Route('acao-inativar-imovel/{suffix}', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'acaoInativarImovel', 'suffix' => '')));
//Ativar Imovel
$rotas->add('ativarImovelCadastradoUsuario', new Route('/ativar-imovel-user', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'exibeTelaImoveisAtivar')));
$rotas->add('ativarImovel', new Route('acao-ativar-imovel/{suffix}', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'acaoAtivarImovel', 'suffix' => '')));
//Exibição
$rotas->add('exibirImovelCadastradoUsuario', new Route('/mostrar-imovel-user', array('_controller' => 'HoraDeMudar\Controller\ControllerImovel', "method" => 'mostrarImoveisUsuario')));

//Rotas Acesso Sub-Paginas
$rotas->add('subPagina', new Route('/subPagina/{suffix}',array('_controller' => 'HoraDeMudar\Controller\ControllerPrincipal',"method" => 'chamaSubPagina', 'suffix' => '')));
//Rota Filtrada
$rotas->add('rotaFiltrada', new Route('/filtrada', array('_controller' => 'HoraDeMudar\Controller\ControllerPrincipal',"method" => 'chamaIndexFiltrada')));



return $rotas;

