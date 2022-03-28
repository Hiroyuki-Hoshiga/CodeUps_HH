<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
    <?php get_template_part('nav-header'); ?>

    <main class="single-works">
      <!-- breadcrumbs -->
      <div class="single-works__breadcrumbs breadcrumbs inner" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div><!-- ./breadcrumbs -->
        <!-- post-header -->
        <div class="post-header inner">
          <h1 class="post-header__title"><?php the_title(); ?></h1>
          <div class="post-header__meta">
            <time datetime="<?php the_time( "Y.m.d" ); ?>"><?php the_time( "Y.m.d" ); ?></time>
            <span class="tags"><?php $terms = wp_get_object_terms($post->ID,'works_cate'); foreach($terms as $term){echo $term->name . '';} ?></span>
          </div>
        </div><!-- ./post-header -->
        
        
        
        <!-- swiper -->
        <div class="gallery">                
          <div class="swiper-container gallery-slider">
        <!-- メイン -->
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__01.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__02.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__03.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__04.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__05.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__06.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__06.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__06.jpg" alt=""></div>
          
        </div>
        <div class="swiper-gallery-button-prev"></div>
        <div class="swiper-gallery-button-next"></div>
      </div>
      <!-- サムネイル -->
      <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__01.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__02.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__03.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__04.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__05.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__06.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__06.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-page__06.jpg" alt=""></div>
        </div>
      </div>
    </div><!-- ./swiper -->
    
    <!-- inner -->
    <div class="single-works__inner inner">
    <div class="box26">
      <span class="box-title">制作のポイント</span>
      <p><?php the_field('制作のポイント'); ?>
    </p>
  </div>
  <div class="box26">
    <span class="box-title">デザインのポイント</span>
    <p><?php the_field('デザインのポイント'); ?>
  </p>
</div>
<div class="box26">
  <span class="box-title">その他</span>
  <p><?php the_field('その他'); ?>
</p>
</div>

<!-- pagenavi -->
<nav class="archive-news__pagenavi wp-pagenavi -single" aria-label="投稿ナビゲーション">
  <?php previous_post_link('%link', 'PREV'); ?>
  <a href="">一覧</a>
  <?php next_post_link('%link', 'NEXT'); ?>
</nav><!-- ./pagenavi -->


<!-- works-card-list -->
<div class="archive-works__works-card-list works-card-list">
  <?php
  global $post;
  $term = array_shift(get_the_terms($post->ID, 'works_cate')); //←ここが追加
  $args = array(
    'numberposts' => 4, //4件表示(デフォルトは５件)
    'post_type' => 'works', //カスタム投稿タイプ名
    'taxonomy' => 'works_cate', //タクソノミー名
    'term' => $term->slug, //ターム名 ←ここが追加
    'orderby' => 'rand', //ランダム表示
    'post__not_in' => array($post->ID) //表示中の記事を除外
  );
  ?>
  <?php $myPosts = get_posts($args); if($myPosts) : ?>
    <?php foreach($myPosts as $post) : setup_postdata($post); ?>
  <!-- works-card -->
  <a class="works-card-list__item works-card" href="<?php the_permalink(); ?>">
    <figure class="works-card__image">
      <?php the_post_thumbnail('thumbside'); ?>
    </figure>
    <div class="works-card__body">
      <h3 class="works-card__title"><?php the_title(); ?></h3>
    </div>
    <span class="works-card__category">
      <?php $terms = wp_get_object_terms($post->ID,'works_cate'); foreach($terms as $term){echo $term->name . '';} ?>
    </span>
  </a><!-- ./works-card -->
  <?php endforeach; ?>
  <?php else : ?>
    <p>関連アイテムはまだありません。</p>
    <?php endif; wp_reset_postdata(); ?>
  </div><!-- ./works-card-list -->
  
  
</div>
</div><!-- ./inner -->
</main>
<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>