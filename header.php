<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage jack
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="top-header">
            		<div class="container">
                    		<div class="row">
                            		<div class="col-md-12 col-sm-12 col-xs-12 top-haeder-menu">
                                    		<div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="contact">
											
                                                        		<ul>
                                               <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_option('fcontent_t'); ?></a></li>
                                                <li style="border-right:none"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_option('fcontent_a'); ?></a></li>
                                                                   
                                                                </ul>
                                                        </div>
                                            </div>
                                            			
											 
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            			<div class="top-menu">
														 <?php if(is_user_logged_in()){
                                                        global $current_user;
                                                        get_currentuserinfo();
                                                        
                                                        ?>
                                                         <ul>
                                                            <li><span class="admin">Hello <?php echo ucfirst($current_user->user_login); ?></span></li>
                                                            
                                                            <li style="border-right:none"><a class="logout" href="<?php echo wp_logout_url(); ?>">Logout</a></li> 
                                                            </ul>
														 <?php }else{ ?> <ul>
							                                      <?php  wp_nav_menu(array(
							                                           'theme_location' => 'header1',
							                                           
							                                         ));
																?></ul>
															<?php } ?>
																
                                                               <!--<li><a href="#">Home</a></li>
                                                                    <li><a href="#">Login</a></li>
                                                                    <li><a href="#">Register</a></li>
                                                                    <li  style="border-right:none"><a href="#">Contact Us</a></li>-->
                                                                </ul>
                                                        </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </header>
            <!---------------top header-------->
            <!------------logo section---------->
            				<section id="logo">
                            		<div class="container">
                                    		<div class="row">
                                            		<div class="col-md-12 col-sm-12 col-xs-12 content">
                                                    		<div class="col-md-4 col-sm-4 col-xs-12">
                                                            		<div class="blog-logo">
                                                                    	<a href="page.php"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo" style="width:200px;" /></a>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                            		<div class="seach">
                                                                    		<div class="search-text">
                                                                            		<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                                                    	
                                                                                    	<input type="search" class="search-info" placeholder="Search Here....." value="<?php echo get_search_query(); ?>" name="s" />
																						
                                                                                        <button type="submit" class="btn-search"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'jack' ); ?></span></button>
																						
                                                                                    </form>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div>
                            </section>
            <!------------logo sectioon--------->
            <!-----------------main menu-------->
<header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
				
                <div class="collapse navbar-collapse navbar-left">
				<?php if(is_user_logged_in()){ ?>
                       <ul>	
                          <?php	wp_nav_menu(array(
							'theme_location' => 'header2',
							'menu_class'  => 'nav navbar-nav',
							));        
                 ?></ul>
					
                   
				   <?php }else{ ?> 
						<ul>
						<?php	wp_nav_menu(array(
							'theme_location' => 'header',
							'menu_class'  => 'nav navbar-nav',
							));
				   ?> </ul>
				   <?php } ?>
                        <!--<li class="scroll"><a href="#home" style="border-left: 1px solid #fff;">HOME</a></li>
                        <li class="dropdown"><a href="#">MENU-1</a> <span class="daddyicon"></span>
                        		<ul class="dropdown-content">
                              
                                		 <a href="#">MENU-1</a>
                                        <a href="#">MENU-2</a>
                                         <a href="#">MENU-3</a>
                                          <a href="#">MENU-4</a>
                                           <a href="#">MENU-5</a>
                                        
                                </ul>
                                
                        </li>
                        <li class="scroll"><a href="#services">MENU-3</a></li>
                        <li class="scroll"><a href="#portfolio">MENU-4</a></li>
                        <li class="scroll"><a href="#about">MENU-5</a></li>
                        <li class="scroll"><a href="#meet-team">MENU-6</a></li>
                        <li class="scroll"><a href="#pricing">MENU-7</a></li>
                        <li class="scroll"><a href="#blog">BLOG</a></li> 
                        <li class="scroll"><a href="#get-in-touch">CONTACT</a></li>-->                         
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header>