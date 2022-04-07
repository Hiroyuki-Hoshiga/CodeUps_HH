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
        <div class="works-box">
          <span class="works-box__title">制作のポイント</span>
          <p><?php the_field('制作のポイント'); ?></p>
        </div>
        <div class="works-box">
          <span class="works-box__title">デザインのポイント</span>
          <p><?php the_field('デザインのポイント'); ?></p>
        </div>
        <div class="works-box">
          <span class="works-box__title">その他</span>
          <p><?php the_field('その他'); ?></p>
        </div>
        <!-- pagenavi -->
        <nav class="archive-news__pagenavi wp-pagenavi -single" aria-label="投稿ナビゲーション">
          <?php previous_post_link('%link', 'PREV'); ?>
          <a href="">一覧</a>
          <?php next_post_link('%link', 'NEXT'); ?>
        </nav><!-- ./pagenavi -->
      </div><!-- ./inner -->
    </main>
    <!-- related-articles -->
    <aside class="related-articles inner">
      <div class="related-articles__title">関連記事</div>
      <!-- related-articles-list -->
      <ul class="related-articles__items related-articles-list">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <li class="related-articles-list__item__item">
          <!-- works-card -->
          <a href="<?php the_permalink(); ?>" class="works-card">
            <div class="works-card__thumb"><?php the_post_thumbnail('thumbside'); ?></div>
            <div class="works-card__body">
              <h2 class="works-card__title"><?php the_title(); ?></h2>
            </div>
            <span class="works-card__category">
              <?php $terms = wp_get_object_terms($post->ID,'works_cate'); foreach($terms as $term){echo $term->name . '';} ?>
            </span>
          </a><!-- ./works-card -->
        </li>
        <?php endwhile; endif; ?>
      </ul><!-- ./related-articles-list -->
    </aside><!-- ./related-articles -->
  <?php get_template_part('parts-contact'); ?>
  <?php get_template_part('nav-footer'); ?>
  <?php get_footer(); ?>
  </body>
</html>