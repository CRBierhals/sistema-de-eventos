<?php
require_once 'Instituicao.php'; // Inclui a classe Instituicao

class Evento {
    private $nome;
    private $dataInicio;
    private $dataTermino;
    private $local;
    private $descricao;
    private $responsavel; // Nome do responsável
    private $instituicao; // Objeto da classe Instituicao

    public function __construct(
        $nome,
        $dataInicio,
        $dataTermino,
        $local,
        $descricao,
        $responsavel, // Pode ser o nome ou outro identificador
        Instituicao $instituicao
    ) {
        $this->nome = $nome;
        $this->dataInicio = $dataInicio;
        $this->dataTermino = $dataTermino;
        $this->local = $local;
        $this->descricao = $descricao;
        $this->responsavel = $responsavel;
        $this->instituicao = $instituicao;
    }

    // Métodos de acesso e manipulação

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDataInicio() {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    public function getDataTermino() {
        return $this->dataTermino;
    }

    public function setDataTermino($dataTermino) {
        $this->dataTermino = $dataTermino;
    }

    public function getLocal() {
        return $this->local;
    }

    public function setLocal($local) {
        $this->local = $local;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getResponsavel() {
        return $this->responsavel;
    }

    public function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

    public function getInstituicao() {
        return $this->instituicao;
    }

    public function setInstituicao(Instituicao $instituicao) {
        $this->instituicao = $instituicao;
    }
}
?>