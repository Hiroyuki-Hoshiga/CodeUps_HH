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
/* function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
 */

 
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
    $title = 'ブログ';
    
  }
  return $title;
});


/* 投稿の名前を変更する */
function Change_menulabel() {
global $menu;
global $submenu;
$name = 'ブログ';
$menu[5][0] = $name;
$submenu['edit.php'][5][0] = $name.'一覧';
$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
global $wp_post_types;
$name = 'ブログ';
$labels = &$wp_post_types['post']->labels;
$labels->name = $name;
$labels->singular_name = $name;
$labels->add_new = _x('追加', $name);
$labels->add_new_item = $name.'の新規追加';
$labels->edit_item = $name.'の編集';
$labels->new_item = '新規'.$name;
$labels->view_item = $name.'を表示';
$labels->search_items = $name.'を検索';
$labels->not_found = $name.'が見つかりませんでした';
$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );
    
    
?>
