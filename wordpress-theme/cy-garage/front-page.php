<?php get_header(); ?>

<!-- 1. HERO — Navy photo collage -->
<section class="hero">
  <div class="hero-collage" id="hero-collage"></div>
  <div class="hero-overlay"></div>

  <div class="hero-content">
    <div class="hero-left">
      <div class="hero-eyebrow">
        <div class="line"></div>
        <span>CY GARAGE — MIAMI STYLE RARE CARS</span>
      </div>
      <h1><?php echo nl2br( esc_html( cyg_opt( 'hero_h1', "まれしゃ好きは、\nここに来い。" ) ) ); ?></h1>
      <p class="hero-sub"><?php echo nl2br( esc_html( cyg_opt( 'hero_sub', "被らない車。被らない人間。\nそういうやつが、ここにいる。" ) ) ); ?></p>
      <div class="hero-btns">
        <a href="<?php echo esc_url( home_url( '/#inventory' ) ); ?>" class="btn-primary">在庫を見る</a>
        <a href="<?php echo esc_url( home_url( '/#appraisal' ) ); ?>" class="btn-outline">社長に相談する</a>
      </div>
    </div>

    <div class="hero-right">
      <div class="hero-reels">
        <div class="reel-card c1">
          <div class="reel-header">
            <div class="reel-dot"></div>
            <span class="reel-handle">@cy_garage_official</span>
          </div>
          <div class="reel-video">
            <video autoplay muted loop playsinline style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;">
              <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/copy_49715AAC-CFF0-44EF-B3FD-331E8E9C445C.mp4" type="video/mp4">
            </video>
            <button class="reel-mute-btn" onclick="toggleMute(this)" aria-label="音声切り替え">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/></svg>
            </button>
          </div>
          <div class="reel-footer">
            <span class="reel-tag sell">買取</span>
            <span class="reel-label">まれしゃ、集まれ</span>
          </div>
        </div>
        <div class="reel-card c2">
          <div class="reel-header">
            <div class="reel-dot"></div>
            <span class="reel-handle">@cy_garage_official</span>
          </div>
          <div class="reel-video">
            <video autoplay muted loop playsinline style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;">
              <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/copy_F8A61A4C-A975-450F-B473-0D8CB8F93C4A.mp4" type="video/mp4">
            </video>
            <button class="reel-mute-btn" onclick="toggleMute(this)" aria-label="音声切り替え">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/></svg>
            </button>
          </div>
          <div class="reel-footer">
            <span class="reel-tag buy">販売</span>
            <span class="reel-label">まれしゃ、集まれ</span>
          </div>
        </div>
      </div>

      <div class="hero-voices">
        <div class="hv-item">
          <span class="hv-tag sell">● 買取</span>
          <p class="hv-text">「こういう車屋さん、ずっと探してたんですよ。」</p>
          <span class="hv-meta">40代・ダッジ チャレンジャー</span>
        </div>
        <div class="hv-item buy">
          <span class="hv-tag buy">● 販売</span>
          <p class="hv-text">「この車の良さわかります、の一言で決めました。」</p>
          <span class="hv-meta">30代・F-150 ラプター</span>
        </div>
        <div class="hv-item">
          <span class="hv-tag sell">● 買取</span>
          <p class="hv-text">「社長が直接電話をくれた。それだけで信頼できた。」</p>
          <span class="hv-meta">50代・フェラーリ カリフォルニア</span>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-scroll">
    <div class="hero-scroll-line"></div>
    <span>Scroll</span>
  </div>
</section>

<!-- 2. SOLD MARQUEE -->
<div class="sec-sold">
  <div class="sold-label">— SOLD &amp; BOUGHT CARS —</div>
  <div class="marquee-row marquee-row--left">
    <div class="marquee-track" id="mq1"></div>
  </div>
  <div class="marquee-row marquee-row--right">
    <div class="marquee-track" id="mq2"></div>
  </div>
</div>

