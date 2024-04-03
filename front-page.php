<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="front-page" id="top">
  <div class="container">
    <div class="logo">
      <h1 class="logo__title"><a href="<?php echo home_url(); ?>" class="logo__link"><span class="logo__stagger">N</span><span class="logo__stagger">A</span><span class="logo__stagger">O</span> <span class="logo__stagger">Y</span><span class="logo__stagger">A</span><span class="logo__stagger">M</span><span class="logo__stagger">A</span></a></h1>
      <p class="logo__url">https://webcod6.com</p>
      <p class="logo__copyright"><span>©️</span>NAO YAMA</p>
    </div>
    <ul class="works">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <li class="works__item">
          <h2 class="works__item__title"><a href="<?php the_permalink(); ?>" class="works__link"><?php the_title(); ?></a></h2>
          <p class="works__item__sorce"><a href="<?php the_permalink(); ?>" class="works__link"><?php echo get_the_category()[0]->name; ?></a></p>
          <a href="<?php the_permalink(); ?>" class="works__link"><?php the_post_thumbnail(); ?></a>
        </li>
      <?php endwhile; ?>
      <?php else: // 投稿がない場合?>
        <p>まだ投稿がありません。</p>
      <?php endif; ?>
      <a href="/archive/" class="archive-link">See More</a>
    </ul>
    <a href="#top" class="scroll-button"></a>
  </div>
</main>

<?php get_footer(); ?>