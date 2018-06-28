<?php



namespace HoraDeMudar\Entidades;

class Usuario {
    private $login;
    private $senha;
    private $telefone;
    private $email;
    
    function __construct($login, $senha, $telefone,$email) {
        $this->login = $login;
        $this->senha = $senha;
        $this->telefone = $telefone;
        $this->email = $email;
    }
    
    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }
    
    function getTelefone(){
        return $this->telefone;
    }
    
    function getEmail(){
        return $this->email;
    }
    
    
    function setEmail($email){
        $this->email=$email;
    }
    
    function setTelefone($telefone){
        $this->telefone=$telefone;
    }
   
    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }



}
