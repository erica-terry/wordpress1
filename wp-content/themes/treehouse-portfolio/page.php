<?php get_header(); ?>

    <section class="row">
      <div class="small-12 columns text-center">
        <div class="leader">
            <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no pages found.' ); ?></p>
            <?php endif; ?>        
        </div>
      </div>
    </section>
    

    <section class="row no-max pad">
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="item.html"><img src="assets/img/temp/item-01.png" alt=""></a>
      </div>
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="item.html"><img src="assets/img/temp/item-02.png" alt=""></a>
      </div>
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="item.html"><img src="assets/img/temp/item-03.png" alt=""></a>
      </div>
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="item.html"><img src="assets/img/temp/item-04.png" alt=""></a>
      </div>
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="item.html"><img src="assets/img/temp/item-05.png" alt=""></a>
      </div>
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="item.html"><img src="assets/img/temp/item-06.png" alt=""></a>
      </div>
      <div class="small-6 medium-4 large-3 columns grid-item end">
        <a href="item.html"><img src="assets/img/temp/item-07.png" alt=""></a>
      </div>
      <div class="small-6 medium-4 large-3 columns grid-item end">
        <a href="item.html"><img src="assets/img/temp/item-08.png" alt=""></a>
      </div>
      <div class="small-6 medium-4 large-3 columns grid-item end">
        <a href="item.html"><img src="assets/img/temp/item-09.png" alt=""></a>
      </div>
      <div class="small-6 medium-4 large-3 columns grid-item end">
        <a href="item.html"><img src="assets/img/temp/item-10.png" alt=""></a>
      </div>
    </section>


<?php get_footer(); ?>