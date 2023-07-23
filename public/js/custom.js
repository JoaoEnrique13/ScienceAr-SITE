
// ADICIONA E REMOVE QUESTÕES DO FORMULARIO DO QUIZ
$(document).ready(function() {
    let answerCounter = 1;
  
    // Quando o botão "Adicionar Resposta" é clicado
    $("#add-answer").on("click", function() {
      // Cria uma nova div para a resposta
      const newAnswerDiv = $("<div>");
      newAnswerDiv.append(
        `<input type="text" name="answers[${answerCounter}][answerText]" required>`
      );
      newAnswerDiv.append(
        `<input type="checkbox" name="answers[${answerCounter}][correct]"> Resposta correta`
      );
      newAnswerDiv.append(
        '<button type="button" class="remove-answer">Remover</button>'
      );
  
      // Adiciona a nova div de resposta ao elemento com ID 'answers'
      $("#answers").append(newAnswerDiv);
  
      answerCounter++;
    });
  
    // Quando o botão "Remover" é clicado para uma resposta
    $(document).on("click", ".remove-answer", function() {
      $(this).parent().remove();
    });
  });
  