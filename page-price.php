<?php get_header(); ?>
<?php get_sidebar(); ?>
<main class="price">
  <div class="container">
    <div class="logo">
      <h1 class="logo__title"><a href="<?php echo home_url(); ?>" class="logo__link"><span class="logo__stagger">N</span><span class="logo__stagger">A</span><span class="logo__stagger">O</span> <span class="logo__stagger">Y</span><span class="logo__stagger">A</span><span class="logo__stagger">M</span><span class="logo__stagger">A</span></a></h1>
      <p class="logo__url">https://webcod6.com</p>
      <p class="logo__copyright"><span>©️</span>NAO YAMA</p>
    </div>
    <div class="price__content">
      <h2 class="pageTitle price__pageTitle"><?php the_title(); ?></h2>
      <dl class="price__list">
        <dt class="price__term">TOPページ</dt>
        <dd class="price__description">￥15,000〜</dd>
        <dt class="price__term">下層ページ</dt>
        <dd class="price__description">￥10,000〜</dd>
        <dt class="price__term">LPコーディング</dt>
        <dd class="price__description">￥30,000〜</dd>
        <dt class="price__term">WordPress(既存テーマ作成)</dt>
        <dd class="price__description">￥50,000〜</dd>
        <dt class="price__term">WordPress(オリジナルテーマ5p)	</dt>
        <dd class="price__description">￥100,000〜</dd>
        <dt class="price__term">サイト運営保守</dt>
        <dd class="price__description">￥5,000〜/月</dd>
      </dl>
      <ul class="price__notes">
        <li class="price__note">CMS実装や修正内容、サイト規模によって金額が上下することがございます。</li>
        <li class="price__note">スマホ用レスポンシブ対応込みの料金となっております。タブレット端末対応は別途料金頂戴致します。</li>
      </ul>
    </div>
  </div>
</main>

<?php get_footer(); ?>