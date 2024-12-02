<?php
class Instituicao {
    private $nome;
    private $endereco;
    private $senha;

    public function __construct($nome = 'teste', $endereco = '0') {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setSenha($senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function verificarSenha($senha) {
        return password_verify($senha, $this->senha);
    }
}
?>