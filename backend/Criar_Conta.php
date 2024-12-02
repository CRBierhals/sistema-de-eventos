<?php
require_once 'Conexao_BD.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

    if ($tipo === 'aluno') {
        $nome = filter_input(INPUT_POST, 'nomeAluno', FILTER_SANITIZE_STRING);
        $matricula = filter_input(INPUT_POST, 'matriculaAluno', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'emailAluno', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senhaAluno', FILTER_SANITIZE_STRING);

        if (empty($nome) || empty($matricula) || empty($email) || empty($senha)) {
            die("Erro: Todos os campos de aluno são obrigatórios.");
        }

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO aluno (nome, matricula, email, senha) VALUES (:nome, :matricula, :email, :senha)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':nome' => $nome, ':matricula' => $matricula, ':email' => $email, ':senha' => $senhaHash]);

            echo "Conta de aluno criada com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao criar conta de aluno: " . $e->getMessage();
        }
    } 
    elseif ($tipo === 'instituicao') { // Corrigido aqui
        $nome = filter_input(INPUT_POST, 'nomeInstituicao', FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, 'enderecoInstituicao', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senhaInstituicao', FILTER_SANITIZE_STRING);

        if (empty($nome) || empty($endereco) || empty($senha)) {
            var_dump($nome);
            var_dump($endereco);
            var_dump($senha);
            die("Erro: Todos os campos de instituição são obrigatórios.");
        }

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO instituicao (nome, endereco, senha) VALUES (:nome, :endereco, :senha)";
            $stmt = $conexao->prepare($sql);
            $stmt->execute([':nome' => $nome, ':endereco' => $endereco, ':senha' => $senhaHash]);

            echo "Conta de instituição criada com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao criar conta de instituição: " . $e->getMessage();
        }
    } else {
        echo "Erro: Tipo de conta inválido.";
    }
} else {
    echo "Erro: Método de requisição inválido.";
}
?>