<div class="bb-item">
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content">
							<?php $about_data=new WP_Query(array(
											'post_type'=>'about',
											'posts_per_page'=>1
											));?>
						<?php	if($about_data->have_posts()):?>
							<?php while($about_data->have_posts()):$about_data->the_post();?> 
                                <div id="about" class="section-block">
                                    <h3 class="title"><?php the_title();?></h3>
                                    <?php the_content();?>
									<?php $entries = get_post_meta( get_the_ID(), 'abt_gp', true );?>
									<?php if(is_array($entries)){ ?>
                                    <ul class="info-list">
										<?php foreach($entries as $entry){?>
											<li><strong> <?php echo $entry['info_name'];?></strong><span> <?php echo $entry['info_value'];?></span></li>
                                        <?php };?>
                                    </ul>
									 <?php };?>
                                </div>
								<?php endwhile;?>
										<?php endif;?>
								<?php wp_reset_postdata();?> 
                                <!-- About end -->

                                <!-- Services -->
                                <div id="services" class="section-block">
                                    <h3 class="title">Services</h3>
                                    <div class="row p-t-10">
                                <?php 
										$service_data=new WP_Query(array(
											'post_type'=>'service',
											'posts_per_page'=>-1
											));
									?>
										<?php	if($service_data->have_posts()):?>
											<?php while($service_data->have_posts()):$service_data->the_post();?> 
                                        <div class="icon-box col-md-6">
                                            <div class="icon-box-icon">
                                                <i class="icon ion-ios-<?php echo get_post_meta( get_the_ID(),'sv_icon', true ); ?>"></i> 
                                            </div>
                                            <div class="icon-box-content">
                                                <h4><?php the_title();?></h4>
                                               <?php the_content();?>
                                            </div>
                                        </div>
											<?php endwhile;?>
										<?php endif;?>
								<?php wp_reset_postdata();?>   
                                    </div>
                                </div>
                                <!-- Services end -->
                            </div>
                        </div>
                    </div>
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content">

                                <!-- Pricing -->
                                <div id="pricing" class="section-block">
                                    <h3 class="title">Pricing</h3>
                                    <div class="row no-gutters p-b-15">
								 <?php $table_data=new WP_Query(array(
											'post_type'=>'table',
											'posts_per_page'=>-1
											));?>
										<?php if($table_data->have_posts()):?>
											<?php while($table_data->have_posts()):$table_data->the_post();?>
                                        <div class="col-md-6">
                                            <div class="pricing-table left">
                                                <div class="name"><?php the_title();?></div>
                                                <div class="price">
                                                    <span class="currency"><?php echo get_post_meta( get_the_ID(), 'currency', true ); ?></span>
                                                    <span class="amount"><?php echo get_post_meta( get_the_ID(), 'Amount', true );?></span>
                                                    <span class="period">/<?php echo get_post_meta( get_the_ID(), 'Period', true );?></span> 
                                                </div>
												<?php $fall = get_post_meta( get_the_ID(), 'table_g', true );?>
                                                <?php if(is_array($fall)){ ?>
													<ul class="feature-list">
														<?php foreach($fall as $fone){?>
															<li> <?php echo $fone['f_name'];?></li>
														<?php };?>
													</ul>
													 <?php };?>
                                                <div class="pricing-button">
                                                    <a href="<?php echo get_post_meta( get_the_ID(), 'tbl_btn_link', true );?>" class="btn btn-sm btn-light btn-block"><?php echo get_post_meta( get_the_ID(), 'tbl_btn_name', true );?></a> 
                                                </div>
                                            </div>
                                        </div>
                                       <?php endwhile;?>
										<?php endif;?>
								<?php wp_reset_postdata();?>  
                                       
                                    </div>
                                </div>
                                <!-- Pricing end -->
								 <!-- Fun Facts -->
								 <?php 	$success_data=new WP_Query(array(
							'post_type'=>'success',
							'posts_per_page'=>-1
									));?>
                                <div id="funfacts" class="section-block">
                                    <h3 class="title">Fun Facts</h3>
                                    <div class="row">
                                <?php	if($success_data->have_posts()):?>
									<?php while($success_data->have_posts()):$success_data->the_post();?>        
                                        <div class="col-4 col-sm-4">
                                            <div class="funfact">
                                                <h2><?php the_content();?></h2>
                                                <p><?php the_title();?></p>
                                            </div>
                                        </div>
									<?php endwhile;?>
									<?php endif;?>	
                                    </div>
                                </div>
                                <!-- Fun Facts end -->
                                
                                <!-- Fun Facts end -->

                                <!-- Clients -->
                                <div id="clients" class="section-block pb-md-5">
                                    <h3 class="title">My Clients</h3>
                                    <div class="row clients">
								<?php $table_data=new WP_Query(array(
											'post_type'=>'client',
											'posts_per_page'=>-1
											));?>
										<?php if($table_data->have_posts()):?>
											<?php while($table_data->have_posts()):$table_data->the_post();?>	
                                        <div class="client-block col-6 col-sm-4">
                                            <?php the_post_thumbnail();?>
                                        </div>
                                    <?php endwhile;?>
										<?php endif;?>
								<?php wp_reset_postdata();?>     
                                    </div>
                                </div>
                                <!-- Clients end -->
                            </div>
                        </div>
                    </div>
                </div>