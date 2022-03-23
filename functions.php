<?php
//カスタムメニュー
register_nav_menus (
  array(
    'place_glocal' =>'グローバル',
    'place_footer' =>'フッター'
)
);
add_theme_support('post-thumbnails');



// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('',false);
  } elseif (is_tag()) {
    $title = single_tag_title('',false);
	} elseif (is_tax()) {
    $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
    $title = post_type_archive_title('',false);
	} elseif (is_date()) {
    $title = get_the_time('Y年n月');
	} elseif (is_search()) {
    $title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
    $title = '「404」ページが見つかりません';
	} else {
    
  }
  return $title;
});
    
    
?>
