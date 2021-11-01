 <?php 	$post_data=new WP_Query(array(
				'post_type'=>'post',
					'posts_per_page'=>2,
					'order'=>'asc'
						));?>	
 <div class="bb-item">
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content pb-0 pb-lg-3">
                                <div id="blog" class="section section-block">
                                    <h3 class="title">Blog</h3>
                                  <?php if($post_data->have_posts()):?>
										<?php while($post_data->have_posts()):$post_data->the_post();?>
                                    <article class="post entry">
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink();?>">
                                            <a href="<?php the_permalink();?>">
                                               <?php the_post_thumbnail();?>
                                            </a>
                                            <div class="post-heading">
                                                <h4 class="post-title">
                                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                </h4>
                                                <ul class="post-meta">
                                                    <li><a href="#"><?php the_time('D M Y');?></a></li>
                                                    <li><a href="#"><?php the_category();?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <?php read_more(30);?>
                                        </div>
                                    </article>
                                  <?php endwhile;?>
                                  <?php endif;?>
								  <?php wp_reset_postdata();?>
                                </div>
                            </div>
                        </div>
                    </div>
					 <?php 	$post_data2=new WP_Query(array(
							'post_type'=>'post',
							'posts_per_page'=>2,
						));?>	
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content py-0 py-lg-3">
                                <div id="blog-2" class="section section-block pt-0 pt-lg-4 mt-lg-3">
                                    <?php if($post_data2->have_posts()):?>
										<?php while($post_data2->have_posts()):$post_data2->the_post();?>
                                    <article class="post entry">
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink();?>">
                                                <?php the_post_thumbnail();?>
                                            </a>
                                            <div class="post-heading">
                                                <h4 class="post-title">
                                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                </h4>
                                                <ul class="post-meta">
                                                    <li><a href="#"><?php the_time('d M Y');?></a></li>
                                                    <li><a href="#"><?php the_category();?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <?php read_more(30);?>
                                        </div>
                                    </article>
									<?php endwhile;?>
									<?php endif;?>
									 <?php wp_reset_postdata();?>
                                    <div class="text-center mb-lg-4">
                                        <a href="http://localhost/anisurrahman/blog/" class="btn btn-light btn-block">Check out my blog</a>
                                    </div>
                                </div>
                                <!-- Blog #2 end-->
                            </div>
                        </div>
                    </div>
                </div>