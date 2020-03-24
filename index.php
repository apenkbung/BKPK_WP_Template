<?php
// get header.php file
get_header();
$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>
<!-- Banner Area -->
<section class="banner">
  <div class="container">
    <div class="banner__image">
      <!--<img
              src="./assets/images/header-bg.jpg"
              alt="Banner"
              class="fluid"
            />-->
      <?php if (get_theme_mod('header_image')) : ?>
        <img src="<?php echo esc_url(get_theme_mod('header_image')) ?>" alt="Banner" class="fluid">
      <?php endif; ?>
    </div>
    <div class="banner__title text--center text--light">
      <h3 class="text--lg">Selamat Datang</h3>
      <!-- <h1 class="text--xl">INFO UPT BKPK UNRAM</h1> -->
      <?php if (get_theme_mod('header_text_field')) : ?>
        <h1 class="text--xl"><?php echo get_theme_mod('header_text_field'); ?></h1>
      <?php endif; ?>
      <!-- <span class="description text--md text--light"
              >Tempat Bimbingan Konseling</span
            > -->
      <?php if (get_theme_mod('header_desc_field')) : ?>
        <h1 class="description text--md text--light"><?php echo get_theme_mod('header_desc_field'); ?></h1>
      <?php endif; ?>

      <div class="banner__cta">
        <button type="button" class="btn">SELENGKAPNYA</button>
      </div>
    </div>
  </div>
</section>
<!-- End Banner Area-->

<!-- Categories Section -->
<section class="categories">
  <div class="container">
    <div class="flex flex--row flex--wrap">
      <?php get_template_part('templates/temp/categories', 'content'); ?>
    </div>
  </div>
</section>
<!-- End Categories Section -->

<!-- Post Area -->
<section class="post">
  <div class="container">
    <div class="row">
      <div class="col-8-lg col-12-md">
        <div class="grid">
          <?php
          // Load template post-content.php files
          get_template_part('templates/temp/post', 'content');
          ?>
        </div>

        <!-- Pagination Area -->
        <div class="row">
          <div class="col-12-lg text--center">
            <div class="pagination">
              <?php
              $paginate = [
                'base'  => site_url(),
                'format' => '?page=%#%',
                'total' => 4,
                'current' => max(1, $page),
                'prev_next' => true,
                'prev_text'  => '',
                'next_text' => '<img src="' . get_template_directory_uri() . '/vendors/icons/arrow-right.svg" alt="arrow-right" />',
                'type'  => 'array'
              ];

              $pages = paginate_links($paginate);
              ?>

              <?php if (!empty($pages)) : ?>
                <?php $i = 1; ?>
                <?php foreach ($pages as $key => $numb) : ?>
                  <?php if ($i == $page) : ?>
                    <a href="/?page=<?= $i; ?>" class="active">
                      <span><?= $i; ?></span>
                    </a>
                  <?php else : ?>
                    <a href="/?page=<?= $i; ?>">
                      <span><?= $i; ?></span>
                    </a>
                  <?php endif; ?>
                  <?php $i++; ?>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <!-- End Pagination -->
      </div>
      <div class="col-4-lg col-12-md">
        <!-- Get sidebar -->
        <?php
        // Get sidebar.php file
        get_sidebar();
        ?>
      </div>
    </div>
  </div>
</section>
<!-- End Post Area -->

<?php
// Get footer.php file
get_footer();
?>