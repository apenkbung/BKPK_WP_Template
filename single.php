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
    <div class="banner__title banner__title--single text--center text--light">
      <!-- <h1 class="text--xl">INFO UPT BKPK UNRAM</h1> -->
      <?php if (get_theme_mod('header_text_field')) : ?>
        <h1 class="text--xl">Berita</h1>
      <?php endif; ?>
      <!-- <span class="description text--md text--light"
              >Tempat Bimbingan Konseling</span
            > -->
      <?php if (get_theme_mod('header_desc_field')) : ?>
        <h1 class="description text--md text--light">Berita Terbaru dari BKPK</h1>
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
        <!-- One columns layout -->

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="post__article">
          <article class="post__single-post">
            <div class="post__title">
              <a href="<?php the_permalink(); ?>">
                <span class="text--lg text--dark">
                  <?php echo the_title(); ?>
                </span>
              </a>
            </div>

            <div class="post__post-thumbnail">
              <?php if (has_post_thumbnail()) : ?>
                <img
                  src="<?php echo get_the_post_thumbnail_url(); ?>"
                  alt="Photo-1"
                  class="fluid post__thumbnail-single"
                />
              <?php endif;?>
            </div>
            <div class="post__info-single">
              <div class="post__posted">
                <div class="post__author">
                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="post__author--link">
                    <div class="post__author--svg">
                      <?xml version="1.0" encoding="utf-8"?>
                      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                        <path fill="#000000" d="M9.5 11c-3.033 0-5.5-2.467-5.5-5.5s2.467-5.5 5.5-5.5 5.5 2.467 5.5 5.5-2.467 5.5-5.5 5.5zM9.5 1c-2.481 0-4.5 2.019-4.5 4.5s2.019 4.5 4.5 4.5c2.481 0 4.5-2.019 4.5-4.5s-2.019-4.5-4.5-4.5z"></path>
                        <path fill="#000000" d="M17.5 20h-16c-0.827 0-1.5-0.673-1.5-1.5 0-0.068 0.014-1.685 1.225-3.3 0.705-0.94 1.67-1.687 2.869-2.219 1.464-0.651 3.283-0.981 5.406-0.981s3.942 0.33 5.406 0.981c1.199 0.533 2.164 1.279 2.869 2.219 1.211 1.615 1.225 3.232 1.225 3.3 0 0.827-0.673 1.5-1.5 1.5zM9.5 13c-3.487 0-6.060 0.953-7.441 2.756-1.035 1.351-1.058 2.732-1.059 2.746 0 0.274 0.224 0.498 0.5 0.498h16c0.276 0 0.5-0.224 0.5-0.5-0-0.012-0.023-1.393-1.059-2.744-1.382-1.803-3.955-2.756-7.441-2.756z"></path>
                      </svg>
                    </div>
                    <span class="text--sm text--gray">
                      <?php the_author(); ?>
                    </span>
                  </a>
                </div>
              
                <div class="post__date">
                  <a href="#" class="post__date--link">
                    <div class="post__date--svg">
                      <?xml version="1.0" encoding="utf-8"?>
                      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                        <path fill="#000000" d="M18.5 2h-2.5v-0.5c0-0.276-0.224-0.5-0.5-0.5s-0.5 0.224-0.5 0.5v0.5h-10v-0.5c0-0.276-0.224-0.5-0.5-0.5s-0.5 0.224-0.5 0.5v0.5h-2.5c-0.827 0-1.5 0.673-1.5 1.5v14c0 0.827 0.673 1.5 1.5 1.5h17c0.827 0 1.5-0.673 1.5-1.5v-14c0-0.827-0.673-1.5-1.5-1.5zM1.5 3h2.5v1.5c0 0.276 0.224 0.5 0.5 0.5s0.5-0.224 0.5-0.5v-1.5h10v1.5c0 0.276 0.224 0.5 0.5 0.5s0.5-0.224 0.5-0.5v-1.5h2.5c0.276 0 0.5 0.224 0.5 0.5v2.5h-18v-2.5c0-0.276 0.224-0.5 0.5-0.5zM18.5 18h-17c-0.276 0-0.5-0.224-0.5-0.5v-10.5h18v10.5c0 0.276-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M7.5 10h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M10.5 10h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M13.5 10h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M16.5 10h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M4.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M7.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M10.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M13.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M16.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M4.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M7.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M10.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M13.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M16.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M4.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M7.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M10.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M13.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                        <path fill="#000000" d="M16.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
                      </svg>
                    </div>
                    <span class="text--sm text--gray">
                      <?php echo get_the_date(); ?>
                    </span>
                  </a>
                </div>
              </div>

              <div class="post__content post__content--single">
                <p class="para">
                  <?php echo get_the_content(); ?>
                </p>
              </div>
            </div>
          </article>
        </div>

        <?php endwhile; ?>
        <?php else: ?>
        <?php echo wpautop('Maaf berita tidak ditemukan'); ?>
        <?php endif; ?>

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