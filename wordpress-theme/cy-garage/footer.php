<!-- FOOTER -->
<footer>
  <div class="f-logo">CY <span>GARAGE</span></div>
  <div class="f-center">東京都江東区南砂</div>
  <div class="f-right">
    <?php $ig = esc_html( cyg_opt( 'ig_handle', 'cy_garage_official' ) ); ?>
    <a href="https://www.instagram.com/<?php echo $ig; ?>/" class="f-ig" target="_blank" rel="noopener noreferrer">@<?php echo $ig; ?></a>
    <div class="f-copy">© <?php echo date( 'Y' ); ?> CY GARAGE</div>
  </div>
</footer>

<!-- STICKY CTA -->
<div class="sticky-cta" id="sticky-cta">
  <a href="<?php echo esc_url( home_url( '/#appraisal' ) ); ?>" class="sticky-cta-inner">
    <span class="sticky-cta-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><line x1="10" y1="9" x2="8" y2="9"/></svg>
    </span>
    <span>
      <span class="sticky-cta-main">無料査定を依頼する</span>
      <span class="sticky-cta-sub">社長が直接対応 · 費用は一切かかりません</span>
    </span>
  </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
