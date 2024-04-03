<?php

if (!is_admin()) {
  function register_script()
  {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.3.min.js', false, '1.0', true);
    wp_register_script('my_script', get_template_directory_uri() . '/bundle.js', false, '1.0', true);
  }
  function add_script()
  {
    register_script();
    wp_enqueue_script('jquery');
    wp_enqueue_script('my_script');
  }
  add_action('wp_enqueue_scripts', 'add_script');
}

function titles()
{
  $title = wp_title(" | ", true, "right");
  if (is_home()) {
    echo "top-page | NAO YAMA";
  } else {
    echo $title . "NAO YAMA";
  }
};

add_theme_support("post-thumbnails");

function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'archive'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function mobile_pre_get_posts($query)
{
  if (!is_admin() && wp_is_mobile() && $query->is_main_query()) {
    $query->set('posts_per_page', 10); //スマホで表示したい件数
  }
}
add_action('pre_get_posts', 'mobile_pre_get_posts');
