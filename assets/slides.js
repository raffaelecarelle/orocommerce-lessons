/* Navigazione del deck: frecce, spazio, click, hash. Nessuna dipendenza. */
(function () {
  var slides = Array.prototype.slice.call(document.querySelectorAll('.slide'));
  if (!slides.length) return;

  var bar = document.querySelector('.deck-bar');
  var counter = bar && bar.querySelector('.counter');
  var progress = document.querySelector('.deck-progress');
  var index = 0;

  function show(i) {
    index = Math.max(0, Math.min(slides.length - 1, i));
    slides.forEach(function (s, n) { s.classList.toggle('current', n === index); });
    if (counter) counter.textContent = (index + 1) + ' / ' + slides.length;
    if (progress) progress.style.width = ((index + 1) / slides.length * 100) + '%';
    if (history.replaceState) history.replaceState(null, '', '#' + (index + 1));
    slides[index].scrollTop = 0;
  }

  function fromHash() {
    var n = parseInt((location.hash || '').replace('#', ''), 10);
    show(isNaN(n) ? 0 : n - 1);
  }

  document.addEventListener('keydown', function (e) {
    if (e.metaKey || e.ctrlKey || e.altKey) return;
    var k = e.key;
    if (k === 'ArrowRight' || k === 'PageDown' || k === ' ') { show(index + 1); e.preventDefault(); }
    else if (k === 'ArrowLeft' || k === 'PageUp') { show(index - 1); e.preventDefault(); }
    else if (k === 'Home') { show(0); e.preventDefault(); }
    else if (k === 'End') { show(slides.length - 1); e.preventDefault(); }
    else if (k === 'n') { document.body.classList.toggle('show-notes'); }
    else if (k === 'l') { document.body.classList.toggle('linear'); }
  });

  document.addEventListener('click', function (e) {
    if (e.target.closest('a, button, input, textarea, pre')) return;
    if (document.body.classList.contains('linear')) return;
    show(e.clientX < window.innerWidth * 0.25 ? index - 1 : index + 1);
  });

  window.addEventListener('hashchange', fromHash);
  fromHash();
})();
