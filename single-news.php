<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
    <?php get_template_part('nav-header'); ?>

    <main class="single-news">
      <!-- inner -->
      <div class="single-news__inner inner">
        <!-- breadcrumbs -->
        <div class="single-news__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div><!-- ./breadcrumbs -->
        <!-- post-header -->
        <div class="post-header">
          <h1 class="post-header__title"><?php the_title(); ?></h1>
          <div class="post-header__meta">
            <time datetime="<?php the_time( "Y.m.d" ); ?>"><?php the_time( "Y.m.d" ); ?></time>
            <span><?php $terms = wp_get_object_terms($post->ID,'news_cate'); foreach($terms as $term){echo $term->name . '';} ?></span>
          </div>
        </div><!-- ./post-header -->
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










      </div><!-- ./inner -->
    </main>

<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>