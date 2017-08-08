
<?php /* Template Name: Member only */ ?>

<?php get_header();
if(is_user_logged_in()){ ?>
 
        		<div class="container">
                	<div class="home">
                    		<ul class="bradcome">
                            	<?php //get_breadcrumb(); ?>
                            </ul>
                    </div>
                </div>
        
            <!------------------Top Stories------------>
            		<section id="top-stories">
                    	
                    		<div class="container" id="top-stories-body">
                            	<div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 stories-layout">
                                    
                                    		<div class="col-md-8 col-sm-8 col-xs-12 stories-content">
                                            		<div class="about-us">
                                                    	<?php 
                                                        if ( have_posts() ) {
                                                        	while ( have_posts() ) {
                                                        		the_post(); 
                                                        		
                                                                the_content();
                                                                
                                                                
                                                        	} // end while
                                                        } // end if
                                                        ?>
                                                    </div>
                                                      
                                            		
                                            </div>
                                           <div class="col-md-4 col-sm-4 col-xs-12 stories-tab">
                                            		<div class="box-right">
                                            		 <div class="siderbar_first">
                                                      <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                                      </div>
                                                      </div>
                                                      
                                                    
                                                    
                                                    
                                            </div>
                                    </div>
                                 </div>
                           </div>
                   </section>
               
<?php }else { 

wp_redirect( home_url().'/login');

}
get_footer(); ?>