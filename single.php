<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
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
                                      <h3 class="wow fadeInRight animated animated">Content systems Lorem Ipsum: variants and technical information</h3>
                                                                                </div>
                                         <button class="sign-up wow fadeInRight animated animate">Sign up for yours - it's free!</button>
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
																 <?php 
																	if( have_posts()){
																			while(have_posts()){
																			the_post();?>
				 
																			<p><?php the_content();?></p>
																		<?php
																			}
																			}
																?>
        
                        <!--<h2 class="wow fadeInDown animated animated">Featured <strong>Content</strong></h2>
                        							<div class="border-btm"></div>
                                                    <div class="border-lft"></div>
                        <p class="wow fadeInDown animated animated">Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>-->
                    </div>
					 
                   <div class="col-md-6 col-sm-6 col-xs-12">
				  
                    			<div class="module-wrap">
								
                                		<!--<img src="<?php bloginfo('template_url'); ?>/images/UPS-Sept.-30.jpg" alt="img" />-->
                                		<div class="module-text">
                                        	<h4><?php the_title(); ?></h4>
                                            <p><?php the_content(); ?></p>
                                        </div>
                                </div>
                                
                     <!--</div>
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
            
<?php// get_sidebar(); ?>
<?php get_footer(); ?>
