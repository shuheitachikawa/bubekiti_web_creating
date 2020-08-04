<?php get_header(); ?>

  <?php
  if(have_posts()):
    while(have_posts()):
      the_post();
      $id = the_id();
  ?>
<p class=""><?php $id ?></p>
  <section class="service-single">
    <div class="service-single__img">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="service-single__txtarea">
      <?php the_content(); ?>
    </div>


  <?php
      endwhile;
    endif;
  ?>
  

    <a href="" class="quote-btn">簡単お見積もり</a>
    <div class="service-single__link">
      <a href="" class="service-single__btn">制作の流れ</a>
      <a href="" class="service-single__btn">よくある質問</a>
    </div>



    <div class="service-single__other">
      <p class="service-single__list--title">その他サービス</p>
      <ul class="service-single__list">
      <?php
        $service_posts = get_specific_posts('service',null,-1);
        if($service_posts->have_posts()):
          while($service_posts->have_posts()):
            $service_posts->the_post();           
      ?>

      <li class="service-single__item"><a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        <p class="service-single__item-name"><?php the_title(); ?></p>
      </a></li>

      <?php
          endwhile;
        endif;
      ?>

      </ul>
    </div>
  </section>
  

  <?php get_footer(); ?>