<!-- 3. OWNER'S VOICE -->
<section class="sec-voice" id="voice">
  <div class="wrap">
    <div class="voice-head">
      <div class="eyebrow">OWNER'S VOICE</div>
      <h2 class="sec-h2">売った人も、<br>買った人も、<br>ここにいる。</h2>
      <p class="lead">まれしゃ好きが集まる場所。<br>その声を、そのまま届けます。</p>
    </div>
    <div class="voice-grid">
      <div class="voice-card">
        <span class="voice-tag sold">SOLD</span>
        <div class="voice-q-mark">"</div>
        <div class="voice-main">「こういう車屋さん、<br>ずっと探してたんですよ。」</div>
        <p class="voice-body">カスタムしすぎてどこにも断られ続けてた車が、ここで予想より30万高く売れました。</p>
        <div class="voice-meta">40代・男性<br>カスタム ダッジ チャレンジャー</div>
      </div>
      <div class="voice-card">
        <span class="voice-tag sold">SOLD</span>
        <div class="voice-q-mark">"</div>
        <div class="voice-main">「社長が直接電話をくれた。<br>それだけで信頼できると思った。」</div>
        <p class="voice-body">気持ちよく手放せました。この車の次のオーナーもきっといい人だと思います。</p>
        <div class="voice-meta">50代・男性<br>フェラーリ カリフォルニア</div>
      </div>
      <div class="voice-card buy">
        <span class="voice-tag purchased">PURCHASED</span>
        <div class="voice-q-mark">"</div>
        <div class="voice-main">「この車の良さわかります、<br>の一言で決めました。」</div>
        <p class="voice-body">他の店では「在庫ないです」で終わり。ここは違った。</p>
        <div class="voice-meta">30代・男性<br>フォード F-150 ラプター</div>
      </div>
    </div>

    <!-- DIALOG VIDEOS -->
    <div class="danwa">
      <div class="danwa-head">
        <div class="eyebrow">OWNER × CY GARAGE</div>
        <h3>手放した人の、<br>本音を見てほしい。</h3>
        <p class="lead">買取後、オーナーと話しています。「実際どうだったか」を、そのまま流しています。</p>
      </div>
      <div class="danwa-grid">
        <div class="danwa-item">
          <div class="danwa-play">▶</div>
          <span class="danwa-label">Video 01</span>
        </div>
        <div class="danwa-item">
          <div class="danwa-play">▶</div>
          <span class="danwa-label">Video 02</span>
        </div>
        <div class="danwa-item">
          <div class="danwa-play">▶</div>
          <span class="danwa-label">Video 03</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. INSTAGRAM -->
<section class="sec-ig">
  <div class="wrap">
    <div class="eyebrow">FOLLOW @<?php echo esc_html( cyg_opt( 'ig_handle', 'cy_garage_official' ) ); ?></div>
    <h2 class="sec-h2" style="margin-bottom:48px;">まれしゃ好き、<br>集まれ。</h2>
    <div class="ig-head">
      <div>
        <div class="ig-stat-big"><?php echo esc_html( cyg_opt( 'ig_stat_number', '100万人' ) ); ?></div>
        <div class="ig-stat-sub"><?php echo nl2br( esc_html( cyg_opt( 'ig_stat_sub', "月間リーチしている、\nまれしゃのコミュニティ。" ) ) ); ?></div>
      </div>
      <p class="lead" style="text-align:left;">売ってる人も、買った人も、<br>ここで出会っています。<br>日々、動画で発信中。</p>
    </div>
    <div class="ig-grid">
      <div class="ig-item tall" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig/20.jpeg');background-size:cover;background-position:center;"><span class="ig-item-label">REEL 01</span></div>
      <div class="ig-item" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig/21.jpeg');background-size:cover;background-position:center;"><span class="ig-item-label">REEL 02</span></div>
      <div class="ig-item" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig/22.jpeg');background-size:cover;background-position:center;"><span class="ig-item-label">REEL 03</span></div>
      <div class="ig-item" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig/23.jpeg');background-size:cover;background-position:center;"><span class="ig-item-label">REEL 04</span></div>
      <div class="ig-item" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig/24.jpeg');background-size:cover;background-position:center;"><span class="ig-item-label">REEL 05</span></div>
    </div>
    <div class="ig-follow-row">
      <?php $ig_handle = esc_html( cyg_opt( 'ig_handle', 'cy_garage_official' ) ); ?>
      <div class="ig-handle">@<?php echo $ig_handle; ?></div>
      <a href="https://www.instagram.com/<?php echo $ig_handle; ?>/" class="link-arrow" target="_blank" rel="noopener noreferrer">@<?php echo $ig_handle; ?> をフォロー →</a>
    </div>
  </div>
