<?php

namespace HoraDeMudar\Modelos;

use HoraDeMudar\Util\Conexao;
use HoraDeMudar\Entidades\Imovel;
use HoraDeMudar\Util\Sessao;
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

    
    function buscarImovelID(int $id) {
        try {
            $sql = "select * from imovel where id = '$id'";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }
    
    function buscarImovelIDUsuario(int $id) {
        try {
            $sql = "select * from imovel where idUsuario = '$id'";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }
    
    
    function excluirImovelID(int $id) {
        try {
            $sql = "delete from imovel where id = '$id'";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();
            return;
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }
    
    
    
    function cadastrar(Imovel $imovel) {
        try {
            $sql = 'insert into imovel (tipoImovel, tipoNegocio, titulo, imagem1, imagem2,imagem3,imagem4,imagem5, descricao, endereco, bairro, cidade, contato, qntcomodos,qntquartos, valor, dataExpiracao, status, idUsuario ) values(:tipoImovel, :tipoNegocio, :titulo, :imagem1, :imagem2,:imagem3,:imagem4,:imagem5, :descricao, :endereco, :bairro, :cidade, :contato, :qntcomodos,:qntquartos, :valor, :dataExpiracao, :status, :idUsuario)';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':tipoImovel', $imovel->getTipoImovel());
            $p_sql->bindValue(':tipoNegocio', $imovel->getTipoNegocio());
            $p_sql->bindValue(':titulo', $imovel->getTitulo());
            $p_sql->bindValue(':imagem1', $imovel->getImagem1());
            $p_sql->bindValue(':imagem2', $imovel->getImagem2());
            $p_sql->bindValue(':imagem3', $imovel->getImagem3());
            $p_sql->bindValue(':imagem4', $imovel->getImagem4());
            $p_sql->bindValue(':imagem5', $imovel->getImagem5());
            $p_sql->bindValue(':descricao', $imovel->getDescricao());
            $p_sql->bindValue(':endereco', $imovel->getEndereco());
            $p_sql->bindValue(':bairro', $imovel->getBairro());
            $p_sql->bindValue(':cidade', $imovel->getBairro());
            $p_sql->bindValue(':contato', $imovel->getContato());
            $p_sql->bindValue(':qntcomodos', $imovel->getQntcomodos());
            $p_sql->bindValue(':qntquartos', $imovel->getQntquartos());
            $p_sql->bindValue(':valor', $imovel->getValor());
            $p_sql->bindValue(':dataExpiracao', $imovel->getDataExpiracao());
            $p_sql->bindValue(':status', $imovel->getStatus());
            $p_sql->bindValue(':idUsuario', $imovel->getIdUser());
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
