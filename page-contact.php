<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
    <?php get_template_part('nav-header'); ?>    

    <main class="page-contact">
      <!-- pagevisual -->
      <div class="page-contact__mv pagevisual">
        <div class="pagevisual__inner">
          <div class="pagevisual__copy">
            <h1 class="pagevisual__title">
              <?php the_title(); ?>
            </h1>
          </div>
        </div>
      </div><!-- ./pagevisual -->
      <!-- inner -->
      <div class="page-contact__inner inner">
        <!-- breadcrumbs -->
        <div class="page-contact__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div><!-- ./breadcrumbs -->
        <div class="page-contact__form">
          <?php echo do_shortcode('[contact-form-7 id="2316" title="コンタクトフォーム 1"]'); ?>
        </div>
      </div><!-- ./inner -->
    </main>
  <?php get_template_part('nav-footer'); ?>
  <?php get_footer(); ?>
</body>
</html>