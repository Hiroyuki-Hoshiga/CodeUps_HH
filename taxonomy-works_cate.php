<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
    <?php get_template_part('nav-header'); ?>

    <main class="archive-works">
      <!-- pagevisual -->
      <div class="archive-works__mv pagevisual">
        <div class="pagevisual__inner">
          <div class="pagevisual__copy">
            <h1 class="pagevisual__title">
              <?php the_archive_title( '<h1 class="archive-title default-max-width">', '</h1>' ); ?>
            </h1>
          </div>
        </div>
      </div><!--./ pagevisual -->
      <!-- breadcrumbs -->
      <div class="archive-works__breadcrumbs breadcrumbs inner" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div><!-- ./breadcrumbs -->
        <!-- category-tabs -->
        <ul class="archive-works__category-tabs category-tabs inner">
          <li class="cat-item <?php if ( is_post_type_archive ('works') ) {
            echo 'current-cat';} ?>"><a href="<?php bloginfo('url'); ?>/works">ALL</a></li>
          <?php wp_list_categories( 'taxonomy=works_cate&title_li='); ?>
        </ul><!-- ./category-tabs -->
        <!-- inner -->
        <div class="archive-works__inner">
        <div class="archive-works__card-list">
          <!-- works-card-list -->
          <ul class="works-card-list works-card-list--col2">
            <?php if (have_posts()): while(have_posts()): the_post(); ?>
            <li class="works-card-list__item">
              <!-- works-card -->
              <a href="<?php the_permalink(); ?>" class="works-card">
                <div class="works-card__thumb"><?php the_post_thumbnail('thumbside'); ?></div>
                <div class="works-card__body">
                  <h2 class="works-card__title"><?php the_title(); ?></h2>
                </div>
                <span class="works-card__category">
                  <?php $terms = wp_get_object_terms($post->ID,'works_cate'); foreach($terms as $term){echo $term->name . '';} ?>
                </span>
              </a><!-- works-card -->
            </li>
            <?php endwhile; endif; ?>
          </ul><!-- works-card-list -->
        </div>
        <!-- pagenavi -->
        <div class="archive-works__pagenavi">
          <?php wp_pagenavi(); ?>
        </div><!-- pagenavi -->
      </div><!-- inner -->
    </main>

<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>