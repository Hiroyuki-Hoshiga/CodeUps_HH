<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
    <?php get_template_part('nav-header'); ?>

    <main class="page-overview">
      <!-- pagevisual -->
      <div class="page-overview__mv pagevisual">
        <div class="pagevisual__inner">
          <div class="pagevisual__copy">
            <h1 class="pagevisual__title">
              <?php the_title(); ?>
            </h1>
          </div>
        </div>
      </div><!-- ./pagevisual -->
      <!-- inner -->
      <div class="page-overview__inner inner">
        <!-- breadcrumbs -->
        <div class="page-overview__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div><!-- ./breadcrumbs -->
        <!-- page-overview-table -->   
        <dl class="page-overview__table page-overview-table">
          <dt class="page-overview-table__team">会社名</dt>
          <dd class="page-overview-table__description">
            テキストが入ります。
          </dd>
          <dt class="page-overview-table__team">設立</dt>
          <dd class="page-overview-table__description">
            テキストが入ります。
          </dd>
          <dt class="page-overview-table__team">資本金</dt>
          <dd class="page-overview-table__description">
            テキストが入ります。
          </dd>
          <dt class="page-overview-table__team">売上高</dt>
          <dd class="page-overview-table__description">
            テキストが入ります。
          </dd>
          <dt class="page-overview-table__team">代表者</dt>
          <dd class="page-overview-table__description">
            テキストが入ります。
          </dd>
          <dt class="page-overview-table__team">従業員数</dt>
          <dd class="page-overview-table__description">
            テキストが入ります。
          </dd>
          <dt class="page-overview-table__team">事業内容</dt>
          <dd class="page-overview-table__description">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </dd>
          <dt class="page-overview-table__team">所在地</dt>
          <dd class="page-overview-table__description">
            東京駅
          </dd>
      </dl><!-- ./page-overview-table -->
      <div class="page-overview__map">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3241.74452698128!2d139.7432889152461!3d35.65866543019949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1649327405556!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- ./map -->
      </div>



      </div><!-- ./inner -->
    </main>

<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>