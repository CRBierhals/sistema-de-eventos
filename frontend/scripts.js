document.addEventListener("DOMContentLoaded", () => {
    const tipoSelect = document.getElementById("tipo");
    const camposAluno = document.getElementById("campos-aluno");
    const camposInstituicao = document.getElementById("campos-instituicao");
  
    tipoSelect.addEventListener("change", () => {
      if (tipoSelect.value === "aluno") {
        camposAluno.style.display = "block";
        camposInstituicao.style.display = "none";
      } else if (tipoSelect.value === "instituicao") {
        camposAluno.style.display = "none";
        camposInstituicao.style.display = "block";
      }
    });
  });