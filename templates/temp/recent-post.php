<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
  'post_type' => 'post',
  'order' => 'DESC',
  'posts_per_page' => 6,
  'date_query' => array(
    'after' => '-30 days',
    'column' => 'post_date'
  ),
  'page' => $paged
);

$loop = new Wp_Query($args);

?>

<?php if ($loop->have_posts()) : ?>
  <?php $count = 1; ?>
  <?php while ($loop->have_posts()) : $loop->the_post() ?>

    <?php if ($count % 2) : ?>
      <div class="column">
        <div class="footer__post-img">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Footer Image 1" class="fluid" />
          <?php endif; ?>
        </div>
      <?php else : ?>
        <div class="footer__post-img">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Footer Image 1" class="fluid" />
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
    <?php $count++; ?>

  <?php endwhile; ?>
<?php endif; ?>

<?php
wp_reset_query();
wp_reset_postdata();
?>

<!-- <div class="column">
  <div class="footer__post-img">
    <img src="./assets/images/photo-1.jpg" alt="Footer Image 1" class="fluid" />
  </div>
  <div class="footer__post-img">
    <img src="./assets/images/photo-2.jpg" alt="Footer Image 1" class="fluid" />
  </div>
</div>
<div class="column">
  <div class="footer__post-img">
    <img src="./assets/images/photo-2.jpg" alt="Footer Image 1" class="fluid" />
  </div>
  <div class="footer__post-img">
    <img src="./assets/images/photo-3.jpg" alt="Footer Image 1" class="fluid" />
  </div>
</div>
<div class="column">
  <div class="footer__post-img">
    <img src="./assets/images/photo-3.jpg" alt="Footer Image 1" class="fluid" />
  </div>
  <div class="footer__post-img">
    <img src="./assets/images/photo-1.jpg" alt="Footer Image 1" class="fluid" />
  </div>
</div> -->