</section>

<!-- 5. THE BOSS -->
<section class="sec-boss">
  <div class="boss-inner">
    <div class="boss-photo" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/boss-hero.jpg');background-size:cover;background-position:center top;"></div>
    <div class="boss-content">
      <div class="eyebrow">THE BOSS</div>
      <h2 class="sec-h2">稀車を愛する、<br>代表の目利き。</h2>
      <p class="boss-body"><?php echo nl2br( esc_html( cyg_opt( 'boss_body', "かましてる車が好きで、\n被りたくない人間の味方。\nそれだけをずっとやってきた。" ) ) ); ?></p>
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="link-arrow">社長について詳しく</a>
    </div>
  </div>
</section>

<!-- 6. MARESYA -->
<section class="sec-maresya">
  <div class="wrap maresya-inner">
    <div>
      <div class="eyebrow">WHAT IS 稀車</div>
      <div class="maresya-quote">稀車と書いて、<br><span class="gold">まれしゃ。</span></div>
    </div>
    <div>
      <h2 class="sec-h2">被らない一台が、<br>ここにある。</h2>
      <p class="lead" style="font-size:16px;">個性が強くて、まず被らない。<br>走ってたら、振り返られる。<br>一台一台に、オーナーとの物語がある。<br>そういう車を、CY GARAGEでは<br><strong style="color:#fff; font-weight:700;">まれしゃ</strong>という。</p>
    </div>
  </div>
</section>

<!-- 7. WHY -->
<section class="sec-why" id="why">
  <div class="wrap">
    <div class="eyebrow">WHY CY GARAGE</div>
    <h2 class="sec-h2">個性的な車の価値は、<br>わかる人間に<br>査定させてほしい。</h2>
    <p class="why-tagline">車のストーリーを聞いて買い取る店、<br>ほかにないと思います。</p>
    <div class="why-cards">
      <div class="why-card">
        <div class="why-num">01</div>
        <h3>まれしゃの価値を、<br><span class="gold">ちゃんとわかる眼がある</span></h3>
        <p>一般の買取店が「個性が強すぎる」と値引く車に、ちゃんと値段をつけられる。それがCY GARAGEの眼。</p>
      </div>
      <div class="why-card">
        <div class="why-num">02</div>
        <h3>売り切る販売力があるから、<br><span class="gold">高く買える</span></h3>
        <p>まれしゃを欲しがる人と直接つながっているから、個性的な車でも高く買い取れる。</p>
      </div>
      <div class="why-card">
        <div class="why-num">03</div>
        <h3>ストーリーごと、<br><span class="gold">買い取らせていただきます。</span></h3>
        <p>車への想いをフォームに書いてもらう。そのストーリーを、次のオーナーへ伝える。それがCY GARAGEの流儀。</p>
      </div>
    </div>
  </div>
</section>

