<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
    <?php get_template_part('nav-header'); ?>

    <main class="archive-news">
      <!-- pagevisual -->
      <div class="archive-news__mv pagevisual">
        <div class="pagevisual__inner">
          <div class="pagevisual__copy">
            <h1 class="pagevisual__title">
              <?php the_archive_title(); ?>
            </h1>
          </div>
        </div>
      </div><!-- ./pagevisual -->
      <!-- inner -->
      <div class="archive-news__inner inner">
        <!-- breadcrumbs -->
        <div class="archive-news__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div><!-- ./breadcrumbs -->
        <div class="archive-news__news news">
          <div class="news__contents-wrraper">
            <div class="news__contents">
              <?php if (have_posts()): while(have_posts()): the_post(); ?>
              <div class="news__content">
                <div class="news__info">
                  <time class="news__date" datetime="2021.11.18"><?php the_time( 'Y.m.d' ); ?></time>
                  <span class="news__category">
                    <?php $terms = wp_get_object_terms($post->ID,'news_cate'); foreach($terms as $term){echo $term->name . '';} ?>
                  </span>
                </div>
                <div class="news__block">
                  <a href="<?php the_permalink(); ?>" class="news__text"><?php the_title(); ?></a>
                </div>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>


        <!-- pagenavi -->
        <div class="archive-news__pagenavi">
          <?php wp_pagenavi(); ?>
        </div><!-- ./pagenavi -->



      </div><!-- ./inner -->
    </main>

<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>