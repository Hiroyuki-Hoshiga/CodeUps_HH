<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
    <?php get_template_part('nav-header'); ?>

    <main class="archive-blog">
      <!-- pagevisual -->
      <div class="archive-blog__mv pagevisual">
        <div class="pagevisual__inner">
          <div class="pagevisual__copy">
            <h1 class="pagevisual__title">
              <?php the_archive_title( '<h1 class="archive-title default-max-width">', '</h1>' ); ?></h1>
          </div>
        </div>
      </div><!-- pagevisual -->
      <!-- inner -->
      <div class="archive-blog__inner inner">
        <!-- breadcrumbs -->
        <div class="archive-blog__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div><!-- breadcrumbs -->
        <!-- category-tabs -->
        <ul class="archive-blog__category-tabs category-tabs">
          <li><a href="<?php bloginfo('url'); ?>/blog">ALL</a></li>
          <?php wp_list_categories('orderby=id&title_li=&use_desc_for_title=0&child_of=152'); ?>
        </ul><!-- ./category-tabs -->
        <!-- blog-card-list -->
        <div class="archive-blog__blog-card-list blog-card-list">
          <?php if (have_posts()): while(have_posts()): the_post(); ?>
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
          <?php endwhile; endif; ?>
        </div><!-- ./blog-card-list -->
        <!-- pagenavi -->
        <div class="archive-blog__pagenavi">
          <?php wp_pagenavi(); ?>
        </div><!-- pagenavi -->
      </div><!-- inner -->
    </main>

<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>