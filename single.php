<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
    <?php get_template_part('nav-header'); ?>

    <main class="page-overview">
      <!-- inner -->
      <div class="page-overview__inner inner">
        <!-- breadcrumbs -->
        <div class="page-overview__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div><!-- ./breadcrumbs -->

        <main class="main-contents">
    <div class="container">
      <!-- post-header -->
      <div class="post-header">
        <h1 class="post-header__title">ブログタイトルが入ります。ブログタイトルが入ります。ブログタイトルが入ります。</h1>
        <div class="post-header__meta">
          <time datetime="<?php the_time( "Y.m.d" ); ?>"><?php the_time( "Y.m.d" ); ?></time>
          <span class="tag"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
        </div>
      </div><!-- ./post-header -->
      <!-- post-intro -->
      <div class="post-intro">
        <div class="post-intro__eyecatch"><?php the_post_thumbnail( 'blog' ); ?></div>
        <div class="post-intro__excerpt">
          <p>概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。</p>
        </div>
      </div><!-- ./post-intro -->
      <!-- post-body -->
      <div class="post-body">
        <?php the_content(); ?>
      </div><!-- post-body -->
      <!-- pagenavi -->
      <nav class="archive-news__pagenavi wp-pagenavi -single" aria-label="投稿ナビゲーション">
        <?php previous_post_link('%link', 'PREV'); ?>
        <a href="">一覧</a>
        <?php next_post_link('%link', 'NEXT'); ?>
      </nav><!-- ./pagenavi -->
    </div>
  </main>

  <!-- blog-card-list -->
  <div class="blog__items blog-card-list">
  <?php
                $infoPosts = get_posts('numberposts=4');
                foreach($infoPosts as $post):
                ?>
        <!-- blog-card -->
        <a class="blog-card-list__item blog-card" href="<?php the_permalink(); ?>">
          <figure class="blog-card__image">
            <?php the_post_thumbnail('thumbside'); ?>
          </figure>
          <div class="blog-card__body">
            <p class="blog-card__title"><?php the_title(); ?></p>
          </div>
          <div class="blog-card__info">
            <?php
              $cat = get_the_category();
              $catname = $cat[0]->cat_name;//カテゴリー名
              $catslug = $cat[0]->slug;// スラッグ名
            ?>
            <span class="blog-card__category <?php echo $catslug; ?>"><?php echo $catname; ?></span>
            <time class="blog-card__date" datetime="<?php the_time( 'Y.m.d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
          </div>
        </a><!-- ./blog-card -->
      <?php endforeach; ?>
     
<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>