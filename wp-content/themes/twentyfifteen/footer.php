<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   
      <div class="modal-body">
      		
        			<div class="row">
        	
		                <div class="col-xs-10 col-xs-offset-1  col-sm-offset-2 col-sm-8 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 order__form">
		                    <?php echo do_shortcode( '[contact-form-7 id="13" title="Связь с нами"]' ); ?>
		                    <span>Гарантируем конфиденциальность<br> 
		                    ваших данных</span>
		                    <button type="button" class="close" data-dismiss="modal"></button>
		                </div>
         			 </div>
        			
        		
        	</div>
     
    </div>

  </div>
</div>

<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->  
      <div class="modal-body">
          
              <div class="row">
          
                    <div class="col-xs-10 col-xs-offset-1  col-sm-offset-2 col-sm-8 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 order__form">
                        <?php echo do_shortcode('[contact-form-7 id="117" title="Запись на конкретный тур"]' ); ?>
                        <span>Гарантируем конфиденциальность<br> 
                        ваших данных</span>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
               </div>
              
            
          </div>
     
    </div>

  </div>
</div>

<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   
      <div class="modal-body">
       
		      <div id="carousel_modal_slider_tour" class="slide carousel-fade " data-ride="carousel_modal_slider_tour">  
                <!-- Carousel items -->
                <div class="carousel-inner">

                <?php $counter = 0;  /*<!-- data-ride="carousel" id="top-carousel"*/?>
                <?php $posts = get_posts("category_name=hot_tours&numberposts=8&orderby=date&post_status=publish"); ?>
              
                <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                  <?php if (($counter==0)) {
                      echo '<div class="item active tour'.$counter.'" >';
                  }else{
                    
                         echo '<div class="item tour'.$counter.'">';
                   
                  }
                  ?>         
                            <div class="item_tour item_tour_slider">
                                <div class="img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));  ?>')">
                                      <a data-slide="prev" href="#carousel_modal_slider_tour" class="left carousel-control"></a>
                                      <a data-slide="next" href="#carousel_modal_slider_tour" class="right carousel-control"></a>
                                </div>
                                  <div class="carousel_right_modal">
                                      
                                          <span class="place"><span><?php echo get_post_meta($post->ID, 'city', true); ?></span>, <?php echo get_post_meta($post->ID, 'country', true); ?></span>
                                           <span class="dates"><?php echo get_post_meta($post->ID, 'data_start', true); ?> - <?php echo get_post_meta($post->ID, 'data_end', true); ?></span>
                                          <span class="price">от <?php echo number_format(get_post_meta($post->ID, 'cost', true), 0,"."," "); ?> руб</span>
                                          <button data-dismiss="modal" class="btn" data-toggle="modal" data-target="#myModal3"  tabindex="-1" data-tour="<?php echo $post->post_title;?>">Заказать тур</button>
                                      
                                  </div>
                                  <div class="carousel_left_modal">
                                      <?php echo $post->post_content;?>
                                  </div>
                                  
                                
                               
                            </div>
                          
                          
                                  
                          </div><!--.item-->
                         
                        <?php $counter++; endforeach; ?>
                  <?php endif; ?> 
              
                </div>
                 <button type="button"  class="close" data-dismiss="modal"></button>
               

    
        	</div>
     
    </div>

  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   
      <div class="modal-body">
       
          <div id="carousel_modal_slider_tour2" class="slide carousel-fade " data-ride="carousel_modal_slider_tour2">  
                <!-- Carousel items -->
                <div class="carousel-inner">

                <?php $counter = 0;  /*<!-- data-ride="carousel" id="top-carousel"*/?>
                <?php $posts = get_posts("category_name=tour_pod_slider&numberposts=4&orderby=date&post_status=publish"); ?>
              
                <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                  <?php if (($counter==0)) {
                      echo '<div class="item active tour'.$counter.'" >';
                  }else{
                    
                         echo '<div class="item tour'.$counter.'">';
                   
                  }
                  ?>         
                            <div class="item_tour item_tour_slider">
                                <div class="img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));  ?>')">
                                      <a data-slide="prev" href="#carousel_modal_slider_tour2" class="left carousel-control"></a>
                                      <a data-slide="next" href="#carousel_modal_slider_tour2" class="right carousel-control"></a>
                                </div>
                                  <div class="carousel_right_modal">
                                      
                                          <span class="place"><span><?php echo get_post_meta($post->ID, 'city', true); ?></span>, <?php echo get_post_meta($post->ID, 'country', true); ?></span>
                                           <span class="dates"><?php echo get_post_meta($post->ID, 'data_start', true); ?> - <?php echo get_post_meta($post->ID, 'data_end', true); ?></span>
                                          <span class="price">от <?php echo number_format(get_post_meta($post->ID, 'cost', true), 0,"."," "); ?> руб</span>
                                          <button data-dismiss="modal" class="btn" data-toggle="modal" data-target="#myModal3"  tabindex="-1" data-tour="<?php echo $post->post_title;?>">Заказать тур</button>
                                      
                                  </div>
                                  <div class="carousel_left_modal">
                                      <?php echo $post->post_content;?>
                                  </div>
                                  
                                
                               
                            </div>
                          
                          
                                  
                          </div><!--.item-->
                         
                        <?php $counter++; endforeach; ?>
                  <?php endif; ?> 
              
                </div>
                 <button type="button"  class="close" data-dismiss="modal"></button>
               

    
          </div>
     
    </div>

  </div>
</div>






	<footer role="contentinfo" class="wow fadeIn animated" >
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<span>2015 Copyright VeroGusto Travel</span>
				</div>
				<div class="col-sm-4 footer__logo"></div>
				<div class="col-sm-4">
					<span>
						<a href="https://vk.com/test" title="Мы в ВКонтакте" ><i class="fa fa-vk"></i></a>
						<a href="https://fb.com/test" title="Мы в Facebook" ><i class="fa fa-facebook"></i></a>
						<a href="https://youtube.com/test" title="Мы в Youtube" ><i class="fa fa-youtube"></i></a>
						<a href="https://instagram.com/test" title="Мы в Instagram" ><i class="fa fa-instagram"></i></a>
					</span>
				</div>
			</div>
		</div>
	</footer>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scripts.js"></script>
<?php wp_footer(); ?>

</body>
</html>
