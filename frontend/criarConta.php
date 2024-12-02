<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Conta</title>
  <link rel="stylesheet" href="estilo.css">
  <script defer src="scripts.js"></script>
</head>
<body>
  <header>
    <h1>Criar Conta</h1>
  </header>
  <main>
    <form id="form-criar-conta" action="../backend/Criar_Conta.php" method="POST">
      <label for="tipo">Selecione o tipo de conta:</label>
      <select id="tipo" name="tipo">
        <option value="aluno">Aluno</option>
        <option value="instituicao">Instituição</option>
      </select>

      <!-- Campos para Aluno -->
      <div id="campos-aluno" class="campos">
        <label for="nomeALuno">Nome:</label>
        <input type="text" id="nomeAluno" name="nomeAluno" placeholder="Digite seu nome" >

        <label for="matriculaAluno">Matrícula:</label>
        <input type="text" id="matriculaAluno" name="matriculaAluno" placeholder="Digite sua matrícula" >

        <label for="emailAluno">Email:</label>
        <input type="email" id="emailAluno" name="emailAluno" placeholder="Digite seu email" >

        <label for="senhaAluno">Senha:</label>
        <input type="text" id="senhaAluno" name="senhaAluno" placeholder="Digite uma senha" >
      </div>

      <!-- Campos para Instituição -->
      <div id="campos-instituicao" class="campos" style="display: none;">
        <label for="nomeInstituicao">Nome:</label>
        <input type="text" id="nomeInstituicao" name="nomeInstituicao" placeholder="Digite o nome da instituição" >

        <label for="enderecoInstituicao">Endereço:</label>
        <input type="text" id="enderecoInstituicao" name="enderecoInstituicao" placeholder="Digite o endereço" >

        <label for="senhaInstituicao">Senha:</label>
        <input type="text" id="senhaInstituicao" name="senhaInstituicao" placeholder="Digite uma senha" >
      </div>

      <button type="submit" class="btn">Criar Conta</button>
    </form>
  </main>
</body>
</html>

