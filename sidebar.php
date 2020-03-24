<aside class="sidebar">
  <!-- Latest Post -->
  <section class="sidebar__latest">
    <a href="#" class="text--md text--dark">Latest Post</a>
    <div class="flex flex--column">
      <!-- Get sidebar-latest-post.php -->
      <?php get_template_part('/templates/temp/sidebar', 'latest-post'); ?>
    </div>
  </section>
  <!-- End Latest Post -->

  <!-- Search Area -->
  <section class="search search__side">
    <h3 class="text--md text--dark">Pencarian</h3>
    <form class="search__form search__form--side">
      <!-- <input
                      type="search"
                      class="search__input mr--sm-2"
                      placeholder="Cari"
                    />
                    <button class="btn btn--submit" type="submit">
                      <img
                        src="./vendors/icons/magnifier.svg"
                        alt="icon search"
                      />
                    </button> -->
      <?php
      // Get searchform.php
      get_search_form();
      ?>
    </form>
  </section>



  <!-- End Search Area-->

  <!-- Popular Tags -->
  <section class="sidebar__popular-tags">
    <h3 class="text--md text--dark">Popular Tags</h3>
    <div class="sidebar__tags flex flex--row flex--wrap">
      <?php
      // Get post-tag.php
      get_template_part('templates/temp/post', 'tags');
      ?>
      <!-- <a href="#">
        <span>Lowongan</span>
      </a>
      <a href="#">
        <span>Pendidikan</span>
      </a>
      <a href="#">
        <span>Keuangan</span>
      </a>
      <a href="#">
        <span>Tips</span>
      </a>
      <a href="#">
        <span>Cerita</span>
      </a> -->
    </div>
  </section>
  <!-- End Popular Tags-->
</aside>