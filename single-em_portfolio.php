<?php
/**
 * Standard blog single page
 *
 */

get_header(); 
get_template_part( 'includes/header' , 'page-title' ); ?>
			
			<!-- BLOG AREA START -->
			<div class="transto-blog-area transto-blog-single single-blog-details">
				<div class="container">				
					<div class="row">


						<?php if( have_posts() ) : ?>

							<?php while( have_posts() ) : the_post(); ?>					
								
								<?php
								$port_simage  = get_post_meta( get_the_ID(),'_txbdm_port_simage', true ); 
								$txport_video  = get_post_meta( get_the_ID(),'_txbdm_txport_video', true );
								$txport_embed  = get_post_meta( get_the_ID(),'_txbdm_txport_embed', true );									
								$protitle  = get_post_meta( get_the_ID(),'_txbdm_pftitle', true );  
								$protgroup  = get_post_meta( get_the_ID(),'_txbdm_portgroup', true );  
								$pgellaryu  = get_post_meta( get_the_ID(),'_txbdm_pgellaryu', true ); 
								if( isset($pgellaryu) && !empty($pgellaryu)){?>
								<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-xs-12">
									<div class="pimgs mb30">
										<div class="single_gallery">										
											<?php
												transto_slider_o('_txbdm_pgellaryu','full');									
											?>																				
										</div>			
									</div>
								</div>
								<div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-xs-12">
									<div class="portfolio-content portfolio-details-box">
										<div class="prots-content">
											<?php if($protitle){?>
												<h2><?php echo esc_html($protitle);?></h2>
											<?php };?>										
											<ul>
													<?php 
														
														if( $protgroup ){?>
														<?php
														foreach ( (array) $protgroup as $portgropd => $portgropss ){
														$porttitle = $portdec ='';
														if ( isset( $portgropss['_txbdm_pttitle'] ) ) {
															$porttitle =  $portgropss['_txbdm_pttitle'];	
														}	
														if ( isset( $portgropss['_txbdm_ptvalue'] ) ) {
															$portdec =  $portgropss['_txbdm_ptvalue'];	
														}?>
														<li>
															<b class="eleft"><?php echo esc_html( $porttitle );?></b>
															<span  class="eright"><?php echo transto_kses_post( $portdec); ?></span>
														</li>
													<?php }} ?>														
												</ul>					
										</div>
									</div>
								</div>	

								<div class="col-md-12 col-lg-12  col-sm-12 col-xs-12 blog-lr">
									<div class="portfolio-content portfolio-details-boxs">
									<div class="pr-title"><h2><?php the_title();?></h2></div>
										<div class="prots-content">
											<?php the_content(); ?>
										</div>
									</div>
								</div>	

								<?php }else{ ?>
									
										<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-xs-12">
											<?php if( $port_simage == 'simage_on' ) { ?>
											<div class="pimgs mb30 single_port">
												<?php the_post_thumbnail('transto-single-portfolio');
												if($txport_video){?>
												<div class=" tx_ev_video">											
													<a class="videvent venobox" data-vbtype="video" href="<?php echo $txport_video;?> "><i class="ti-control-play"></i></a>
												</div>											
											<?php } ?>
											</div>
											<?php } ?>
											<!-- Video Embed -->
											<?php if($txport_embed){?>
											<div class="tx_embed_video">
												<iframe src="<?php echo $txport_embed;?>"  ></iframe>
											</div>	
											<?php } ?>											
										</div>

										<div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-xs-12">
											<div class="portfolio-content portfolio-details-box">											
												<div class="prots-contentg">
												<?php if($protitle){?>
													<h2><?php echo esc_html($protitle);?></h2>
												<?php };?>
												<ul>
													<?php 
														if( $protgroup ){?>
														<?php
														foreach ( (array) $protgroup as $portgropd => $portgropss ){
														$porttitle = $portdec ='';
														if ( isset( $portgropss['_txbdm_pttitle'] ) ) {
															$porttitle =  $portgropss['_txbdm_pttitle'];	
														}	
														if ( isset( $portgropss['_txbdm_ptvalue'] ) ) {
															$portdec =  $portgropss['_txbdm_ptvalue'];	
														}?>
														<li>
															<b class="eleft"><?php echo esc_html( $porttitle );?></b>
															<span  class="eright"><?php echo transto_kses_post( $portdec); ?></span>			
														</li>
													<?php }} ?>	
												</ul>	
												</div>

												<div class="transto-blog-social">
													<?php if( function_exists('twr_sitepage_sharing') ){						
														twr_sitepage_sharing();
													} ?>
												</div>
											</div>										
										</div>	
										<div class="col-md-12 col-lg-12  col-sm-12 col-xs-12 blog-lr">					
											<div class="portfolio-content portfolio-details-boxs">
												<div class="pr-title"><h2><?php the_title();?></h2></div>
												<div class="prots-contentg">
													<?php the_content(); ?>
												</div>
											</div>
										</div>	
			
			
								<?php } ?>					

						<?php endwhile;  endif;  ?>
									
					</div>	
				</div>
			</div>
			<!-- END BLOG AREA START -->						
<?php
get_footer();