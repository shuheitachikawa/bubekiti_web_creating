<?php get_header(); ?>


  <section class="works-archive">
      <div class="works-arvhive__img">
        <img src="<?php echo get_template_directory_uri() ?>/img/works.png" alt="">
      </div>

      <div class="works-archive__listarea">
        <ul class="works-archive__list">
          
        <?php
        $service_posts = get_specific_posts('works',null,-1);
        if($service_posts->have_posts()):
          while($service_posts->have_posts()):
            $service_posts->the_post();           
        ?>

          <li class="works-archive__item"><a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
            <p class="works-archive__item-name"><?php the_title(); ?></p>
          </a></li>

        
          <?php
              endwhile;
            endif;
          ?>

        </ul>
      </div>
  </section>
  

  <?php get_footer(); ?>