<!-- 8. INVENTORY -->
<section class="sec-inv" id="inventory">
  <div class="wrap">
    <div class="inv-head">
      <div>
        <div class="eyebrow">BOSS'S PICK</div>
        <h2 class="sec-h2">社長が今、<br>推したい一台。</h2>
      </div>
      <a href="<?php echo esc_url( home_url( '/vehicles/' ) ); ?>" class="link-arrow">すべての在庫を見る →</a>
    </div>
    <div class="inv-grid">
      <div class="car-card main" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/webp/12.webp');background-size:cover;background-position:center;">
        <div class="badge-new">NEW</div>
        <div class="car-card-ph"></div>
        <div class="car-info">
          <div class="car-tag">MASERATI — 2013</div>
          <div class="car-name">GranTurismo</div>
          <div class="car-spec">走行 3.1万km</div>
          <div class="car-price">¥658万円</div>
          <p class="car-story">「3.1万キロのマセラティ。この走行距離はもう奇跡。まれしゃの中のまれしゃ。」</p>
        </div>
      </div>
      <div class="car-card" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/inv_01_escalade_2015.jpg');background-size:cover;background-position:center;">
        <div class="car-card-ph"></div>
        <div class="car-info">
          <div class="car-tag">LINCOLN — 2015</div>
          <div class="car-name">Navigator</div>
          <div class="car-spec">走行 6.0万km</div>
          <div class="car-price">¥695万円</div>
        </div>
      </div>
      <div class="car-card" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/inv_02_sequoia_2020.jpg');background-size:cover;background-position:center;">
        <div class="car-card-ph"></div>
        <div class="car-info">
          <div class="car-tag">FORD — 2020</div>
          <div class="car-name">F-150</div>
          <div class="car-spec">走行 5.4万km</div>
          <div class="car-price">¥598万円</div>
        </div>
      </div>
      <div class="car-card" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/inv_04_escalade_2012.jpg');background-size:cover;background-position:center;">
        <div class="car-card-ph"></div>
        <div class="car-info">
          <div class="car-tag">LINCOLN — 2012</div>
          <div class="car-name">MKT</div>
          <div class="car-spec">走行 10.6万km</div>
          <div class="car-price">¥295万円</div>
        </div>
      </div>
      <div class="car-card" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/inv_03_skyline_2013.jpg');background-size:cover;background-position:center;">
        <div class="car-card-ph"></div>
        <div class="car-info">
          <div class="car-tag">VIEW ALL</div>
          <div class="car-name">在庫一覧 →</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 9. BUYBACK COMPARE -->
<section class="sec-buyback">
  <div class="wrap">
    <div class="buyback-head">
      <div class="eyebrow" style="justify-content:center;">WHY NOT OTHERS</div>
      <h2 class="sec-h2">個性的な車が、<br><em>正しく評価される場所。</em></h2>
      <p class="lead" style="margin:0 auto;">一般の買取店とCY GARAGEの違い。</p>
    </div>
    <div class="buyback-grid">
      <div class="bb-col bad">
        <div class="bb-col-label">— 一般の買取店 —</div>
        <h3>個性的な車は、<br>損をしやすい</h3>
        <div class="bb-item"><div class="bb-icon">✗</div><div class="bb-text"><strong>カスタム車は「減点」扱い</strong>改造・ラッピング車は査定を下げる店がほとんど</div></div>
        <div class="bb-item"><div class="bb-icon">✗</div><div class="bb-text"><strong>希少車は「データ不足」</strong>相場がわからないと言われ、安く買い叩かれる</div></div>
        <div class="bb-item"><div class="bb-icon">✗</div><div class="bb-text"><strong>車への愛着は査定に関係ない</strong>エピソードや思い入れは価格に一切反映されない</div></div>
      </div>
      <div class="bb-divider"><div class="vs-circle">VS</div></div>
      <div class="bb-col good">
        <div class="bb-col-label">— CY GARAGE —</div>
        <h3>まれしゃの価値を、<br>ちゃんと見る</h3>
        <div class="bb-item"><div class="bb-icon">✓</div><div class="bb-text"><strong>個性・カスタムは「加点」要素</strong>希少性・こだわりを価値として評価する</div></div>
        <div class="bb-item"><div class="bb-icon">✓</div><div class="bb-text"><strong>稀少輸入車の専門知識と販売力</strong>売り切れるから、相場より高く買い取れる</div></div>
        <div class="bb-item"><div class="bb-icon">✓</div><div class="bb-text"><strong>ストーリーごと買い取ります</strong>車への想いを次のオーナーへ繋ぐ</div></div>
      </div>
    </div>
  </div>
</section>

