/* ============================================================
   CY GARAGE — PARALLAX & SCROLL REVEAL ENGINE
   ============================================================ */
(function () {
  'use strict';

  var isMobile        = window.matchMedia('(max-width: 768px)').matches;
  var prefersNoMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ────────────────────────────────────────────────
     1. SCROLL REVEAL
     IntersectionObserver で各要素がビューポートに入ったとき
     .visible クラスを付与してフェードイン
  ──────────────────────────────────────────────── */
  (function initReveal() {
    function sr(sel, mods, stagger) {
      document.querySelectorAll(sel).forEach(function (el, i) {
        if (el.closest('.hero')) return;
        el.classList.add('sr');
        if (mods) mods.split(' ').forEach(function (c) { if (c) el.classList.add(c); });
        if (stagger && i > 0) el.classList.add('sr--d' + Math.min(i, 5));
      });
    }

    /* eyebrow：ラインが左から伸びる特別演出 */
    document.querySelectorAll('.eyebrow').forEach(function (el) {
      if (el.closest('.hero')) return;
      el.classList.add('sr', 'sr-eyebrow');
    });

    /* 見出し・リード */
    sr('.sec-h2',          '',         false);
    sr('.lead',            'sr--d1',   false);
    sr('.why-tagline',     'sr--d2',   false);
    sr('.boss-body',       'sr--d2',   false);
    sr('.form-text h2',    'sr--d1',   false);
    sr('.form-text > p',   'sr--d2',   false);

    /* カードグリッド（段差スタガー） */
    sr('.why-card',    'sr--scale', true);
    sr('.voice-card',  '',          true);
    sr('.car-card',    '',          true);
    sr('.danwa-item',  '',          true);
    sr('.ig-item',     '',          true);
    sr('.step-item',   '',          true);
    sr('.bb-col',      '',          true);

    /* Instagram */
    sr('.ig-stat-big',  '',       false);
    sr('.ig-stat-sub',  'sr--d1', false);

    /* フォーム */
    sr('.appraisal-form', 'sr--right', false);

    /* Maresya — 左右から入る */
    sr('.maresya-quote',   'sr--left',  false);
    sr('.wrap-visual',     'sr--left',  false);

    /* CTA */
    sr('.sec-cta h2',          '',      false);
    sr('.sec-cta .lead',       'sr--d1',false);
    sr('.sec-cta .btn-primary','sr--d2',false);

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        e.target.classList.add('visible');
        io.unobserve(e.target);
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -48px 0px' });

    document.querySelectorAll('.sr').forEach(function (el) { io.observe(el); });
  })();

  /* ────────────────────────────────────────────────
     2. PARALLAX（デスクトップのみ）
     RAF ループで requestAnimationFrame を使い
     GPU 合成レイヤーで滑らかに動かす
  ──────────────────────────────────────────────── */
  if (!isMobile && !prefersNoMotion) {
    (function initParallax() {

      /* ── Hero コラージュタイル ──
         タイルごとに異なるスピードを割り当て、奥行き感を演出 */
      var SPEEDS = [0.22, 0.38, 0.13, 0.44, 0.28, 0.10, 0.42, 0.17, 0.32, 0.24];
      var tiles  = [];
      document.querySelectorAll('.collage-tile').forEach(function (el, i) {
        var m   = (el.getAttribute('style') || '').match(/rotate\(([-\d.]+)deg\)/);
        var rot = m ? parseFloat(m[1]) : 0;
        el.style.willChange = 'transform';
        tiles.push({ el: el, rot: rot, speed: SPEEDS[i % SPEEDS.length] });
      });

      /* ── Boss セクション ──
         写真エリアを scale(1.08) + translateY でクラシックなパララックス
         overflow:hidden がすでにあるのでクリッピングされる */
      var bossSection = document.querySelector('.sec-boss');
      var bossPhoto   = document.querySelector('.boss-photo');
      if (bossPhoto) bossPhoto.style.willChange = 'transform';

      var rafPending = false;

      function tick() {
        var sy = window.scrollY;
        var vh = window.innerHeight;
        rafPending = false;

        /* コラージュタイル：既存の rotate を保持しながら Y 移動 */
        tiles.forEach(function (t) {
          t.el.style.transform =
            'rotate(' + t.rot + 'deg) translateY(' + (-sy * t.speed) + 'px)';
        });

        /* Boss 写真：セクションが画面内にあるときだけ計算 */
        if (bossSection && bossPhoto) {
          var r = bossSection.getBoundingClientRect();
          if (r.top < vh && r.bottom > 0) {
            var pct = (vh - r.top) / (vh + r.height); /* 0 → 1 */
            var yPx = (pct - 0.5) * 90;               /* ±45px */
            bossPhoto.style.transform = 'scale(1.08) translateY(' + yPx + 'px)';
          }
        }
      }

      window.addEventListener('scroll', function () {
        if (!rafPending) { rafPending = true; requestAnimationFrame(tick); }
      }, { passive: true });

      tick(); /* 初期位置をセット */
    })();
  }

  /* ────────────────────────────────────────────────
     3. カウンターアニメーション（100万人）
     ビューポートに入ったとき 0 → 100 を ease-out でカウントアップ
  ──────────────────────────────────────────────── */
  (function initCounter() {
    var el = document.querySelector('.ig-stat-big');
    if (!el || prefersNoMotion) return;

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        io.unobserve(e.target);

        var t0  = performance.now();
        var DUR = 1800;
        var END = 100;

        (function step(now) {
          var t    = Math.min((now - t0) / DUR, 1);
          var ease = 1 - Math.pow(1 - t, 4); /* ease-out quart */
          el.textContent = Math.round(ease * END) + '万人';
          if (t < 1) requestAnimationFrame(step);
        })(t0);
      });
    }, { threshold: 0.6 });

    io.observe(el);
  })();

})();
