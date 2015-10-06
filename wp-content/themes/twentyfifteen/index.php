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

<div id="main">
<section id="introduction" class="wow fadeIn animated" data-wow-duration="1s">

    <section id="slider" class="wow fadeIn animated" data-wow-duration="1s">
          <div id="carousel_main" class="carousel slide carousel-fade" data-ride="carousel_main">
               
            
              <div class="carousel-inner">
               

                     <?php $counter = 0; ?>
           <?php $posts = get_posts("category_name=slider&numberposts=6&orderby=date&order=ASC&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
            <?php 
              if ($counter==0) {
                echo '  <div class="item active" style="background-image: url('.wp_get_attachment_url( get_post_thumbnail_id($post->ID)).')">';
              }else{
                echo ' <div class="item" style="background-image: url('.wp_get_attachment_url( get_post_thumbnail_id($post->ID)).')">';
              }
               $counter++;
            ?>
            
                </div>
             <?php endforeach; ?>
              <?php endif; ?>
                  
              <div class="container">

                <div class="row "> 

                                       <ol class="carousel-indicators text-left">
                <?php $counter = 0;  ?>
                <?php $posts = get_posts("category_name=slider&numberposts=6&orderby=date&order=ASC&post_status=publish"); ?>
                <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                  <?php 
                    if ($counter==0) {
                      echo '<li data-target="#carousel_main" data-slide-to="'.$counter.'" class="active"></li>';
                    }else{
                      echo '<li data-target="#carousel_main" data-slide-to="'.$counter.'"></li>';
                    }
                    $counter++;
                  ?>

               
                <?php endforeach; ?>
                <?php endif; ?> 
              </ol>
              </div>
              </div>

              </div>
             
              
          </div>
          <div class="slider_text">
            <div class="container slider_row">

                <div class="row "> 
                    <div class="col-sm-6  slider_status ">
                        <div class="col-md-offset-1 col-md-11 col-lg-offset-0 col-lg-11">

                        <?php $posts = get_posts("category_name=text_slider&numberposts=1&orderby=date&post_status=publish"); ?>
              
                        <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                        <h1><?php echo $post->post_content?></h1>
                        <span><?php echo get_post_meta($post->ID, 'text_pod', true); ?></span>
                        <?php endforeach; ?>
                         <?php endif; ?>



                         </div>



                    </div>
                     <div class="col-sm-6 text-right">
                            <div class="col-xs-10 col-xs-offset-1  col-sm-offset-1  col-sm-10 col-md-offset-4 col-md-7  col-lg-offset-5 col-lg-7 order__form">
                                <?php echo do_shortcode( '[contact-form-7 id="13" title="Связь с нами"]' ); ?>
                                <span>Гарантируем конфиденциальность<br> 
                                ваших данных</span>
                            </div>
                      </div>
                </div>
                  <a class="carousel-control left" href="#carousel_main" data-slide="prev"></a>
              <a class="carousel-control right" href="#carousel_main" data-slide="next"></a>
            </div>
          </div>

    </section>
  
  <section id="after_slider" class="wow fadeIn animated" data-wow-duration="1s">
      <div class="container">
        <div class="row">
         <?php $counter = 0; ?>
            <?php $posts = get_posts("category_name=tour_pod_slider&numberposts=4&orderby=date&post_status=publish"); ?>
                <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                      <?php 
                      
                          if  (in_array($counter, array(2,3))) {
                            if ($counter==2) {
                              echo '<div class="col-md-3 col-sm-6 hidden-xs hidden-sm topped"> ';
                              
                            }else{
                              echo '<div class="col-md-3 col-sm-6 hidden-xs hidden-sm"> ';
                            }
                          }else{
                              echo ' <div class="col-md-3 col-sm-6">';
                          }

                           $counter++;
                      ?>


                    
                      <div class="item_tour">
                          <div class="img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));  ?>')"></div>
                          <span class="place"><span><?php echo get_post_meta($post->ID, 'city', true); ?></span>, <?php echo get_post_meta($post->ID, 'country', true); ?></span>
                          <span class="dates"><?php echo get_post_meta($post->ID, 'data_start', true); ?> - <?php echo get_post_meta($post->ID, 'data_end', true); ?></span>
                          <span class="price">от <?php echo number_format(get_post_meta($post->ID, 'cost', true), 0,"."," "); ?> руб</span>
                          <button class="more">Подробнее</button>
                      </div>
                    </div>

                   <?php endforeach; ?>
                  <?php endif; ?> 
           
          
        </div>

   </div>

    
  </section>
</section>
<section id="world_map" class="wow fadeIn animated" data-wow-duration="1s">
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

<section id="top_tours" class="wow fadeIn animated"  data-wow-duration="1s">
    <div class="h2__wrap">
      <span>Наши туры</span>
      <br>
      <h2 class="white">Топ-туры</h2>
    
    </div>
    <div class="container">
        <div class="row">
            <div id="Carousel" class="carousel slide col-md-12 col-md-offset-0" >  
                <!-- Carousel items -->
                <div class="carousel-inner">

                <?php $counter = 0;  /*<!-- data-ride="carousel" id="top-carousel"*/?>
                <?php $posts = get_posts("category_name=top_tours&numberposts=9&orderby=date&post_status=publish"); ?>
              
                <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                  <?php if (($counter==0)) {
                      echo '<div class="item active"><div class="row">';
                  }else{
                    if  (($counter % 3)==0) {
                         echo '<div class="item "><div class="row">';
                    }
                  }
                  ?>          

                        <?php 
                          if  (in_array($counter, array(0,3,6,9,12,15))) {
                              echo '<div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2"> ';
                          }

                          if  (in_array($counter, array(1,4,7,10,13,16))) { 
                              echo '<div class="col-md-4 col-sm-6 hidden-xs"> ';
                          }

                          if  (in_array($counter, array(2,5,8,11,14,17))) { 
                              echo '<div class="col-md-4 col-sm-6 hidden-sm hidden-xs"> ';
                          }

                        ?>
                            


                            <div class="item_tour">
                                <div class="img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));  ?>')"></div>
                                <span class="place"><span><?php echo get_post_meta($post->ID, 'city', true); ?></span>, <?php echo get_post_meta($post->ID, 'country', true); ?></span>
                                <span class="dates"><?php echo get_post_meta($post->ID, 'data_start', true); ?> - <?php echo get_post_meta($post->ID, 'data_end', true); ?></span>
                                <span class="price">от <?php echo number_format(get_post_meta($post->ID, 'cost', true), 0,"."," "); ?> руб</span>
                               
                            </div>
                            </div>
                             <?php $counter++;?>
                         <?php   if  (($counter % 3)==0) {
                             echo '</div><!--.row--></div><!--.item-->';
                          } ?>
                        <?php endforeach; ?>
                  <?php endif; ?> 
                   
                </div>
                 <a data-slide="prev" href="#Carousel" class="left carousel-control"></a>
                <a data-slide="next" href="#Carousel" class="right carousel-control"></a>

                 <ol class="carousel-indicators">
                    
                     <?php $counter = 0; ?>
          <?php $posts = get_posts("category_name=top_tours&numberposts=9&orderby=date&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
            <?php 
              if ($counter==0) {
                echo ' <li data-target="#Carousel" data-slide-to="'.$counter.'" class="active"></li>';
              }else{
                 if  (($counter % 3)==0) {
                     echo '<li data-target="#Carousel" data-slide-to="'.$counter.'"></li>';
                  }
              }
              $counter++;
            ?>
             <?php endforeach; ?>
              <?php endif; ?> 


                </ol>
        </div>
          <div class="row text-center button_tour">
            <button class="btn">Заказать подбор тура!</button>
        </div>
    </div>
</section>
<section id="burn_tours" class="wow fadeIn animated"  data-wow-duration="1s">
  <div class="h2__wrap">
      <span>Наши туры</span>
      <br>
      <h2>Горячие туры</h2>
  </div>
   <div class="container">
        <div class="row">
            <?php $posts = get_posts("category_name=hot_tours&numberposts=8&orderby=date&post_status=publish"); ?>
                <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                     <div class="col-md-3 col-sm-6">
                      <div class="item_tour">
                          <div class="img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));  ?>')"></div>
                          <span class="place"><span><?php echo get_post_meta($post->ID, 'city', true); ?></span>, <?php echo get_post_meta($post->ID, 'country', true); ?></span>
                          <span class="dates"><?php echo get_post_meta($post->ID, 'data_start', true); ?> - <?php echo get_post_meta($post->ID, 'data_end', true); ?></span>
                          <span class="price">от <?php echo number_format(get_post_meta($post->ID, 'cost', true), 0,"."," "); ?> руб</span>
                          <button class="more">Подробнее</button>
                      </div>
                    </div>

                   <?php endforeach; ?>
                  <?php endif; ?> 
           
          
        </div>

   </div>


  <div class="container">
        <div class="row text-center button_tour">
            <button class="btn">Заказать подбор тура!</button>
        </div>
  </div>

</section>

<section id="work_scheme" class="wow fadeIn animated"  data-wow-duration="1s">
    <div class="h2__wrap">
      <h2 class="white">Схема работы</h2>
      <br>
      <span>Наша компания индивидуально подходит к каждому клиенту,<br>
      тем самым достигая первокласного обслуживания</span>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-15 col-sm-3 work_scheme__1 work_scheme__steps work_scheme__steps__line-right">
                <span>Принимаем вашу <br>заявку</span>
            </div>
             <div class="col-sm-15 col-sm-3 work_scheme__2 work_scheme__steps work_scheme__steps__line-left work_scheme__steps__line-right">
                <span>Узнаем Ваши <br>
пожелания</span>
            </div>
             <div class="col-sm-15 col-sm-3 work_scheme__3 work_scheme__steps work_scheme__steps__line-left work_scheme__steps__line-right">
                <span>Разрабатываем <br>
программу отдыха</span>
            </div>
             <div class="col-sm-15 col-sm-3 work_scheme__4 work_scheme__steps work_scheme__steps__line-left work_scheme__steps__line-right">
                <span>Помогаем  правильно<br>
собрать документы</span>
            </div>
             <div class="col-sm-15 col-sm-3 work_scheme__5 work_scheme__steps work_scheme__steps__line-left">
                <span>Вы наслаждаетесь<br>
отдыхом!</span>    
            </div>
          
        </div>
    </div>
      <div class="container">
        <div class="row text-center work_scheme__button">
            <button class="btn">Заказать подбор тура!</button>
        </div>
      </div>
</section>
<section id="review" class="wow fadeIn animated"  data-wow-duration="1s">
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
<section id="contact" class="wow fadeIn animated"  data-wow-duration="1s">
  <div class="h2__wrap">
    <h2>Наши контакты</h2>
  </div>
    <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center">
            <div class="contact__positioned__small col-xs-10 col-xs-offset-1">
                <div class="contact__logo">
                </div>
                <span class="contact__adress">ул. Веры Хоружей 1А</span>
                <span>+375 (29) 684-43-54;</span>  
                <span>+375 (29) 444-52-23;</span>


            </div>
            <div class ="contact__positioned" >
                <div class="contact__placemark">
             
                    <div class="contact__placemark__boxed">
                        <div class="contact__logo">
                        </div>
                        <span class="contact__adress">ул. Веры Хоружей 1А</span>
                        <span>+375 (29) 684-43-54;</span>  
                        <span>+375 (29) 444-52-23;</span>
                    </div>
                 
                   </div>
                  <div class="tringled"></div>
                  </div>
            </div>
             
           <div class="col-sm-6">
                <div class="col-xs-10 col-xs-offset-1  col-sm-offset-1 col-sm-10 col-md-7 col-md-offset-2 col-lg-7 order__form">
                    <?php echo do_shortcode( '[contact-form-7 id="13" title="Связь с нами"]' ); ?>
                    <span>Гарантируем конфиденциальность<br> 
                    ваших данных</span>
                </div>
          </div>
        </div>
    </div>
</section>
</div>

<?php get_footer(); ?>
