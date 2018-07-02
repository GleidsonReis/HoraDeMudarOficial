<?php



namespace HoraDeMudar\Entidades;

class Imovel {
    private $tipoImovel;
    private $tipoNegocio;
    private $titulo;
    private $imagem1;
    private $imagem2;
    private $imagem3;
    private $imagem4;
    private $imagem5;
    private $descricao;
    private $endereco;
    private $bairro;
    private $cidade;
    private $contato;
    private $qntcomodos;
    private $qntquartos;
    private $valor;
    private $dataExpiracao;
    private $status;
    private $idUser;

    function __construct($tipoImovel, $tipoNegocio, $titulo, $imagem1, $imagem2,$imagem3,$imagem4,$imagem5, $descricao, $endereco, $bairro, $cidade, $contato, $qntcomodos, $qntquartos, $valor, $dataExpiracao, $status, $idUser) {
        $this->tipoImovel = $tipoImovel;
        $this->tipoNegocio = $tipoNegocio;
        $this->titulo = $titulo;
        $this->imagem1 = $imagem1;
        $this->imagem2 = $imagem2;
        $this->imagem3 = $imagem3;
        $this->imagem4 = $imagem4;
        $this->imagem5 = $imagem5;
        $this->descricao = $descricao;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->contato = $contato;
        $this->qntcomodos = $qntcomodos;
        $this->qntquartos = $qntquartos;
        $this->valor = $valor;
        $this->dataExpiracao = $dataExpiracao;
        $this->status = $status;
        $this->idUser = $idUser;
    }
    function getImagem2() {
        return $this->imagem2;
    }
    function getImagem4() {
        return $this->imagem4;
    }

    function getImagem5() {
        return $this->imagem5;
    }

    function setImagem4($imagem4) {
        $this->imagem4 = $imagem4;
    }

    function setImagem5($imagem5) {
        $this->imagem5 = $imagem5;
    }

        function setImagem2($imagem2) {
        $this->imagem2 = $imagem2;
    }
    function getImagem3() {
        return $this->imagem3;
    }

    function setImagem3($imagem3) {
        $this->imagem3 = $imagem3;
    }

            function getDataExpiracao() {
        return $this->dataExpiracao;
    }

    function getStatus() {
        return $this->status;
    }

    function setDataExpiracao($dataExpiracao) {
        $this->dataExpiracao = $dataExpiracao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

        function getTipoImovel() {
        return $this->tipoImovel;
    }

    function getTipoNegocio() {
        return $this->tipoNegocio;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getImagem1() {
        return $this->imagem1;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getContato() {
        return $this->contato;
    }

    function getQntcomodos() {
        return $this->qntcomodos;
    }

    function getQntquartos() {
        return $this->qntquartos;
    }

    function getValor() {
        return $this->valor;
    }

    function setTipoImovel($tipoImovel) {
        $this->tipoImovel = $tipoImovel;
    }

    function setTipoNegocio($tipoNegocio) {
        $this->tipoNegocio = $tipoNegocio;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setImagem1($imagem1) {
        $this->imagem1 = $imagem1;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setContato($contato) {
        $this->contato = $contato;
    }

    function setQntcomodos($qntcomodos) {
        $this->qntcomodos = $qntcomodos;
    }

    function setQntquartos($qntquartos) {
        $this->qntquartos = $qntquartos;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }
    
    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }
    
    function getIdUser() {
        return $this->idUser;
    }
    
}
