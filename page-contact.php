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
              <?php the_title( '<h1 class="title default-max-width">', '</h1>' ); ?>
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
          <!-- contact-form-7 -->
          <form action="#">
            <div class="form">
              <div class="form__item">
                <label for="username" class="form__ttl">会社名<strong class="label-any">任意</strong></label>
                <div class="form__body">
                  <div class="inputField">
                    <input type="text" name="username" id="username" maxlength="20">
                  </div>
                </div>
              </div>
              <div class="form__item">
                <label for="username" class="form__ttl">お名前<strong class="label-required">必須</strong></label>
                <div class="form__body">
                  <div class="inputField">
                    <input type="text" name="username" id="username" maxlength="20" required>
                  </div>
                </div>
              </div>
              <div class="form__item">
                <label for="email" class="form__ttl">メールアドレス<strong class="label-required">必須</strong></label>
                <div class="form__body">
                  <div class="inputField">
                    <input type="email" name="email" id="email" placeholder="sample@sample.jp" required>
                  </div>
                </div>
              </div>
              <div class="form__item">
                <label for="contact_msg" class="form__ttl">お問い合わせ内容<strong class="label-required">必須</strong></label>
                <div class="form__body">
                  <div class="inputField">
                    <textarea name="contact_msg" id="contact_msg" cols="30" rows="10" placeholder="お問い合わせ内容をご記入ください。" required></textarea>
                  </div>
                </div>
              </div>
              <div class="btnArea">
                <button class="submitBtn">送信する</button>
              </div>
            </div>
          </form><!-- ./contact-form-7 -->
        </div>
      </div><!-- ./inner -->
    </main>

<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>