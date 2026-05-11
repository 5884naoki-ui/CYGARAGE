/**
 * CY GARAGE — main.js
 * wp_localize_script で CYG オブジェクトが渡される
 * CYG.themeUri : テーマディレクトリのURL
 * CYG.homeUrl  : サイトのトップURL
 */

/* ============================================================
   1. HEADER SCROLL
   ============================================================ */
(function () {
  var header = document.getElementById('main-header');
  if (!header) return;
  window.addEventListener('scroll', function () {
    header.classList.toggle('scrolled', window.scrollY > 60);
  }, { passive: true });
})();

/* ============================================================
   2. MOBILE MENU TOGGLE
   ============================================================ */
(function () {
  var btn = document.getElementById('mobile-menu-btn');
  var nav = document.getElementById('main-nav');
  if (!btn || !nav) return;
  btn.addEventListener('click', function () {
    btn.classList.toggle('open');
    nav.classList.toggle('mobile-open');
  });
  nav.querySelectorAll('a').forEach(function (a) {
    a.addEventListener('click', function () {
      btn.classList.remove('open');
      nav.classList.remove('mobile-open');
    });
  });
})();

/* ============================================================
   3. STICKY CTA
   ============================================================ */
(function () {
  var cta  = document.getElementById('sticky-cta');
  if (!cta) return;
  var form = document.getElementById('appraisal');
  var raf  = false;
  function update() {
    raf = false;
    var scrolled  = window.scrollY > window.innerHeight * 0.65;
    var nearForm  = form && (function () {
      var r = form.getBoundingClientRect();
      return r.top < window.innerHeight && r.bottom > 0;
    })();
    cta.classList.toggle('is-visible', scrolled && !nearForm);
  }
  window.addEventListener('scroll', function () {
    if (!raf) { raf = true; requestAnimationFrame(update); }
  }, { passive: true });
  update();
})();

/* ============================================================
   4. REEL MUTE TOGGLE
   ============================================================ */
var SVG_MUTED = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/></svg>';
var SVG_SOUND = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>';

function toggleMute(btn) {
  var video = btn.closest('.reel-video').querySelector('video');
  if (!video) return;
  document.querySelectorAll('.reel-video video').forEach(function (v) {
    if (v !== video) {
      v.muted = true;
      var muteBtn = v.closest('.reel-video').querySelector('.reel-mute-btn');
      if (muteBtn) muteBtn.innerHTML = SVG_MUTED;
    }
  });
  video.muted = !video.muted;
  btn.innerHTML = video.muted ? SVG_MUTED : SVG_SOUND;
}

/* ============================================================
   5. MARQUEE — SOLD CARS
   画像パスは CYG.themeUri + '/assets/images/販売実績/' + filename
   ============================================================ */
var cars1 = [
  { n: 'Ford F-150',              t: 'sell', img: '095C2D0F-4EC2-42F6-8EA5-09B946829131.jpeg' },
  { n: 'Lamborghini Urus',        t: 'buy',  img: '09EDC1FE-436B-4147-8BD2-589225FB9215.jpeg' },
  { n: 'Ferrari Roma',            t: 'sell', img: '13A4AD8F-E073-4C5A-A789-151CB3670E95.jpeg' },
  { n: 'Mercedes G500 4×4²',      t: 'buy',  img: '1748AF84-C24C-422E-80C2-D403444C2523.jpeg' },
  { n: 'Porsche Macan',           t: 'sell', img: '17BAEBF6-0EBF-4439-BA7A-60F2B321193A.jpeg' },
  { n: 'Bentley Mulsanne',        t: 'buy',  img: '18F9B5C3-9716-459E-B302-A5EC6B836C8B.jpeg' },
  { n: 'Maserati Quattroporte',   t: 'sell', img: '20927DBE-BF8B-4921-89E6-19A9A661D4B5.jpeg' },
  { n: 'Plymouth Prowler',        t: 'buy',  img: '2452E7E1-5532-4E8C-A14A-6F0E920FAC6D.jpeg' },
  { n: 'Rare Supercar',           t: 'sell', img: '2A990044-FBD7-4EB2-9231-C0FD1EBA5FE4.jpeg' },
  { n: 'Morgan Roadster',         t: 'buy',  img: '2C971FDC-7748-49C8-BFC5-2BF83E8B5923.jpeg' }
];
var cars2 = [
  { n: 'Land Rover Defender',     t: 'sell', img: '2D8DAF60-BC45-43AD-8D55-ABEBF1E20E91.jpeg' },
  { n: 'Cadillac CTS-V',          t: 'buy',  img: '2E1AA452-33F6-4129-A78B-D6BBD8B61E17.jpeg' },
  { n: 'Tesla Model S',           t: 'sell', img: '3129C130-CE79-4D85-A7A8-54E3496D51FA.jpeg' },
  { n: 'Bentley Continental GT',  t: 'buy',  img: '3683534F-3246-4900-AE74-1A3A36FA0348.jpeg' },
  { n: 'Lincoln Navigator',       t: 'sell', img: '38AB0529-C928-474A-A390-C9A928B290E7.jpeg' },
  { n: 'Aston Martin DBS',        t: 'buy',  img: '393636BD-AD79-4EC9-9EA5-E79D2C3254D9.jpeg' },
  { n: 'Audi R8',                 t: 'sell', img: '3C29063F-D821-458C-97A5-CDF1347E527A.jpeg' },
  { n: 'Ford Mustang GT',         t: 'buy',  img: '439A95F8-0FC0-4B4A-9A91-630ABE6A6DA6.jpeg' },
  { n: 'Mercedes AMG GT 63',      t: 'sell', img: '43A96E63-55BC-4053-98A0-4B8DC2597E4E.jpeg' },
  { n: 'Jeep Wrangler',           t: 'buy',  img: '494AC648-6AE8-4421-8AF3-DC97A75DAE40.jpeg' }
];

