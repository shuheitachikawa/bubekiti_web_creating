<?php get_header(); ?>

  <?php
  if(have_posts()):
    while(have_posts()):
      the_post();
      $field_image = SCF::get('w-image');
      $field_url = SCF::get('w-url');
      $field_date = SCF::get('w-date');
      $field_work = SCF::get('w-work');
      $field_page = SCF::get('w-page');
      $field_time = SCF::get('w-time');
  ?>
<p class=""><?php $id ?></p>
  <section class="service-single">
    <div class="works-single__pcimg">
      <div class="works-single__img">
        <?php echo wp_get_attachment_image($field_image, 'large'); ?>
      </div>
    </div>
    <a href="<?php echo $field_url; ?>" target="blank" class="works-single__visit">サイトを見る</a>
    <div class="service-single__txtarea">
      <table class="works-single__table">
        <tr>
          <td class="works-single__table-title">公開日</td>
          <td><?php echo $field_date; ?></td>
          <td class="works-single__table-title">制作内容</td>
          <td class="works-single__table-work"><?php echo nl2br( $field_work); ?></td>
        </tr>
        <tr>
          <td class="works-single__table-title">ページ数</td>
          <td><?php echo $field_page; ?></td>
          <td class="works-single__table-title">制作期間</td>
          <td><?php echo $field_time; ?></td>
        </tr>
      </table>
      <?php the_content(); ?>
    </div>


  <?php
      endwhile;
    endif;
  ?>
  

    <div class="works-single__other">
      <p class="works-single__list--title">最近の制作</p>
      <ul class="works-single__list">


        <?php
          $service_posts = get_specific_posts('works',null,3);
          if($service_posts->have_posts()):
            while($service_posts->have_posts()):
              $service_posts->the_post();           
        ?>

        <li class="works-single__item"><a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
          <p class="works-single__item-name"><?php the_title(); ?></p>
        </a></li>

        
        <?php
          endwhile;
        endif;
        ?>

      </ul>


     
      <div class="works-single__link">
        <a href="<?php echo get_post_type_archive_link( get_post_type() ); ?>" class="works-single__btn">制作実績一覧へ</a>
      </div>
    </div>
  </section>
  

  <?php get_footer(); ?>