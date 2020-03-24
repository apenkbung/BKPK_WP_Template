</main>
<!--========== End Main ==========-->

<!--========== Start Footer ==========-->
<footer class="footer">
  <div class="row">
    <div class="col-4-lg col-4-md col-12-sm">
      <section class="footer__about">
        <div class="footer__logo">
          <!-- <img src="./assets/images/navbar-logo.png" alt="Footer Logo" /> -->
          <?php
          if (function_exists('the_custom_logo')) {
            the_custom_logo();
          } else {
            bloginfo('name');
          }

          ?>
        </div>
        <p class="para footer__description">
          <ul class="footer__list">
            <li class="footer__item footer__item--heading">
              <span class="text--md">UNIVERSITAS MATARAM</span>
            </li>
            <li class="footer__item">Jl. Majapahit No 62 Mataram, NTB</li>
            <li class="footer__item">Phone: (0370) 633007</li>
            <li class="footer__item">Fax: (0370) 636041</li>
            <li class="footer__item">Email: media@unram.ac.id</li>
          </ul>
        </p>
      </section>
    </div>
    <div class="col-4-lg col-4-md col-12-sm">
      <div class="footer__recent-post">
        <a href="#" class="text--md">Recent Post</a>
        <div class="footer__posts flex flex--row flex--wrap">
          <?php
          // Get template file recent-post.php
          get_template_part('templates/temp/recent', 'post');
          ?>
        </div>
      </div>
    </div>
    <div class="col-4-lg col-4-md col-12-sm">
      <a href="#" class="text--md">Follow Us</a>
      <div class="footer__social-media">
        <a href="#" class="text--primary">
          <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'>
            <title>ionicons-v5_logos</title>
            <path d='M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z' />
          </svg>
        </a>
        <a href="#" class="text--primary">
          <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'>
            <title>ionicons-v5_logos</title>
            <path d='M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z' />
            <path d='M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z' />
            <path d='M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z' />
          </svg>
        </a>
        <a href="#" class="text--primary">
          <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'>
            <title>ionicons-v5_logos</title>
            <path d='M508.64,148.79c0-45-33.1-81.2-74-81.2C379.24,65,322.74,64,265,64H247c-57.6,0-114.2,1-169.6,3.6-40.8,0-73.9,36.4-73.9,81.4C1,184.59-.06,220.19,0,255.79q-.15,53.4,3.4,106.9c0,45,33.1,81.5,73.9,81.5,58.2,2.7,117.9,3.9,178.6,3.8q91.2.3,178.6-3.8c40.9,0,74-36.5,74-81.5,2.4-35.7,3.5-71.3,3.4-107Q512.24,202.29,508.64,148.79ZM207,353.89V157.39l145,98.2Z' />
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="footer__copyright text--sm text--center">
    Copyright &copy; <?php the_date('Y'); ?> <a href="<?php echo home_url('/'); ?>" class="text--primary">BKPK Unram</a>
  </div>
</footer>
<!--========== End Footer ==========-->

</body>

</html>