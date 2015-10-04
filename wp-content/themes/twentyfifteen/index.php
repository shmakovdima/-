<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<section id="introduction" class="wow fadeInDown animated">
</section>
<section id="world_map" class="wow fadeInDown animated">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12 col-xs-12 world_map__label">
				<h2>Отправьтесь<br> 
				в любую точку<br>
				мира!</h2>
			</div>
			<div class="col-md-3  col-xs-12">
				<div class="col-xs-6 world_map__europe">
					<span>Европа</span>
				</div>
				<div class="col-xs-6 world_map__asia">
					<span>Азия</span>
				</div>
			</div>
			<div class="col-md-3  col-xs-12">
				<div class="col-xs-6 world_map__south-america">
					<span>Южная<br> америка</span>
				</div>
				<div class="col-xs-6 world_map__north-america">
					<span>Северная<br> америка</span>
				</div>
			</div>
			<div class="col-md-3  col-xs-12">
				<div class="col-xs-6 world_map__africa">
					<span>Африка</span>
				</div>
				<div class="col-xs-6 world_map__australia">
					<span>Австралия</span>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="top_tours" class="wow fadeInDown animated">
</section>
<section id="burn_tours" class="wow fadeInDown animated">
</section>
<section id="work_scheme" class="wow fadeInDown animated">
    <div class="h2__wrap">
      <h2 class="white">Схема работы</h2>
      <br>
      <span>Наша компания индивидуально подходит к каждому клиенту,<br>
      тем самым достигая первокласного обслуживания</span>
    </div>
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</section>
<section id="review" class="wow fadeInDown animated">
	<div class="h2__wrap">
		<h2>Отзывы клиентов</h2>
	</div>
	<div class="container review__container">
  		<div class='row'>
    	<div class='col-md-12'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->

        <ol class="carousel-indicators">
          <?php $counter = 0; ?>
          <?php $posts = get_posts("category_name=reviews_clients&orderby=date&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
            <?php 
              if ($counter==0) {
                echo ' <li data-target="#quote-carousel" data-slide-to="'.$counter.'" class="active"></li>';
              }else{
                echo '<li data-target="#quote-carousel" data-slide-to="'.$counter.'"></li>';
              }
              $counter++;
            ?>
             <?php endforeach; ?>
              <?php endif; ?> 
        </ol>
        



        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
          <!-- Quote 1 -->

           <?php $counter = 0; ?>
          <?php $posts = get_posts("category_name=reviews_clients&orderby=date&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
            <?php 
              if ($counter==0) {
                echo '  <div class="item active">';
              }else{
                echo ' <div class="item">';
              }
               $counter++;
            ?>
              <blockquote>
              <div class="row">
                <div class="col-md-2 text-center col-md-offset-2">
                  <?php the_post_thumbnail('full'); ?>
                   <small><?php the_title() ?></small>
                </div>
                <div class="col-md-6">
                  <p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены предложения залетают прямо в рот.</p>
                 
                </div>
              </div>
            </blockquote>
          </div>


             <?php endforeach; ?>
              <?php endif; ?> 






         
          
         
          
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"></a>
      </div>                          
    	</div>
  		</div>
	</div>
</section>
<section id="contact" class="wow fadeInDown animated">
</section>


<?php get_footer(); ?>
