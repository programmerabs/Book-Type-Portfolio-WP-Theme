<?php $contact_data=new WP_Query(array(
							'post_type'=>'contact',
							'posts_per_page'=>1
							));?>
						<?php	if($contact_data->have_posts()):?>
							<?php while($contact_data->have_posts()):$contact_data->the_post();?>
	<div class="bb-item">
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content">

                                <!-- Contact -->
								
                                <div id="contact" class="section-block">
                                    <h3 class="title">Get in Touch</h3>
									
                                    <!-- Contact Form -->
                                   <?php the_content();?>
                                    <!-- Contact Info -->
                                    <div class="contact-info row">
                                        <div class="col-sm-4">
                                            <span>Visit</span>
                                            <p><?php echo get_post_meta( get_the_ID(),'c_address', true ); ?></p>
                                        </div>
                                        <div class="col-sm-4">
                                            <span>Reach</span>
                                            <p><a href="callto:<?php echo get_post_meta( get_the_ID(),'c_phone', true ); ?>"><?php echo get_post_meta( get_the_ID(),'c_phone', true ); ?></a></p>
                                            <p><a href="mailto:<?php echo get_post_meta( get_the_ID(),'c_email', true ); ?>"><?php echo get_post_meta( get_the_ID(),'c_email', true ); ?></a></p>
                                        </div>
                                        <div class="col-sm-4">
                                            <span>My Website</span>
											<a href="<?php echo get_post_meta( get_the_ID(),'c_website', true ); ?>"> <p><?php echo get_post_meta( get_the_ID(),'c_website', true ); ?></p></a>
                                           
                                        </div>
                                    </div>
                                </div>
								
                                <!-- Contact end -->
                            </div>
                        </div>
                    </div>
                    <div class="bb-custom-side bb-fullsize">
                        <div class="bb-custom-side-inner">

                            <!-- Google Map -->
                            <div id="map-wrapper">
                               <?php echo get_post_meta( get_the_ID(),'g_map', true ); ?>
                            </div>
                            <!-- Google Map end -->
                        </div>
                    </div>
                </div>
	<?php endwhile;?>
<?php endif;?>
<?php wp_reset_postdata();?>