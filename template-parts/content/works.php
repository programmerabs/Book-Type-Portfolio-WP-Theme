<!------Start Work------>
				
 <div class="bb-item">
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content">

                                <!-- Portfolio -->
                                <div id="portfolio" class="section-block">
                                    <h3 class="title">Portfolio</h3>
                                    <!-- Works Filter -->
                                    <div class="works-filter-wrap">
                                        <ul class="works-filter clearfix">
                                            <li>
                                                <a id="all" href="#" data-filter="*" class="active">
                                                    <span>All</span>
                                                </a> 
                                            </li>	
										<?php
										$terms=get_terms('portfolio_category');
										foreach($terms as $term){?>
											 <li class="d-none d-md-inline-block">
                                                <a data-filter=".<?php echo $term->slug;?>">
                                                    <span><?php echo $term->name;?></span>
                                                </a> 
                                            </li>
										<?php }?>    
                                        </ul>
                                    </div>
										<?php 	$work_data=new WP_Query(array(
												'post_type'=>'portfolio',
												'taxonomy' =>'portfolio_category',
												'posts_per_page'=>-1
										));?>
                                    <div id="works-container" class="works-container clearfix">
										<?php	if($work_data->have_posts()):?>
											<?php while($work_data->have_posts()):$work_data->the_post();?> 
                                        <?php
											$terms = get_the_terms( get_the_ID(), 'portfolio_category' );
												if ( $terms && ! is_wp_error( $terms ) ) : 
												$draught_links = array();
												foreach ( $terms as $term ) {
													$draught_links[] = $term->slug;
												}					 
												$on_draught = join( " ", $draught_links );
											?>
                                        <div class="works-item <?php echo $on_draught;?>">
                                            <a class="lightbox-inline" target="_blank" href="<?php the_permalink();?>">
                                               <?php the_post_thumbnail();?>
                                                <div class="works-item-inner">
                                                    <div class="works-item-caption">
                                                        <h4><?php the_title();?></h4>
                                                        <h5>
															<?php 
															if(get_the_terms(get_the_id(),'portfolio_category')){
																$terms=get_the_terms(get_the_id(),'portfolio_category');
																
																foreach($terms as $term){
																	echo $term->name.', ';
																}
															}
															?>
														</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
										<?php endif;?>
										<?php endwhile;?>
										<?php endif;?>
										<?php wp_reset_postdata();?>                                     
                                    </div>
                                </div>
                                <!-- Portfolio end -->
                            </div>
                        </div>
                    </div>
					<?php 	$work_data=new WP_Query(array(
				'post_type'=>'portfolio',
					'posts_per_page'=>-1
						));?>	
                    <div class="bb-custom-side bb-fullsize">
                        <div class="bb-custom-side-inner">
							<?php	if($work_data->have_posts()):?>
											<?php while($work_data->have_posts()):$work_data->the_post();?> 	
							<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                            <div class="bb-custom-side-content bg-image d-none d-lg-block" data-image="<?php echo $featured_img_url;?>">
							</div>
									<?php endwhile;?>
							<?php endif;?>
							<?php wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
		