<!-- 10. WRAPPING -->
<section class="sec-wrap" id="wrapping">
  <div class="wrap wrap-inner">
    <div class="wrap-visual">[ ラッピング施工例 ]</div>
    <div>
      <div class="eyebrow">CAR WRAPPING</div>
      <h2 class="sec-h2">その一台を、<br>もっと個性的に。</h2>
      <p class="lead">色を変える。質感を変える。世界にひとつの仕上がりへ。CY GARAGEのラッピングは、まれしゃをもっとまれしゃにする。</p>
      <div class="wrap-swatches">
        <div class="swatch" style="background:#1a1a2e;"></div>
        <div class="swatch" style="background:#2d1b00;"></div>
        <div class="swatch" style="background:#0d2818;"></div>
        <div class="swatch" style="background:#1a0000;"></div>
        <div class="swatch" style="background:#1c1c1c;"></div>
        <div class="swatch" style="background:linear-gradient(135deg,#c0c0c0,#808080);"></div>
        <div class="swatch" style="background:linear-gradient(135deg,#c8a96e,#a8893e);"></div>
      </div>
      <a href="<?php echo esc_url( home_url( '/wrapping/' ) ); ?>" class="link-arrow" style="margin-top:36px;">ラッピングについて詳しく →</a>
    </div>
  </div>
</section>

<!-- 11. APPRAISAL FORM -->
<section class="sec-form" id="appraisal">
  <div class="wrap form-inner">
    <div class="form-text">
      <div class="eyebrow">APPRAISAL / 買取・無料査定</div>
      <h2>あなたの車の<br><span class="gold">ストーリー</span>ごと、<br>査定します。</h2>
      <p>大手に出す前に、一度だけ聞いてみてください。社長が直接見て、根拠のある金額をお伝えします。希少車・カスタム車・ラッピング車、大歓迎。全国出張査定、対応します。</p>
      <div class="form-steps">
        <div class="step-item">
          <div class="step-num-c">01</div>
          <div class="step-text">
            <strong>フォームから申し込み</strong>
            <span>車種・年式・走行距離を入力。この車との思い出があれば、ぜひ書いてください。</span>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num-c">02</div>
          <div class="step-text">
            <strong>社長から直接ご連絡</strong>
            <span>24時間以内にご連絡します。</span>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num-c">03</div>
          <div class="step-text">
            <strong>査定金額のご提示</strong>
            <span>根拠のある金額をお伝えします。全国対応・出張査定もご相談可。</span>
          </div>
        </div>
      </div>
    </div>

    <form class="appraisal-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
      <?php wp_nonce_field( 'cyg_appraisal_action', 'cyg_appraisal_nonce' ); ?>
      <input type="hidden" name="action" value="cyg_appraisal">
      <div class="form-title">無料査定を申し込む</div>
      <div class="form-sub">24時間以内に折り返しご連絡</div>
      <div class="form-field">
        <label>お名前</label>
        <input class="f-input" type="text" name="appraisal_name" placeholder="山田 太郎" required>
      </div>
      <div class="form-field">
        <label>お電話番号</label>
        <input class="f-input" type="tel" name="appraisal_tel" placeholder="090-0000-0000" required>
      </div>
      <div class="form-field">
        <label>車種・メーカー</label>
        <input class="f-input" type="text" name="appraisal_car" placeholder="例：フォード F-150 ラプター 2020">
      </div>
      <div class="form-field">
        <label>走行距離</label>
        <input class="f-input" type="text" name="appraisal_mileage" placeholder="例：5.4万km">
      </div>
      <div class="form-field">
        <label>あなたと、この車の物語</label>
        <textarea class="f-textarea" name="appraisal_story" placeholder="どこに行ったか。何年一緒にいたか。手放したくなった理由でも、全部聞かせてください。"></textarea>
        <p class="form-story-note">書いてもらった物語は、Instagramで発信することがあります。</p>
      </div>
      <button type="submit" class="form-submit">無料で査定を依頼する</button>
      <p class="form-foot">費用は一切かかりません。<br>しつこい営業電話はしません。</p>
    </form>
  </div>
</section>

<!-- 12. LAST CTA -->
<section class="sec-cta">
  <div class="eyebrow" style="justify-content:center;">SELL YOUR CAR</div>
  <h2>あなたの車、<br>まれしゃ価格で。</h2>
  <p class="lead">ストーリーごと、<br>買い取らせていただきます。</p>
  <a href="<?php echo esc_url( home_url( '/#appraisal' ) ); ?>" class="btn-primary">無料査定を依頼する</a>
</section>

<?php get_footer(); ?>
