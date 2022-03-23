<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
<?php get_template_part('nav-header'); ?>

<!-- mv -->
<section class="mv">
  <div class="mv__inner">
    <div class="mv__copy">
      <h2 class="mv__main-title">メインタイトルが入ります</h2>
      <p class="mv__sub-title">サブタイトルが入ります</p>
    </div>
    <!-- swiper -->
    <div class="swiper-container swiper-slider1-container slider1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-img slider1-img01"></div>
        </div>
        <div class="swiper-slide">
          <div class="slide-img slider1-img02"></div>
        </div>
        <div class="swiper-slide">
          <div class="slide-img slider1-img03"></div>
        </div>
      </div>
      <div class="swiper-slider1-button-prev"></div>
      <div class="swiper-slider1-button-next"></div>
    </div><!-- ./swiper -->
  </div>
</section><!-- ./mv -->

<!-- news -->
<section class="news" id="news">
  <div class="news__inner inner">
    <div class="news__contents-wrraper">
        <?php 
      $args = array(
        'post_type' => 'news',
        'posts_per_page' => '5'
      );
      $the_query = new WP_query($args);
      if ($the_query->have_posts()):
        ?>
      <div class="news__contents">
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="news__content">
          <div class="news__info">
            <time class="news__date" datetime="<?php the_time( 'Y.m.d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
            <span class="news__category">
              <?php $terms = wp_get_object_terms($post->ID,'news_cate'); foreach($terms as $term){echo $term->name . '';} ?>
            </span>
          </div>
          <div class="news__block">
            <a href="<?php the_permalink(); ?>" class="news__text"><?php the_title(); ?></a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <?php wp_reset_postdata(); endif; ?>
      <div class="news__news-btn">
        <a href="#" class="news-btn">すべて見る</a>
      </div>
    </div>
  </div>
</section><!-- ./news -->

<!-- content -->
<section class="content section-line1" id="content">
    <div class="content__inner">
      <!-- section-header -->
      <div class="content__header section-header inner">
        <h2 class="section-header__title">事業内容</h2>
        <p class="content__header-subtitle section-header__subtitle -left">content</p>
      </div><!-- ./section-header -->
      <div class="content__list">
        <a href="<?php bloginfo('url'); ?>/content" class="content__item-box image00">
          <p class="content__item-image">経営理念ページへ</p>
        </a>
        <a href="<?php bloginfo('url'); ?>/content/#Philosophy1" class="content__item-box image01">
          <p class="content__item-image">理念1へ</p>
        </a>
        <a href="<?php bloginfo('url'); ?>/content/#Philosophy2" class="content__item-box image02">
          <p class="content__item-image">理念2へ</p>
        </a>
        <a href="<?php bloginfo('url'); ?>/content/#Philosophy3" class="content__item-box image03">
          <p class="content__item-image">理念3へ</p>
        </a>
      </div>
    </div>
  </section><!-- ./content -->

  <!-- works -->
  <section class="works">
    <div class="works__inner">
      <!-- section-header -->
      <div class="works__header section-header inner">
        <h2 class="section-header__title">制作実績</h2>
        <p class="works__header-subtitle section-header__subtitle -right">works</p>
      </div><!-- ./section-header -->
      <div class="works__body">
        <div class="works__cont">
          <div class="works__swiper">
            <!-- swiper -->
            <div class="swiper-slider2-container">
              <div class="swiper-container slider2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/common/overview_01.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/common/overview_01.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/common/overview_01.jpg" alt=""></div>
                </div>
              </div>
              <div class="slider2-pagenation-wrapper">
                <div class="swiper-pagination"></div>
              </div>
              <div class="swiper-slider2-button-prev"></div>
              <div class="swiper-slider2-button-next"></div>
            </div><!-- ./swiper -->
          </div>
          <div class="works__desc">
            <div class="works__desc-inner">
              <p class="works__main-title">メインタイトルが入ります</p>
              <p class="works__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
              <div class="works__btn">
                <a href="<?php bloginfo('url'); ?>/works" class="btn btn-effect">詳しく見る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- ./works -->

  <!-- overview -->
  <section class="overview section-line2">
    <div class="overview__inner">
      <!-- section-header -->
      <div class="overview__header section-header inner">
        <h2 class="section-header__title">企業概要</h2>
        <p class="overview__header-subtitle section-header__subtitle -left">overview</p>
      </div><!-- ./section-header -->
      <div class="overview__body">
        <div class="overview__cont">
          <figure class="overview__image"><img src="<?php echo get_template_directory_uri(); ?>/images/common/overview_01.jpg" alt=""></figure>
          <div class="overview__desc">
            <div class="overview__desc-inner">
              <div class="overview__main-title">メインタイトルが入ります</div>
              <div class="overview__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </div>
              <div class="overview__btn">
                <a href="<?php bloginfo('url'); ?>/overview" class="btn  btn-effect">詳しく見る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- ./overview -->

  <!-- blog -->
  <section class="blog">
    <div class="blog__inner inner">
      <!-- section-header -->
      <div class="blog__header section-header">
        <h2 class="section-header__title">ブログ</h2>
        <p class="blog__header-subtitle section-header__subtitle -right">blog</p>
      </div><!-- ./section-header -->
      <!-- blog-card-list -->
      <div class="blog__items blog-card-list">
        <?php
        $infoPosts = get_posts('numberposts=3&category=152');
        foreach($infoPosts as $post):
        ?>
        <!-- blog-card -->
        <a class="blog-card-list__item blog-card" href="<?php the_permalink(); ?>">
          <figure class="blog-card__image">
            <?php the_post_thumbnail('thumbside'); ?>
          </figure>
          <div class="blog-card__body">
            <h3 class="blog-card__title"><?php the_title(); ?></h3>
            <div class="blog-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</div>
          </div>
          <div class="blog-card__info">
            <span class="blog-card__category">カテゴリ</span>
            <time class="blog-card__date" datetime="<?php the_time( 'Y.m.d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
          </div>
        </a><!-- ./blog-card -->
        <?php endforeach; ?>
      </div><!-- ./blog-card-list -->
      <div class="blog__btn">
        <a href="<?php bloginfo('url'); ?>/blog" class="btn  btn-effect">詳しく見る</a>
      </div>
    </div>
  </section><!-- ./blog -->

  <?php get_template_part('parts-contact'); ?>
  <?php get_template_part('nav-footer'); ?>
  <?php get_footer(); ?>
</body>
</html>
