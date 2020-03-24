<?php

/**
 * WP_Query Sidebar
 */

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 4,
  'paged' => $paged
);

$loop = new Wp_Query($args);

?>

<?php if ($loop->have_posts()) : ?>
  <?php while ($loop->have_posts()) : $loop->the_post(); ?>
    <article class="sidebar__post-new">
      <div class="row">
        <div class="col-4-lg sidebar__post-img">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post-image" class="fluid">
          <?php endif; ?>

        </div>
        <div class="col-8-lg sidebar__post-title">
          <div class="sidebar__cat">
            <?php
            $categories = get_the_category();

            if (!empty($categories)) {
              foreach ($categories as $category) {
                printf(
                  '<a href="%1$s" class="text--sm text--gray sidebar__category">%2$s  </a>',
                  esc_url(get_category_link($category->term_id)),
                  esc_html($category->name)
                );
              }
            }
            ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="text--md text--dark"><?php echo the_title(); ?></a>
        </div>
      </div>
    </article>
  <?php endwhile; ?>
<?php else : ?>
  <?php echo wpautop('Maaf tidak ada berita ditemukan!'); ?>
<?php endif; ?>

<?php
wp_reset_postdata();
wp_reset_query();
?>