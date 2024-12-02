<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendar Evento</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <header>
    <h1>Agendar Evento</h1>
  </header>
  <main>
    <form>
      <label for="nome">Nome do Evento:</label>
      <input type="text" id="nome" placeholder="Digite o nome do evento">

      <label for="data_inicio">Data de Início:</label>
      <input type="date" id="data_inicio">

      <label for="data_final">Data Final:</label>
      <input type="date" id="data_final">

      <label for="local">Local:</label>
      <input type="text" id="local" placeholder="Digite o local do evento">

      <label for="descricao">Descrição:</label>
      <textarea id="descricao" placeholder="Descreva o evento"></textarea>

      <label for="responsavel">Responsável pelo Evento:</label>
      <input type="text" id="responsavel" placeholder="Nome do responsável">

      <label for="email">Email do Responsável:</label>
      <input type="email" id="email" placeholder="Email do responsável">

      <button type="submit" class="btn">Salvar Evento</button>
    </form>
  </main>
</body>
</html>