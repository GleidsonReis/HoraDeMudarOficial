<?php

namespace HoraDeMudar\Modelos;

use HoraDeMudar\Util\Conexao;
use HoraDeMudar\Entidades\Usuario;
use PDO;

class ModeloUsuarios {

    function __construct() {
        
    }

    function listarUsuarios() {

        try {
            $sql = 'select * from usuario';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }

    function cadastrar(Usuario $usuario) {
         try {
            $sql = 'insert into usuario (login, senha, telefone, email) values(:login, MD5(:senha), :telefone, :email)';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':login', $usuario->getLogin());
            $p_sql->bindValue(':senha', $usuario->getSenha());
            $p_sql->bindValue(':telefone', $usuario->getTelefone());
            $p_sql->bindValue(':email', $usuario->getEmail());
            if ($p_sql->execute()){
               //    return Conexao::getInstancia()->lastInsertId();
             return $p_sql->rowCount();
            }
            return null;
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }
    
    function buscarusuario(String $login, String $senha) {
    
        try {
            $sql = 'select * from usuario where login = :login and senha = MD5(:senha)';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':login', $login);
            $p_sql->bindValue(':senha', $senha);
            $p_sql->execute();
            
            if($p_sql->rowCount() == 1) 
               return $p_sql->fetch(PDO::FETCH_OBJ);
           return false;
        } catch (Exception $ex) {
            return 'Erro na conexão:' . $ex;
        }
    }

}
