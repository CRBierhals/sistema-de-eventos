<?php
require_once 'Instituicao.php';

class Aluno {
    private $nome;
    private $email;
    private $instituicao; 
    private $senha;

    public function __construct($nome, $email, Instituicao $instituicao, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->instituicao = $instituicao;
        $this->setSenha($senha); // Usa o método para armazenar a senha com segurança
    }

    // Métodos para o nome
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Métodos para o email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Métodos para a instituição
    public function getInstituicao() {
        return $this->instituicao;
    }

    public function setInstituicao(Instituicao $instituicao) {
        $this->instituicao = $instituicao;
    }

    // Métodos para a senha
    public function setSenha($senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT); // Armazena a senha de forma segura
    }

    public function verificarSenha($senha) {
        return password_verify($senha, $this->senha);
    }
}
?>
>