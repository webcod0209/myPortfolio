<?php get_header(); ?>
<?php get_sidebar(); ?>

<main id="top">
  <div class="container">
    <div class="logo">
      <h1 class="logo__title"><a href="<?php echo home_url(); ?>" class="logo__link"><span class="logo__stagger">N</span><span class="logo__stagger">A</span><span class="logo__stagger">O</span> <span class="logo__stagger">Y</span><span class="logo__stagger">A</span><span class="logo__stagger">M</span><span class="logo__stagger">A</span></a></h1>
      <p class="logo__url">https://webcod6.com</p>
      <p class="logo__copyright"><span>©️</span>NAO YAMA</p>
    </div>
    <ul class="blog">
      <?php
        $args = [
          'post_type' => 'blog', // カスタム投稿名が「blog」の場合
          'posts_per_page' => 10, // 表示する数
        ];
        $my_query = new WP_Query($args); 
      ?>
      <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
      <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li class="blog__item">
          <a href="<?php the_permalink(); ?>" class="blog__link">
            <h2 class="blog__item__title"><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?>
            <div class="blog__item__text">
              <!-- <?php the_content() ?> -->
              <time datetime="<?php echo get_the_date("y-m-d"); ?>"><?php echo get_the_date("y.m.d"); ?></time>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
      <?php else: // 投稿がない場合?>
        <p>まだ投稿がありません。</p>
      <?php endif; wp_reset_postdata(); ?>
      <a href="/archive-blog/" class="archive-link">See More</a>
    </ul>
    <a href="#top" class="scroll-button"></a>
  </div>
</main>

<?php get_footer(); ?>