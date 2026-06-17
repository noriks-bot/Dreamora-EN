<?php
/**
 * Lunelle front page (homepage).
 * Clean WP homepage: hero -> trust badges -> featured product -> reviews -> CTA.
 * Header & footer come from get_header() / get_footer().
 *
 * @package lunelle
 */

get_header();

$product_url = home_url( '/product/lunelle-deluxe-sleep-mask/' );
$shop_url    = home_url( '/shop/' );
$img         = '/static/site/cdn/shop/files/';
$hero_img    = $img . 'Dreamora_Deluxe_couple_in_bed.jpg';
$feat_img    = $img . 'Deluxe_-_New_product_photos_1_18e17538-da2f-4264-9291-24db7ef19860.jpg';
$life_img    = $img . 'Dreamora_Pro_2.0_-_Lifestyle_Images.jpg';
?>

<style>
  .hp{font-family:'Inter',system-ui,-apple-system,sans-serif;color:#16202b;}
  .hp-wrap{max-width:1280px;margin:0 auto;padding:0 24px;}
  @media (max-width:749px){.hp-wrap{padding:0 16px;}}
  .hp section{box-sizing:border-box;}
  .hp-btn{display:inline-flex;align-items:center;justify-content:center;font-weight:600;font-size:16px;padding:15px 34px;border-radius:8px;text-decoration:none;transition:.15s;}
  .hp-btn-primary{background:#121212;color:#fff;}
  .hp-btn-primary:hover{opacity:.85;}
  .hp-btn-outline{background:#fff;color:#121212;border:2px solid #121212;}
  .hp-btn-outline:hover{background:#121212;color:#fff;}

  /* Hero */
  .hp-hero-bg{background:#eef0f7;}
  .hp-hero{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;padding:56px 0;}
  .hp-hero h1{font-size:44px;line-height:1.1;font-weight:800;margin:0 0 18px;letter-spacing:-.02em;}
  .hp-hero p.lead{font-size:18px;line-height:1.6;color:#3a4754;margin:0 0 26px;}
  .hp-hero .hp-stars{color:#f5a623;font-size:18px;margin-bottom:14px;}
  .hp-hero .hp-stars span{color:#3a4754;font-size:14px;margin-left:8px;}
  .hp-hero-img img{width:100%;border-radius:16px;display:block;}
  .hp-cta-row{display:flex;gap:14px;flex-wrap:wrap;}
  @media (max-width:749px){.hp-hero{grid-template-columns:1fr;gap:28px;padding:32px 0;}.hp-hero h1{font-size:32px;}}

  /* Trust badges */
  .hp-trust{background:#121212;color:#fff;}
  .hp-trust-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;padding:26px 0;text-align:center;}
  .hp-trust-grid .t-item{font-size:14px;font-weight:600;line-height:1.4;}
  .hp-trust-grid .t-item strong{display:block;font-size:22px;margin-bottom:4px;}
  @media (max-width:749px){.hp-trust-grid{grid-template-columns:repeat(2,1fr);gap:18px;}}

  /* Featured */
  .hp-feat{padding:64px 0;}
  .hp-feat-inner{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;}
  .hp-feat-img img{width:100%;border-radius:16px;display:block;}
  .hp-feat h2{font-size:34px;font-weight:800;margin:0 0 16px;letter-spacing:-.01em;}
  .hp-feat ul{list-style:none;padding:0;margin:0 0 26px;}
  .hp-feat li{padding:8px 0 8px 30px;position:relative;font-size:16px;color:#3a4754;}
  .hp-feat li:before{content:"✓";position:absolute;left:0;color:#2fa84f;font-weight:800;}
  .hp-feat .price{font-size:26px;font-weight:800;margin:0 0 20px;}
  .hp-feat .price s{color:#9aa4ad;font-weight:500;font-size:18px;margin-right:10px;}
  @media (max-width:749px){.hp-feat{padding:40px 0;}.hp-feat-inner{grid-template-columns:1fr;gap:28px;}.hp-feat h2{font-size:26px;}}

  /* Reviews */
  .hp-rev{background:#f7f8fa;padding:60px 0;}
  .hp-rev h2{text-align:center;font-size:30px;font-weight:800;margin:0 0 36px;}
  .hp-rev-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
  .hp-rev-card{background:#fff;border-radius:14px;padding:26px;box-shadow:0 2px 14px rgba(0,0,0,.05);}
  .hp-rev-card .stars{color:#f5a623;margin-bottom:10px;}
  .hp-rev-card p{font-size:15px;line-height:1.6;color:#3a4754;margin:0 0 14px;}
  .hp-rev-card .name{font-weight:700;font-size:14px;}
  @media (max-width:749px){.hp-rev-grid{grid-template-columns:1fr;}}

  /* Final CTA */
  .hp-final{padding:64px 0;text-align:center;}
  .hp-final h2{font-size:32px;font-weight:800;margin:0 0 14px;}
  .hp-final p{font-size:17px;color:#3a4754;margin:0 0 26px;}
</style>

<div class="hp">

  <!-- Hero -->
  <section class="hp-hero-bg">
    <div class="hp-wrap hp-hero">
      <div class="hp-hero-text">
        <div class="hp-stars">★★★★★ <span>4.8/5 · 12,000+ happy sleepers</span></div>
        <h1>Sleep deeper. Block the world. Wake up restored.</h1>
        <p class="lead">The Lunelle™ Deluxe Sleep Mask with built-in Bluetooth headphones — total darkness, your favourite sounds, zero pressure on your eyes.</p>
        <div class="hp-cta-row">
          <a href="<?php echo esc_url( $product_url ); ?>" class="hp-btn hp-btn-primary">Shop the Sleep Mask</a>
          <a href="<?php echo esc_url( $shop_url ); ?>" class="hp-btn hp-btn-outline">Browse all</a>
        </div>
      </div>
      <div class="hp-hero-img">
        <img src="<?php echo esc_attr( $hero_img ); ?>" alt="Lunelle Deluxe Sleep Mask" loading="eager">
      </div>
    </div>
  </section>

  <!-- Trust badges -->
  <section class="hp-trust">
    <div class="hp-wrap hp-trust-grid">
      <div class="t-item"><strong>4.8★</strong>12,000+ reviews</div>
      <div class="t-item"><strong>30</strong>nights risk-free</div>
      <div class="t-item"><strong>FREE</strong>shipping over €70</div>
      <div class="t-item"><strong>1yr</strong>warranty</div>
    </div>
  </section>

  <!-- Featured product -->
  <section class="hp-feat">
    <div class="hp-wrap hp-feat-inner">
      <div class="hp-feat-img">
        <img src="<?php echo esc_attr( $feat_img ); ?>" alt="Lunelle Deluxe Sleep Mask" loading="lazy">
      </div>
      <div class="hp-feat-text">
        <h2>Lunelle™ Deluxe Sleep Mask Headphones</h2>
        <ul>
          <li>100% blackout — contoured cups, zero pressure on the eyes</li>
          <li>Built-in ultra-thin Bluetooth speakers</li>
          <li>Up to 10 hours of battery on a single charge</li>
          <li>Breathable memory foam, machine-washable cover</li>
        </ul>
        <div class="price"><s>€165.90</s> €82.95</div>
        <a href="<?php echo esc_url( $product_url ); ?>" class="hp-btn hp-btn-primary">Add to cart</a>
      </div>
    </div>
  </section>

  <!-- Reviews -->
  <section class="hp-rev">
    <div class="hp-wrap">
      <h2>What our customers say</h2>
      <div class="hp-rev-grid">
        <div class="hp-rev-card">
          <div class="stars">★★★★★</div>
          <p>"Best sleep I've had in years. The headphones are so thin I forget I'm wearing them."</p>
          <div class="name">— Sarah M.</div>
        </div>
        <div class="hp-rev-card">
          <div class="stars">★★★★★</div>
          <p>"Total blackout and great sound. I travel a lot and this is now in my carry-on permanently."</p>
          <div class="name">— James K.</div>
        </div>
        <div class="hp-rev-card">
          <div class="stars">★★★★★</div>
          <p>"My partner snores — now I just play rain sounds and drift off. Game changer."</p>
          <div class="name">— Emma R.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA -->
  <section class="hp-final">
    <div class="hp-wrap">
      <h2>Ready for your best sleep?</h2>
      <p>Try Lunelle risk-free for 30 nights. Love it or your money back.</p>
      <a href="<?php echo esc_url( $product_url ); ?>" class="hp-btn hp-btn-primary">Shop now</a>
    </div>
  </section>

</div>

<?php
get_footer();
