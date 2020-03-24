<?php
// get header.php file
get_header();
$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<h2>Archive.php</h2>

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