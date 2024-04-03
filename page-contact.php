<?php get_header(); ?>
<?php get_sidebar(); ?>
<main class="contact">
  <div class="container">
    <div class="logo">
      <h1 class="logo__title"><a href="<?php echo home_url(); ?>" class="logo__link"><span class="logo__stagger">N</span><span class="logo__stagger">A</span><span class="logo__stagger">O</span> <span class="logo__stagger">Y</span><span class="logo__stagger">A</span><span class="logo__stagger">M</span><span class="logo__stagger">A</span></a></h1>
      <p class="logo__url">https://webcod6.com</p>
      <p class="logo__copyright"><span>©️</span>NAO YAMA</p>
    </div>
    <div class="contact__form">
      <h2 class="pageTitle contact__pageTitle"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>