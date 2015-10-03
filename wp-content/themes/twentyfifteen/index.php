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
      <span>Наша компания индивидуально подходит к каждому клиенту,
тем самым достигая первокласного обслуживания</span>
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
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    	</div>
  		</div>
	</div>
</section>
<section id="contact" class="wow fadeInDown animated">
</section>


<?php get_footer(); ?>
