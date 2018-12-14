<?php get_header(); ?>

<div class="container pt-5 pb-5">

  <h1 class="pb-3"><?php the_title(); ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post();  ?>

  <?php the_content(); ?>

<?php endwhile; endif; ?>


  <!--   
    <div class="row"> 
      <div class="col">Left side</div>
      <div class="col">Right side</div>
    </div> -->

</div>

<?php  get_footer(); ?>