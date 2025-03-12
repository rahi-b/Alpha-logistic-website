<?php
/**
 * Standard blog single page
 *
 */

get_header(); 

get_template_part( 'includes/header' , 'page-title' ); ?>
			
			<!-- BLOG AREA START -->
			<div class="transto_blog_index transto-event-singlea">
				<div class="container">				
					<div class="row">
								<?php if (have_posts() ) : ?>														 
								<?php while ( have_posts() ) : the_post(); ?>					
								<?php
								$simage  = get_post_meta( get_the_ID(),'_txbdm_simage', true ); 
								$txevent_video  = get_post_meta( get_the_ID(),'_txbdm_txevent_video', true );
								$txevent_embed  = get_post_meta( get_the_ID(),'_txbdm_txevent_embed', true );								
								$event_time  = get_post_meta( get_the_ID(),'_txbdm_event_time', true ); 
								$event_address  = get_post_meta( get_the_ID(),'_txbdm_event_address', true ); 
								$map_event  = get_post_meta( get_the_ID(),'_txbdm_map_event', true ); 
								$evgellary  = get_post_meta( get_the_ID(),'_txbdm_evgellary', true );

							if( isset($evgellary) && !empty($evgellary)){?>	
								<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-xs-12">
									<div class="pimgs mb30">
										<div class="single_gallery">										
											<?php transto_slider_o('_txbdm_evgellary','full'); ?>							
										</div>			
									</div>
								</div>							
								<div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-xs-12">
									<div class="event-description">
										<?php $event_titles  = get_post_meta( get_the_ID(),'_txbdm_event_titles', true ); ?>
										<?php if($event_titles){?>  
										<div class="event-dsc-title">
											<h2><?php echo esc_html($event_titles);?></h2>
										</div>
										<?php }?>

										<div class="event-dsc-info">
											<ul>
												<?php 
												$eventgroup  = get_post_meta( get_the_ID(),'_txbdm_eventgroup', true ); 
												if( $eventgroup ){?>
													<?php
													foreach ( (array) $eventgroup as $daygropd => $daygropss ){
													$day1 = $day2 ='';
													if ( isset( $daygropss['_txbdm_etime1'] ) ) {
														$day1 =  $daygropss['_txbdm_etime1'];	
													}	
													if ( isset( $daygropss['_txbdm_etime2'] ) ) {
														$day2 =  $daygropss['_txbdm_etime2'];	
													}?>
													<li>
														<b class="eleft"><?php echo esc_html( $day1 );?></b>
														<span  class="eright"><?php echo esc_html( $day2 );?></span>
													</li>	
												<?php }} ?>										
											</ul>
										</div>
										
										<?php if( function_exists('twr_sitepage_sharing') ){						
											twr_sitepage_sharing();
										} ?>									
										
									</div>								
								</div>
								<div class="col-lg-12">	
									<div class="ev_single_tmc">
											<h2><?php the_title(); ?></h2>		
										<?php if($event_time || $event_address){?>
											<div class="transto_meta">
												<span><i class="ti-time"></i><?php if($event_time){ echo esc_html($event_time);}?></span>
												<span><i class="ti-location-pin"></i><?php if($event_address){ echo esc_html($event_address);}?></span>
											</div>
										<?php } ?>
										<?php 
										
										if ( '' != get_the_content() ) { ?>
											<div class="ev-single-content">
												<?php the_content(); ?>
											</div>
										<?php } ?>
									</div>
								
									<?php if( $map_event ){?>
										<div class="google-map-event">
										<iframe title="<?php esc_attr('map','transto');?>" src="<?php echo esc_url( $map_event ); ?>"  allowfullscreen></iframe>
										</div>
									<?php } ?>
								</div>							
								
							<?php }else{ ?>								
								<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-xs-12">
									<?php if( $simage == 'simage_on' ) { 
									if(has_post_thumbnail()){?>
										<div class="ssingle_event_thumb">
											<?php the_post_thumbnail('transto-event-single');
											if($txevent_video){?>
											<div class=" tx_ev_video">											
												<a class="videvent venobox" data-vbtype="video" href="<?php echo $txevent_video;?> "><i class="ti-control-play"></i></a>
											</div>											
											<?php } ?>
										</div>
									<?php } } ?>
									<!-- Video Embed -->
									<?php if($txevent_embed){?>
									<div class="tx_embed_video">
										<iframe src="<?php echo $txevent_embed;?>"  ></iframe>
									</div>	
									<?php } ?>									
								</div>
								<div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-xs-12">
									<div class="event-description">
										<?php $event_titles  = get_post_meta( get_the_ID(),'_txbdm_event_titles', true ); ?>
										<?php if($event_titles){?>  
										<div class="event-dsc-title">
											<h2><?php echo esc_html($event_titles);?></h2>
										</div>
										<?php }?>

										<div class="event-dsc-info">
											<ul>
												<?php 
												$eventgroup  = get_post_meta( get_the_ID(),'_txbdm_eventgroup', true ); 
												if( $eventgroup ){?>
													<?php
													foreach ( (array) $eventgroup as $daygropd => $daygropss ){
													$day1 = $day2 ='';
													if ( isset( $daygropss['_txbdm_etime1'] ) ) {
														$day1 =  $daygropss['_txbdm_etime1'];	
													}	
													if ( isset( $daygropss['_txbdm_etime2'] ) ) {
														$day2 =  $daygropss['_txbdm_etime2'];	
													}?>
													<li>
														<b class="eleft"><?php echo esc_html( $day1 );?></b>
														<span  class="eright"><?php echo esc_html( $day2 );?></span>
													</li>	
												<?php }} ?>										
											</ul>
										</div>
										
										<?php if( function_exists('twr_sitepage_sharing') ){						
											twr_sitepage_sharing();
										} ?>									
										
									</div>								
								</div>
								<div class="col-lg-12">	
									<div class="ev_single_tmc">
											<h2><?php the_title(); ?></h2>		
										<?php if($event_time || $event_address){?>
											<div class="transto_meta">
												<span><i class="ti-time"></i><?php if($event_time){ echo esc_html($event_time);}?></span>
												<span><i class="ti-location-pin"></i><?php if($event_address){ echo esc_html($event_address);}?></span>
											</div>
										<?php } ?>
										<?php 
										
										if ( '' != get_the_content() ) { ?>
											<div class="ev-single-content">
												<?php the_content(); ?>
											</div>
										<?php } ?>
									</div>
								
									<?php if( $map_event ){?>
										<div class="google-map-event">
										<iframe title="<?php esc_attr('map','transto');?>" src="<?php echo esc_url( $map_event ); ?>"  allowfullscreen></iframe>
										</div>
									<?php } ?>
								</div>

						<?php } ?>
						<?php endwhile;  endif;  ?>							
					</div>

						
				</div>
			</div>
			<!-- END BLOG AREA START -->

		<div class="transto_blog_index ">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="related-projects-title text-left"><?php esc_html_e('RELATED EVENTS', 'transto') ?></h2>
				</div>
			</div>
			<div class="row single_evactive">
				<?php 
				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 1000,'post_type' => 'em_event', 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) { setup_postdata($post); ?>
						<div class="col-lg-12">

						<?php $event_time  = get_post_meta( get_the_ID(),'_txbdm_event_time', true ); 
						$event_address  = get_post_meta( get_the_ID(),'_txbdm_event_address', true ); 
						$event_day  = get_post_meta( get_the_ID(),'_txbdm_event_day', true ); 
						$event_month  = get_post_meta( get_the_ID(),'_txbdm_event_month', true );  
						$event_year  = get_post_meta( get_the_ID(),'_txbdm_event_year', true );	?>
									<div class="ev_single_box">					
										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
										<div class="ev_single_img">
											<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('transto-blog-default'); ?> </a>
										</div>									
										<?php } ?>
																			
										<!-- BLOG TITLE -->
										<div class="ev_single_content">
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<?php if($event_time || $event_address){?>
												<div class="transto_meta">
													<span><i class="ti-time"></i><?php if($event_time){ echo esc_html($event_time);}?></span>
													<span><i class="ti-location-pin"></i><?php if($event_address){ echo esc_html($event_address);}?></span>
												</div>
											<?php } ?>
										</div>																						
									</div>
						
						</div>
				<?php } ?>
			</div>
			
			</div>
		</div>
			
<?php
get_footer();