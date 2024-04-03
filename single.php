<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php
// 前後の記事が存在するかどうかを取得
$next_post = get_previous_post();
$prev_post = get_next_post();
?>
<?php
// 前後の記事、【どちらか】が存在する場合の処理
if (!empty($prev_post) || !empty($next_post)) :
?>
  <?php
  // 前後の記事、【どちらも】が存在する場合の処理
  if (!empty($prev_post) && !empty($next_post)) :
  ?>
    <?php
    // 記事のURLを取得
    $prev_url = get_permalink($prev_post->ID);
    $next_url = get_permalink($next_post->ID);
    ?>

    <body class="has-prev has-next touch" data-prev-post="<?php echo $prev_url; ?>" data-next-post="<?php echo $next_url; ?>">
    <?php endif; ?>
    <?php
    // 【前の記事のみ】が存在する場合の処理
    if (!empty($prev_post)) :
    ?>
      <?php
      $prev_url = get_permalink($prev_post->ID)
      ?>

      <body class="has-prev touch" data-prev-post="<?php echo $prev_url; ?>">
      <?php endif; ?>
      <?php
      // 【次の記事のみ】が存在する場合の処理
      if (!empty($next_post)) :
      ?>
        <?php
        $next_url = get_permalink($next_post->ID)
        ?>

        <body class="has-next touch" data-next-post="<?php echo $next_url; ?>">
        <?php endif; ?>
      <?php endif; ?>
      <!-- /スワイプ機能 -->
      <main class="single" id="top">
        <div class="container">
          <div class="logo">
            <h1 class="logo__title"><a href="<?php echo home_url(); ?>" class="logo__link"><span class="logo__stagger">N</span><span class="logo__stagger">A</span><span class="logo__stagger">O</span> <span class="logo__stagger">Y</span><span class="logo__stagger">A</span><span class="logo__stagger">M</span><span class="logo__stagger">A</span></a></h1>
            <p class="logo__url">https://webcod6.com</p>
            <p class="logo__copyright"><span>©️</span>NAO YAMA</p>
          </div>
          <ul class="single__works">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="single__works__item">
                  <div class="single__works__item__thumbnail-area thumbnail-area">
                    <?php the_post_thumbnail(); ?>
                    <div class="prevArrow"><?php next_post_link('%link', '<img src="' . get_template_directory_uri() . '/src/image/prevArrow.png" alt="前のニュースへ" width="30"/>'); ?></div>
                    <div class="nextArrow"><?php previous_post_link('%link', '<img src="' . get_template_directory_uri() . '/src/image/nextArrow.png" alt="前のニュースへ" width="30"/>'); ?></div>
                    <!-- /矢印 -->
                  </div>
                  <div class="single__works__item__text">
                    <h2 class="works__title"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <dl class="works__definition">
                      <dt class="works__term">提供元：</dt>
                      <dd class="works__description"><?php echo $cfs->get("sorce"); ?></dd>
                      <dt class="works__term">使用ツール：</dt>
                      <dd class="works__description"><?php echo $cfs->get("tools"); ?></dd>
                    </dl>
                    <?php echo $cfs->get('link'); ?>
                  </div>
                </li>
              <?php endwhile; ?>
            <?php else : // 投稿がない場合
            ?>
              <p>まだ投稿がありません。</p>
            <?php endif; ?>
            <a href="/archive/" class="archive-link">Return</a>
          </ul>
        </div>
      </main>
      <?php get_footer(); ?>