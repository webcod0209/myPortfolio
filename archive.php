<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="archive" id="top">
  <div class="container">
    <ul class="works archive__works">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <li class="works__item archive__works__item">
          <h2 class="works__item__title"><a href="<?php the_permalink(); ?>" class="works__link"><?php the_title(); ?></a></h2>
          <p class="works__item__sorce"><a href="<?php the_permalink(); ?>" class="works__link"><?php echo get_the_category()[0]->name; ?></a></p>
          <a href="<?php the_permalink(); ?>" class="works__link"><?php the_post_thumbnail(); ?></a>
        </li>
      <?php endwhile; ?>
      <?php else: // 投稿がない場合?>
        <p>まだ投稿がありません。</p>
      <?php endif; ?>
    </ul>
    <?php the_posts_pagination(
      array(
          'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
          'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
          'prev_text'     => __( '< Prev'), // 「前へ」リンクのテキスト
          'next_text'     => __( 'Next >'), // 「次へ」リンクのテキスト
          'type'          => 'list', // 戻り値の指定 (plain/list)
      )
    ); ?>
    <a href="#top" class="scroll-button"></a>
  </div>
</main>

<?php get_footer(); ?>