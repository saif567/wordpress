<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *

 * @package WordPress
 * @subpackage jack
 */

get_header(); ?>
           					<section id="banner">
                                			<div class="container">
                                            		<div class="row">
                                                    		<div class="col-md-12 col-sm-12 col-xs-12">
                                                            		
                                                            	<div class="col-md-5 col-sm-5 col-xs-12">
                                                                		<div class="feature">
                                                                        		<div class="Feature-menu">
																				
                                                                             <ul class="wow fadeInLeft animated animate">
																			 <?php dynamic_sidebar('sidebar1'); ?>
      <!-- <a class="service-button" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Feature-1 <i class="fa fa-angle-right" aria-hidden="true"></i></a>
     <a class="service-button" href="#"><i class="fa fa-dropbox" aria-hidden="true"></i>Feature-2 <i class="fa fa-angle-right" aria-hidden="true"></i></a>
     <a class="service-button" href="#"><i class="fa fa-print" aria-hidden="true"></i>Feature-3 <i class="fa fa-angle-right" aria-hidden="true"></i></a>
     <a  class="service-button" href="#"><i class="fa fa-calculator" aria-hidden="true"></i>Feature-4 <i class="fa fa-angle-right" aria-hidden="true"></i></a>
      <a class="service-button" href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Feature-5 <i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                                                                                </ul>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                		<div class="title-text">
                                                                        		<div class="banner-heading">
                                      <h3 style="color:black" class="wow fadeInRight animated animated"><?php echo get_option('fcontent_a1'); ?><!--Content systems Lorem Ipsum: variants and technical information--></h3>
                                                                                </div>
                                        <form method="get" action="<?php echo esc_url( home_url( '/register') ); ?>"><button class="sign-up wow fadeInRight animated animate">Sign up for yours - it's free!</a></button></form>
                                                                        </div>
                                                                </div>	
                                                            </div>
                                                    </div>
                                            </div>
                                </section>
            <!----------banner section ---------------->
            <!----------Featured Content--------------->
            			<section id="featured-content">
                        			<div class="container">
                                    		<div class="row">
                                            		
                                                    		<div class="col-md-12 col-sm-12 col-xs-12 featured-tab">
                                                            	 <div class="section-heading shape-2 text-center">
                        <h2 class="wow fadeInDown animated animated"><strong><?php echo get_option('fcontent_t1'); ?></strong></h2>
                        							<div class="border-btm"></div>
                                                    <div class="border-lft"></div>
											
                      <!--  <p class="wow fadeInDown animated animated">Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>-->
                    </div>
					<?php
                    
                    global $post;
                    $args = array( 'posts_per_page' => 4, 'order' => 'desc');
                    $lastposts = get_posts( $args );
                    foreach ( $lastposts as $post ) :
                     setup_postdata( $post ); ?>
					<div class="col-md-6 col-sm-6 col-xs-12">
                    			<a href="<?php the_permalink();?>"><div class="module-wrap">
                                		<img src="<?php echo get_the_post_thumbnail_url();?>" alt="img" />
                                		<div class="module-text">
                                        	<h4><?php the_title();?></h4>
                                            <p><?php the_content();?></p>
                                        </div></a>
                                </div>
                                
                    </div>
					
					<?php endforeach; 
                    wp_reset_postdata(); ?>
					 
                  <!-- <div class="col-md-6 col-sm-6 col-xs-12">
				  
                    			<div class="module-wrap">
								
                                		<!--<img src="<?php bloginfo('template_url'); ?>/images/UPS-Sept.-30.jpg" alt="img" />
                                		<div class="module-text">
                                        	<h4><?php the_title(); ?></h4>
                                            <p><?php the_content(); ?></p>
                                        </div>
                                </div>
                                
                     </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    			<div class="module-wrap">
                                		<img src="<?php bloginfo('template_url'); ?>/images/franchising-1.jpg" alt="img" />
                                		<div class="module-text" style="background:#6ba06f">
                                        	<h4>Lorem Ipsum</h4>
                                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
                                        </div>
                                </div>
                                
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="module-wrap">
                                		<img src="<?php bloginfo('template_url'); ?>/images/franchising-1.jpg" alt="img" />
                                		<div class="module-text" style="background:#f78d0a">
                                        	<h4>Lorem Ipsum</h4>
                                            <p >Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
                                        </div>
                    </div>
                                                            </div>
                                                             <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="module-wrap">
                                		<img src="<?php bloginfo('template_url'); ?>/images/aeroplan.jpg" alt="img" />
                                		<div class="module-text" style="background:#138294">
                                        	<h4>Lorem Ipsum</h4>
                                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
                                        </div>
                    </div>-->
                                                            </div>
                                          
                                            </div>
                                    </div>
                        </section>
            <!----------Featured Content--------------->
		    <!----------Team--------------------------->
			<section id="fh5co-team" data-section="team">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Meet The Team</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 style="color:#8f989f">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?php bloginfo('template_url'); ?>/images/person2.jpg" alt="Roger Garfield"></div>
							<h3 style="color:#333">Mohd Saif</h3>
							<span class="position">Co-Founder, Lead Developer</span>
							<p style="color:#8f989f">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<ul class="social-media" style="color:8f989f">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
								<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?php bloginfo('template_url'); ?>/images/person2.jpg" alt="Roger Garfield"></div>
							<h3 style="color:#333">Mohd Saif</h3>
							<span class="position">Co-Founder, Product Designer</span>
							<p style="color:#8f989f">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<ul class="social-media" style="color:8f989f">
								<li style="color:8f989f"><a href="#" class="facebook"><i class="icon-facebook" style="color:8f989f"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
								<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?php bloginfo('template_url'); ?>/images/person3.jpg" alt="Roger Garfield"></div>
							<h3 style="color:#333">Mohd Saif</h3>
							<span class="position">Full Stack Developer</span>
							<p style="color:#8f989f">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<ul class="social-media" style="color:8f989f">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
								<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

			<!------------Team------------------------->
            <!----------promotion-widget -------------->
            				<section id="promotion">
                            		<div class="container" id="tech-info">
                                    		<div class="row">
                                            		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                    		
                                                            <h2 class="wow fadeInUp animated animated"><?php echo get_option('fcontent_t2'); ?></h2>
                                                            <p class="wow fadeInUp animated animated"><?php echo get_option('fcontent_a2'); ?></p>
                                                            <form method="get" action="<?php echo esc_url( home_url( '/register') ); ?>"><button class="sign-up wow fadeInUp animated animated">Sign Up Here</button></form>
                                                    </div>
                                            </Div>
                                    </div>
                            </section>
            <!----------promotion-widget--------------->
            <!------------------Top Stories------------>
            		<section id="top-stories">
                    		<div class="text-center">
                            		<h1>Full Access <strong>Services</strong></h1>
                                    <div class="border-btm"></div>
                                                    <div class="border-lft"></div>
                                    <p style="color:#222222;margin-bottom: 48px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dignissim sollicitudin sapien efficitur faucibus. Vestibulum .</p>
                            </div>
                    		<div class="container" id="top-stories-body">
                            	<div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    		<div class="stories-layout">
                                    			<div class="col-md-3 col-sm-3 col-xs-12">
                                                		<div class="stories-1">
                                                        		<img src="<?php bloginfo('template_url'); ?>/icon/book.png" alt="#" />
                                                                <h6>Benefit-1</h6>
                                                                <div class="icon">
                                                                	<img src="<?php bloginfo('template_url'); ?>/icon/arrow1.png" alt="#" />	
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                		<div class=" stories-2">
                                                        	<img src="<?php bloginfo('template_url'); ?>/icon/calendar.png" alt="#" />
                                                               <span>Benefit-1</span>
                                                                 <div class="icon-2">
                                                                	<img src="<?php bloginfo('template_url'); ?>/icon/arrow2.png" alt="#" />	
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                		<div class=" stories-3">
                                                        	<img src="<?php bloginfo('template_url'); ?>/icon/book1.png" alt="#" />
                                                                <span>Benefit-1</span>
                                                                 <div class="icon-3">
                                                                	<img src="<?php bloginfo('template_url'); ?>/icon/arrow3.png" alt="#" />	
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                		<div class=" stories-4">
                                                        	<img src="<?php bloginfo('template_url'); ?>/icon/calendar1.png" alt="#" />
                                                                <h6>Benefit-1</h6>
                                                                <div class="icon-4">
                                                                	<a href="#">
                                                                	<img src="<?php bloginfo('template_url'); ?>/icon/arrow4.png" alt="#" />
                                                                    	
                                                                    	
                                                                    </a>
                                                                    	
                                                                </div>
                                                        </div>
                                                </div>
                                             </div>
                                             <div class="sarvic-btn">
                                             			<img src="<?php bloginfo('template_url'); ?>/icon/button.png" />
                                                        <h5><a style="color:white; text-decoration:none;" href="<?php echo esc_url( home_url( '/register') ); ?>">REGISTER NOW</a></h5>
                                                                        <p>it's quick and easy!</p>
                                             </div>
                                    </div>
                                 </div>
                           </div>
                   </section>
                   <!------------We Are Compact----------->
                   				<section id="compact">
                                		<div class="container">
                                        	<div class="row">
                                            		<div class="col-md-12 col-sm-12 col-xs-12 com-boby">
                                                    		<div class="text-center">
                            		<h1>We Are<strong>Compact</strong></h1>
                                    <div class="border-btm"></div>
                                                    <div class="border-lft"></div>
                                    
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                            			<Div class="compact-text" style="color:black">
                                        	<h2 style="color:black"><?php echo get_option('fcontent_t4'); ?></h2>
                                            <p style="color:black"><?php echo get_option('fcontent_a4'); ?></p>
                                            <!--<ul>
                                            	<li style="color:black"><i class="fa fa-caret-right" aria-hidden="true" style="color:black"></i>Lorem Ipsum: when, and when not to use it</li>
                                                <li style="color:black"><i class="fa fa-caret-right" aria-hidden="true" style="color:black"></i>Lorem Ipsum: when, and when not to use it</li>
                                                <li style="color:black"><i class="fa fa-caret-right" aria-hidden="true" style="color:black"></i>Lorem Ipsum: when, and when not to use it</li>
                                            </ul>-->
                                            <form method="get" action="<?php echo esc_url( home_url( '/contact') ); ?>"  style="width:261px; display:inline;" ><button class="btn-conteact">Contact Us</button></form>
                                            <button class="learn">Learn More</button>	
                                        </Div>
                            </div>
                             <div class="col-md-5 col-sm-5 col-xs-12">
                             		<div class="compact-imges">
                                    		<img src="<?php bloginfo('template_url'); ?>/images/fundo-investimentos.jpg" alt="#" />
                                    </div>
                            </div>
							
                                                    </div>
													
                                            </div>
                                        </div>
									<hr>
									
								<div id="googleMap" style="width:100%;height:400px; position:static;"><a name="#map_1"></a><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.4850793857354!2d77.11902331468217!3d28.70504598238932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03e1dc326485%3A0x91d856b5e511b166!2sWitoni+Software+%26+Services!5e0!3m2!1sen!2sin!4v1501480967887" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe></div>
								
										
                                </section>
								
								
								
<?php// get_sidebar(); ?>
<?php get_footer(); ?>
