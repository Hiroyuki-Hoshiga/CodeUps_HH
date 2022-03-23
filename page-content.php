<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
    <?php get_template_part('nav-header'); ?>

    <main class="page-content">
      <!-- pagevisual -->
      <div class="page-content__mv pagevisual">
        <div class="pagevisual__inner">
          <div class="pagevisual__copy">
            <h1 class="pagevisual__title">
              <?php the_title( '<h1 class="title default-max-width">', '</h1>' ); ?>
            </h1>
          </div>
        </div>
      </div><!-- ./pagevisual -->
      <!-- inner -->
      <div class="page-content__inner inner">
        <!-- breadcrumbs -->
        <div class="page-content__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div><!-- ./breadcrumbs -->
        <div class="page-content__header">
          <h3 class="page-content__title">企業理念</h3>
          <p class="page-content__text">
            説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。
          </p>
        </div>
      <ul class="page-content__medias page-content-medias">
        <li class="page-content-medias__item page-content-media">
          <figure class="page-content-media__image-wrapper">
            <img class="page-content-media__img" src="<?php echo get_template_directory_uri(); ?>/images/content/page-content_01.jpg" alt="">
          </figure>
          <div class="page-content-media__body anchor" id="Philosophy1">
            <div class="page-content-media__desc">
              <h3 class="page-content-media__title">企業理念１</h3>
              <p class="page-content-media__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
          </div>
        </li>
        <li class="page-content-medias__item page-content-media -row-reverse">
          <figure class="page-content-media__image-wrapper -row-reverse">
            <img class="page-content-media__img" src="<?php echo get_template_directory_uri(); ?>/images/content/page-content_02.jpg" alt="">
          </figure>
          <div class="page-content-media__body anchor" id="Philosophy2">
            <div class="page-content-media__desc">
              <h3 class="page-content-media__title">企業理念２</h3>
              <p class="page-content-media__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
          </div>
        </li>
        <li class="page-content-medias__item page-content-media">
          <figure class="page-content-media__image-wrapper">
            <img class="page-content-media__img" src="<?php echo get_template_directory_uri(); ?>/images/content/page-content_03.jpg" alt="">
          </figure>
          <div class="page-content-media__body anchor" id="Philosophy3">
            <div class="page-content-media__desc">
              <h3 class="page-content-media__title">企業理念３</h3>
              <p class="page-content-media__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
          </div>
        </li>
      </ul>
      </div><!-- ./inner -->
    </main>

<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>