function renderMq(id, arr) {
  var track = document.getElementById(id);
  if (!track) return;
  var baseUrl = (typeof CYG !== 'undefined' ? CYG.themeUri : '') + '/assets/images/販売実績/';
  var html = arr.concat(arr).map(function (c) {
    var badgeLabel = c.t === 'sell' ? '販売' : '買取';
    var initials   = c.n.split(' ').map(function (w) { return w[0]; }).join('').slice(0, 3).toUpperCase();
    var imgUrl     = baseUrl + c.img;
    var bgStyle    = 'background-image:url(\'' + imgUrl + '\');background-size:cover;background-position:center;';
    return '<div class="sold-card" style="' + bgStyle + '">'
      + '<div class="sold-card-ph"></div>'
      + '<span class="sold-badge ' + c.t + '">' + badgeLabel + '</span>'
      + '<div class="sold-card-info">'
      + '<div class="sold-car-name">' + c.n + '</div>'
      + '</div>'
      + '</div>';
  }).join('');
  track.innerHTML = html;
}
renderMq('mq1', cars1);
renderMq('mq2', cars2);

/* ============================================================
   6. HERO COLLAGE
   画像パスは CYG.themeUri + '/assets/images/webp/' + filename
   ============================================================ */
(function () {
  var collage = document.getElementById('hero-collage');
  if (!collage) return;
  var baseUrl = (typeof CYG !== 'undefined' ? CYG.themeUri : '') + '/assets/images/webp/';
  var tiles = [
    { x: 2,  y: 8,  w: 26, h: 34, rot: -4, label: 'MASERATI',   badge: 'SOLD',  img: '01.webp' },
    { x: 30, y: 2,  w: 22, h: 28, rot:  3, label: 'F-150',      badge: 'SOLD',  img: '02.webp' },
    { x: 54, y: 6,  w: 24, h: 32, rot: -2, label: 'FERRARI',    badge: 'STOCK', img: '03.webp' },
    { x: 78, y: 12, w: 20, h: 26, rot:  4, label: 'LAMBO',      badge: 'SOLD',  img: '04.webp' },
    { x: 6,  y: 48, w: 22, h: 28, rot:  5, label: 'CHALLENGER', badge: 'SOLD',  img: '05.webp' },
    { x: 32, y: 44, w: 26, h: 34, rot: -3, label: 'NAVIGATOR',  badge: 'STOCK', img: '06.webp' },
    { x: 62, y: 48, w: 24, h: 30, rot:  4, label: 'BENTLEY',    badge: 'SOLD',  img: '07.webp' },
    { x: 14, y: 78, w: 20, h: 20, rot: -3, label: 'PORSCHE',    badge: 'STOCK', img: '08.webp' },
    { x: 46, y: 80, w: 22, h: 18, rot:  2, label: 'MUSTANG',    badge: 'SOLD',  img: '09.webp' },
    { x: 74, y: 76, w: 22, h: 22, rot: -4, label: 'G-WAGON',    badge: 'SOLD',  img: '10.webp' }
  ];
  collage.innerHTML = tiles.map(function (t) {
    var bgStyle = 'background-image:url(\'' + baseUrl + t.img + '\');background-size:cover;background-position:center;';
    return '<div class="collage-tile" style="left:' + t.x + '%;top:' + t.y + '%;width:' + t.w + '%;height:' + t.h + '%;transform:rotate(' + t.rot + 'deg);' + bgStyle + '">'
      + '<span class="collage-badge">' + t.badge + '</span>'
      + '<span class="collage-label">' + t.label + '</span>'
      + '</div>';
  }).join('');
})();
