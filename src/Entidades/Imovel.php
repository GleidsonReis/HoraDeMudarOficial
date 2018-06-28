<?php



namespace HoraDeMudar\Entidades;

class Imovel {
    private $tipoImovel;
    private $tipoNegocio;
    private $titulo;
    private $imagem1;
    private $descricao;
    private $endereco;
    private $bairro;
    private $cidade;
    private $contato;
    private $qntcomodos;
    private $qntquartos;

    function __construct($tipoImovel, $tipoNegocio, $titulo, $imagem1, $descricao, $endereco, $bairro, $cidade, $contato, $qntcomodos, $qntquartos) {
        $this->tipoImovel = $tipoImovel;
        $this->tipoNegocio = $tipoNegocio;
        $this->titulo = $titulo;
        $this->imagem1 = $imagem1;
        $this->descricao = $descricao;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->contato = $contato;
        $this->qntcomodos = $qntcomodos;
        $this->qntquartos = $qntquartos;
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





}
