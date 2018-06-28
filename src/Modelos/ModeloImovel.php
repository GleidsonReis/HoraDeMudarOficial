<?php

namespace HoraDeMudar\Modelos;

use HoraDeMudar\Util\Conexao;
use HoraDeMudar\Entidades\Imovel;
use PDO;

class ModeloImovel {

    function __construct() {
        
    }

    function listarImoveis() {

        try {
            $sql = 'select * from imovel';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }

    function cadastrar(Imovel $imovel) {
        try {
            $sql = 'insert into imovel (tipoImovel, tipoNegocio, titulo, imagem1, descricao, endereco, bairro, cidade, contato, qntcomodos,qntquartos ) values(:tipoImovel, :tipoNegocio, :titulo, :imagem1, :descricao, :endereco, :bairro, :cidade, :contato, :qntcomodos,:qntquartos)';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':tipoImovel', $imovel->getTipoImovel());
            $p_sql->bindValue(':tipoNegocio', $imovel->getTipoNegocio());
            $p_sql->bindValue(':titulo', $imovel->getTitulo());
            $p_sql->bindValue(':imagem1', $imovel->getImagem1());
            $p_sql->bindValue(':descricao', $imovel->getDescricao());
            $p_sql->bindValue(':endereco', $imovel->getEndereco());
            $p_sql->bindValue(':bairro', $imovel->getBairro());
            $p_sql->bindValue(':cidade', $imovel->getBairro());
            $p_sql->bindValue(':contato', $imovel->getContato());
            $p_sql->bindValue(':qntcomodos', $imovel->getQntcomodos());
            $p_sql->bindValue(':qntquartos', $imovel->getQntquartos());
            if ($p_sql->execute()){
               //    return Conexao::getInstancia()->lastInsertId();
             return $p_sql->rowCount();
            }
            return null;
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }

}
