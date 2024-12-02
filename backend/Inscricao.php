<?php
require_once 'Aluno.php';       // Inclui a classe Aluno
require_once 'Instituicao.php'; // Inclui a classe Instituicao

class Inscricao {
    private $aluno;           // Objeto da classe Aluno
    private $instituicao;     // Objeto da classe Instituicao
    private $dataInscricao;   // Data da inscrição
    private $presenca;        // Booleano: true para presente, false para ausente

    public function __construct(Aluno $aluno, Instituicao $instituicao, $dataInscricao, $presenca = false) {
        $this->aluno = $aluno;
        $this->instituicao = $instituicao;
        $this->dataInscricao = $dataInscricao;
        $this->presenca = $presenca;
    }

    // Métodos de acesso e manipulação

    public function getAluno() {
        return $this->aluno;
    }

    public function setAluno(Aluno $aluno) {
        $this->aluno = $aluno;
    }

    public function getInstituicao() {
        return $this->instituicao;
    }

    public function setInstituicao(Instituicao $instituicao) {
        $this->instituicao = $instituicao;
    }

    public function getDataInscricao() {
        return $this->dataInscricao;
    }

    public function setDataInscricao($dataInscricao) {
        $this->dataInscricao = $dataInscricao;
    }

    public function getPresenca() {
        return $this->presenca;
    }

    public function setPresenca($presenca) {
        $this->presenca = $presenca;
    }
}
?>
Como Usar:
Crie um arquivo principal (index.php) para testar a classe:

php
Copiar código
<?php
require_once 'Inscricao.php'; // Inclui a classe Inscricao

// Criando uma Instituição
$instituicao = new Instituicao("Faculdade ABC", "Rua Universitária, 456");

// Criando um Aluno
$aluno = new Aluno("Joana Souza", "joana@example.com", $instituicao, "senha_segura");

// Criando uma Inscrição
$inscricao = new Inscricao($aluno, $instituicao, "2024-11-20");

// Exibindo informações da inscrição
echo "Aluno: " . $inscricao->getAluno()->getNome() . PHP_EOL;
echo "Instituição: " . $inscricao->getInstituicao()->getNome() . PHP_EOL;
echo "Data da Inscrição: " . $inscricao->getDataInscricao() . PHP_EOL;
echo "Presença: " . ($inscricao->getPresenca() ? "Presente" : "Ausente") . PHP_EOL;

// Atualizando presença
$inscricao->setPresenca(true);

echo "Presença atualizada: " . ($inscricao->getPresenca() ? "Presente" : "Ausente") . PHP_EOL;
?>