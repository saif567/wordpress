<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage jack
 */
?>

		<footer id="main-footer">
                                                      		
                                    		
                                            		<div class="col-md-12 col-sm-12 col-xs-12 footer-body">
                                                    <div class="row">
                                                    	<div class="col-md-6 col-sm-6 col-xs-12 contact-us">
                                                        		<div class="get-in-touch">
                                                                		<h3>Contact Us</h3>
                                                                       <ul>
                                                                       		<li>123 Maine Street, Uni 21 </li></br>
                                                                            <li>New York City</li></br>
                                                          <li><i class="fa fa-envelope" aria-hidden="true"></i><?php echo get_option('fcontent_t'); ?></li></br>
                                                          <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_option('fcontent_a'); ?></li></br>

                                                                       </ul>
                                                                        
                                                                </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12 follow-us">
                                                        		<div class="social-icon">
                                                                <h3>Follow Us</h3>
                                                                		<ul>
                                                                        	<li><a href="https://www.facebook.com/"><img src="<?php bloginfo('template_url'); ?>/images/fb.png" alt="fb" /></a></li>
                                                                            <li><a href="https://twitter.com/login"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="tw" /></a></li>
                                                                            <li><a href="https://google+.com/login"><img src="<?php bloginfo('template_url'); ?>/images/google.png" alt="google+" /></a></li>
                                                                            <li><a href="https://linkdin.com/login"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" alt="in" /></a></li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                        
                                                    </div>
                                            </div>
                                           
                                         <div class="copyright">
                                         <h6><a href="#">© 2017 witoni sotfware &  services  All rights reserved</a></h6>
                                         </div>                                  
                            </footer>

<?php wp_footer(); ?>
</body>
</html>
