/* Asigato Flowers — front-end behaviour (nav, reveals, petals, marquee). */
(function () {
  'use strict';

  /* nav shadow on scroll */
  var nav = document.getElementById('nav');
  if (nav) {
    window.addEventListener('scroll', function () {
      nav.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });
  }

  /* scroll reveal */
  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealEls.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('visible'); });
  }

  /* falling petals in hero */
  var layer = document.getElementById('petals');
  if (layer && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    var palette = ['#BCD2B6', '#DCE8D6', '#8FA983', '#E9C9C2', '#EEF4E9'];
    for (var i = 0; i < 14; i++) {
      var p = document.createElement('div');
      p.className = 'petal';
      var size = 12 + Math.random() * 16;
      var dur = 14 + Math.random() * 16;
      p.style.left = (Math.random() * 100) + '%';
      p.style.width = p.style.height = size + 'px';
      p.style.animation = 'fall ' + dur + 's linear ' + (-Math.random() * dur) + 's infinite, sway ' + (5 + Math.random() * 5) + 's ease-in-out infinite';
      var c = palette[Math.floor(Math.random() * palette.length)];
      p.innerHTML = '<svg viewBox="0 0 24 24"><path d="M12 2C15 6 17 10 15.5 15.5 13 20 8 21 4.5 18 1.5 15 2 8 5 5 7.5 2.6 10 2 12 2z" fill="' + c + '" opacity=".85"/></svg>';
      layer.appendChild(p);
    }
  }

  /* duplicate marquee content for a seamless loop */
  var track = document.getElementById('marquee');
  if (track) {
    track.innerHTML += track.innerHTML;
  }
})();
