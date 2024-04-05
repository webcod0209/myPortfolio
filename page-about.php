<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="pageAbout">
  <div class="container">
    <h2 class="pageTitle"><?php the_title(); ?></h2>
    <div class="pageAbout__contents">
      <img src="<?php echo get_template_directory_uri(); ?>/src/image/profile_img.png" alt="" class="pageAbout__img">
      <dl class="pageAbout__list">
        <dt class="pageAbout__term">Profile</dt>
        <dd class="pageAbout__description">Webコーダー<br>大阪生まれ大阪育ち<br>フリーランスで活動<br>WordPressを中心に制作案件を受注<br>STUDIOなどノーコードでの制作も行なってます</dd>
        <dt class="pageAbout__term">Hours</dt>
        <dd class="pageAbout__description">月水土日　8:00~20:00<br>火木金　19:00~23:00</dd>
        <dt class="pageAbout__term">Contact</dt>
        <dd class="pageAbout__description">webcod0209@gmail.com</dd>
        <dt class="pageAbout__term">Address</dt>
        <dd class="pageAbout__description">大阪府大阪市<br>oosaka-shi, oosaka-fu Japan</dd>
      </dl>
    </div>
  </div>
</main>

<?php get_footer(); ?>