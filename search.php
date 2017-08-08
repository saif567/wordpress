<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>
  
  
  <!------------------page content------------>
            		<section id="top-stories">
                    	
                    		<div class="container" id="top-stories-body">
                            	<div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 stories-layout">
                                    
                                    		<div class="col-md-8 col-sm-8 col-xs-12 stories-content">
                                            	
												
				 <?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'jack' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			  
			 <a href="<?php the_permalink();?>"><h1 ><?php the_title(); ?></h1></a>
			 <p><?php the_excerpt();?></p>
			
			<?php endwhile; ?>

		  <?php else : ?>

			<article id="post-0" class="post no-results not-found" style="color:black">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'jack' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'jack' ); ?></p>
					
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>          
                                            		
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 stories-tab">
                                            		
											  <div class="box-right">
                                            		 
                                                       <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                                      
                                                      
                                                    </div>
                                                    <div class="content-list-box">
                                                    		<h3>All-Time Must Read</h3>
                                                    </div> 
                                                    <div class="nezs-text">
                                                    	  <?php dynamic_sidebar( 'sidebar-2' ); ?>
                                                        
                                                        
                                                    </div>
                                                    <div class="content-box-image">
                                                    	
                                                         <?php dynamic_sidebar( 'sidebar-3' ); ?>
                                                        
                                                        
                                                      </div>		
													
													
                                            </div>
                                    </div>
                                 </div>
                           </div>
                   </section>
        


<?php //get_sidebar(); ?>
<?php get_footer(); ?>