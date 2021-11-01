<!------Start Resume------>
					<?php 
						$resume_data=new WP_Query(array(
							'post_type'=>'resume',
							'posts_per_page'=>1
							));
					?>
						<?php	if($resume_data->have_posts()):?>
							<?php while($resume_data->have_posts()):$resume_data->the_post();?>
				<div class="bb-item">
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content">
									
                                <!-- Experience -->
                                <div id="experience" class="section-block">
                                    <h3 class="title"> <?php echo get_post_meta( get_the_ID(),'exp_head', true ); ?></h3>
                                    <div class="timeline">
									 <?php $entries = get_post_meta( get_the_ID(), 'rex_g', true );?>
										<?php if(is_array($entries)){ ?>
											<?php foreach($entries as $entry){?>
                                        <div class="timeline-item">
                                            <div class="timeline-content">
                                                <span class="timeframe"><?php echo $entry['r_time'];?></span>
                                                <h4 class="name"><?php echo $entry['r_cname'];?></h4>
                                                <span class="location"><?php echo $entry['r_dg'];?></span>
                                                <p><?php echo $entry['c_tl'];?></p>
                                            </div>
                                        </div>
											<?php };?>
										  <?php };?>
										 
										  
                                        
                                    </div>
                                </div>
                                <!-- Experience end -->

                                <!-- Education -->
                                <div id="education" class="section-block">
                                     <h3 class="title"> <?php echo get_post_meta( get_the_ID(),'eedu_head', true ); ?></h3>
                                    <div class="timeline">
									 <?php $entries = get_post_meta( get_the_ID(), 'eedu_g', true );?>
										<?php if(is_array($entries)){ ?>
											<?php foreach($entries as $entry){?>
                                        <div class="timeline-item">
                                            <div class="timeline-content">
                                                <span class="timeframe"><?php echo $entry['e_time'];?></span>
                                                <h4 class="name"><?php echo $entry['e_cname'];?></h4>
                                                <span class="location"><?php echo $entry['e_dg'];?></span>
                                                <p><?php echo $entry['e_cont'];?></p>
                                            </div>
                                        </div>
											<?php };?>
										  <?php };?>

                                    </div>
                                    <!-- Download CV Button -->
                                    <div class="text-center mt-lg-5 mb-lg-4">
                                        <a class="btn btn-light btn-block" href="pdf/resume-sample.pdf" download>Download my CV</a>
                                    </div>
                                </div>
                                <!-- Education end -->
                            </div>
                        </div>
                    </div>
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content">

                                <!-- Skills #1 -->
								
                                <div id="skills" class="section-block">
                                    <h3 class="title"><?php echo get_post_meta(get_the_ID(),'skill_head1',true);?></h3>
                                    <div class="progress-bars">
										<?php $entries = get_post_meta( get_the_ID(), 'skill_g1', true );?>
										<?php if(is_array($entries)){ ?>
											<?php foreach($entries as $entry){?>
												<div class="progress-info"><?php echo $entry['skill_name1'];?></div>
												<div class="progress">
													<div class="progress-bar anim" data-percent="<?php echo $entry['skill_val1'];?>">
														<span class="value"><?php echo $entry['skill_val1'];?>%</span> 
													</div>
												</div>
											<?php };?>
										<?php };?>		
                                    </div>
                                </div>
                                <!-- Skills #1 end -->

                                <!-- Skills #2 -->
                                <div id="skills-2" class="section-block">
                                    <h3 class="title"><?php echo get_post_meta(get_the_ID(),'skill_head2',true);?></h3>
                                    <div class="progress-bars">
										<?php $entries = get_post_meta( get_the_ID(), 'skill_g2', true );?>
										<?php if(is_array($entries)){ ?>
											<?php foreach($entries as $entry){?>
												<div class="progress-info"><?php echo $entry['skill_name2'];?></div>
												<div class="progress">
													<div class="progress-bar anim" data-percent="<?php echo $entry['skill_val2'];?>">
														<span class="value"><?php echo $entry['skill_val2'];?>%</span> 
													</div>
												</div>
											<?php };?>
										<?php };?>		
                                    </div>
                                </div>
                                <!-- Skills #2 end -->
                            </div>
                        </div>
                    </div>
                </div>
		<?php endwhile;?>
	<?php endif;?>
	<?php wp_reset_postdata();?>
	
	<!-----End resume------->