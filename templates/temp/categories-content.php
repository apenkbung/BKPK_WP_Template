<?php

/**
 *  Theme Name: Add Categories
 */

// Retrieve list of categories
$categories = get_categories(array(
  'orderby' => 'name',
  'parent' => 0
));
foreach ($categories as $category) 
{
  printf('<a href="%1$s" class="link"><span>%2$s</span></a>', 
          esc_url(get_category_link($category -> term_id)),
          esc_html($category -> name)
        );
}

?>

<!-- <a href="#" class="link">
  <span>All</span>
</a>
<a href="#" class="link">
  <span>Pendidikan</span>
</a>
<a href="#" class="link">
  <span>Lowongan</span>
</a>
<a href="#" class="link">
  <span>Keuangan</span>
</a>
<a href="#" class="link">
  <span>Tips</span>
</a>
<a href="#" class="link">
  <span>Cerita</span>
</a>
<a href="#" class="link">
  <span>Uncategorized</span>
</a> -->