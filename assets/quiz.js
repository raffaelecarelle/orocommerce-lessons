/* Componente quiz a scelta multipla + richiamo attivo.
   Markup atteso:

   <div class="quiz">
     <p class="q">Domanda</p>
     <div class="options">
       <button class="opt" data-correct>Risposta giusta</button>
       <button class="opt">Risposta sbagliata</button>
     </div>
     <p class="explain" hidden>Perche'.</p>
   </div>

   <div class="recall">
     <p class="q">Domanda aperta</p>
     <textarea></textarea>
     <button class="reveal">Mostra risposta</button>
     <div class="answer" hidden>Risposta attesa.</div>
   </div>

   Un elemento <p class="score"></p> in pagina viene aggiornato con il punteggio.
*/
(function () {
  'use strict';

  var total = 0, right = 0, answered = 0;

  function updateScore() {
    var el = document.querySelector('.score');
    if (!el) return;
    el.textContent = 'Risposte: ' + answered + '/' + total + ' — corrette al primo colpo: ' + right;
  }

  document.querySelectorAll('.quiz').forEach(function (quiz) {
    total++;
    var opts = quiz.querySelectorAll('button.opt');
    var explain = quiz.querySelector('.explain');
    var scored = false;

    opts.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var isCorrect = btn.hasAttribute('data-correct');
        if (!scored) {
          scored = true;
          answered++;
          if (isCorrect) right++;
        }
        opts.forEach(function (o) {
          o.disabled = true;
          if (o.hasAttribute('data-correct')) o.classList.add('correct');
        });
        if (!isCorrect) btn.classList.add('wrong');

        var verdict = quiz.querySelector('.verdict');
        if (!verdict) {
          verdict = document.createElement('p');
          verdict.className = 'verdict';
          quiz.appendChild(verdict);
        }
        verdict.textContent = isCorrect ? 'Corretto' : 'Non corretto';
        verdict.classList.toggle('ok', isCorrect);
        verdict.classList.toggle('ko', !isCorrect);

        if (explain) explain.hidden = false;
        updateScore();
      });
    });
  });

  document.querySelectorAll('.recall').forEach(function (block) {
    var btn = block.querySelector('button.reveal');
    var answer = block.querySelector('.answer');
    if (!btn || !answer) return;
    btn.addEventListener('click', function () {
      answer.hidden = false;
      btn.disabled = true;
      btn.textContent = 'Risposta mostrata';
    });
  });

  updateScore();
})();
