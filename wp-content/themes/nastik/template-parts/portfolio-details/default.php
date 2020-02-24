<?php $nastik_options = get_option('nastik'); ?>
<?php if(have_posts()) : while ( have_posts() ) : the_post();?>
<!--content -->
                    <div class="content">
                        <!--section-->
						<?php if (has_post_thumbnail( $post->ID ) ):
					    $nastik_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
						<?php endif;?>
                        <section class="header-section hidden-section" data-scrollax-parent="true">
						<?php $nastik_back_image = rwmb_meta( 'rnr_ns_port_details_page_header_back_st1','type=image&size=' ); ?>
						<?php if ( ! empty( $nastik_back_image ) ) { ?>
						<?php foreach ( $nastik_back_image as $nastik_back_images ){ ?>
                            <div class="bg par-elem"  data-bg="<?php echo esc_url(($nastik_back_images['url']));?>" data-scrollax="properties: { translateY: '30%' }"></div>
						<?php } ;?>
						<?php } else { ?>
						<div class="bg par-elem"  data-bg="<?php echo esc_url($nastik_image[0]);?>" data-scrollax="properties: { translateY: '30%' }"></div>
						<?php } ;?>
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="single-page-title fl-wrap hiddec-anim">
                                    <?php if (( get_post_meta($post->ID,'rnr_ns_port_details_page_header_title_st1',true))):?>	
                                    <h1><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_port_details_page_header_title_st1',true)); ?></h1>
									<?php else: ?>
                                    <h1><?php the_title();?></h1>
									<?php endif;?>
									<?php if (( get_post_meta($post->ID,'rnr_ns_port_details_page_header_desc_st1',true))):?>	
                                    <p><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_port_details_page_header_desc_st1',true)); ?>  </p>
									<?php endif;?>
                                </div>
                                <div class="hero-corner"></div>
                                <div class="scroll-down-wrap hiddec-anim">
                                    <div class="mousey">
                                        <div class="scroller"></div>
                                    </div>
                                    <span><?php if(get_post_meta($post->ID,'rnr_ns_port_details_page_header_translate_op1_st1',true)):?><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_port_details_page_header_translate_op1_st1',true));?> <?php else : ?><?php esc_html_e('Scroll down  to discover','nastik');?><?php endif;?></span>
                                </div>
                            </div>
                            <div class="fcw-dec"></div>
                        </section>
                        <section>
                            <!--section end-->
                            <div class="col-wc_dec"></div>
                            <div class="container">
                                <!-- portfolio start -->
                                <div class="gallery-items min-pad  lightgallery   fl-wrap  hiddec-anim">
												<?php
												$nastik_car_slide_opt = rwmb_meta( 'rnr_so_drt_po_gallery' );
												if ( ! empty( $nastik_car_slide_opt ) ) {
												foreach ( $nastik_car_slide_opt as $nastik_car_slide_opts ) { ;?>
												<?php $nastik_column = isset( $nastik_car_slide_opts['rnr_md_pot_gallery_column'] ) ? $nastik_car_slide_opts['rnr_md_pot_gallery_column'] : ''; ?>
												<?php $nastik_image_ids = isset( $nastik_car_slide_opts['rnr_portfolio-image-popu'] ) ? $nastik_car_slide_opts['rnr_portfolio-image-popu'] : array();
												foreach ( $nastik_image_ids as $nastik_image_id ) {
													$nastik_image = RWMB_Image_Field::file_info( $nastik_image_id, array( 'size' => '' ) ); ?>
                                    <!-- gallery-item-->
                                    <div class="gallery-item  <?php echo esc_attr($nastik_column);?>">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="<?php echo esc_url(($nastik_image['url']));?>"    alt="<?php echo esc_attr(($nastik_image['title']));?>">
                                            <a href="<?php echo esc_url(($nastik_image['url']));?>" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                   <?php } } } ;?>
                                </div>
                                <!-- portfolio end --> 
                                <!-- text-block  --> 
                                <div class="text-block fl-wrap">
                                    <div class="row">
									<?php 
									global $nastik_content_div_class;
									if(get_post_meta($post->ID,'rnr_ns_port_details_info_enable_opt',true)=='st2'){
									$nastik_content_div_class="col-md-8 sin-anim";
									} else {
									$nastik_content_div_class="col-md-12";
									} ;?>
                                        <div class="<?php echo esc_attr ($nastik_content_div_class);?>">
											<?php if (( get_post_meta($post->ID,'rnr_ns_port_details_con_sec_title_opt',true))):?>
                                            <h3 class="pr-subtitle"> <?php echo esc_html(get_post_meta($post->ID,'rnr_ns_port_details_con_sec_title_opt',true)); ?></h3>
											<?php endif;?>
                                            <?php the_content();?>
										<?php if (( get_post_meta($post->ID,'rnr_wr_port_accor_opt',true))=='st2'):?>
										<?php if (( get_post_meta($post->ID,'rnr_ns_port_accordion_title',true))):?>
                                        <h3 class="pr-subtitle mar-top"> <?php echo esc_html(get_post_meta($post->ID,'rnr_ns_port_accordion_title',true)); ?></h3>
										<?php endif;?>
                                        <!-- accordion-->                            
                                        <div class="accordion mar-top">
											<?php
											$solonick_acc_tab_opt = rwmb_meta( 'rnr_so_acc_tab_opt' );
											if ( ! empty( $solonick_acc_tab_opt ) ) {
											foreach ( $solonick_acc_tab_opt as $solonick_acc_tab_opts ) { ;?>
											
											<?php $solonick_acco_title = isset( $solonick_acc_tab_opts['rnr_so_acc_title_opt'] ) ? $solonick_acc_tab_opts['rnr_so_acc_title_opt'] : ''; ?>
											<?php $solonick_acco_con = isset( $solonick_acc_tab_opts['rnr_so_acc_con_opt'] ) ? $solonick_acc_tab_opts['rnr_so_acc_con_opt'] : ''; ?>
											<?php $solonick_acco_active = isset( $solonick_acc_tab_opts['rnr_so_acc_accon_opt'] ) ? $solonick_acc_tab_opts['rnr_so_acc_accon_opt'] : ''; ?>
											
											<?php 
											if($solonick_acco_active == "st2") {
											$solonick_tab_title_act ='act-accordion';
											$solonick_tab_content_act ='visible';
											}
											else {
											$solonick_tab_title_act ='';
											$solonick_tab_content_act ='';
											}
											
											?>
											
                                            <a class="toggle <?php echo esc_attr($solonick_tab_title_act);?>" href="#"> <?php echo esc_html($solonick_acco_title);?>   <span></span></a>
                                            <div class="accordion-inner <?php echo esc_attr($solonick_tab_content_act);?>">
                                                <p><?php echo esc_html($solonick_acco_con);?></p>
                                            </div>
											<?php } } ;?>
                                            
                                        </div>
                                        <!-- accordion end --> 
										<?php endif;?>										
                                        </div>
										<?php if(get_post_meta($post->ID,'rnr_ns_port_details_info_enable_opt',true)=='st2'){ ?>
                                        <div class="col-md-4">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="project-details fl-wrap">
                                                <ul>
													<?php
													$solonick_project_info = rwmb_meta( 'rnr_ns_port_details_info_opt' );
														if ( ! empty( $solonick_project_info ) ) {
														foreach ( $solonick_project_info as $solonick_project_opts ) { ;?>
                                                    <li><span><?php echo esc_html($solonick_project_opts['car_opt_in_tit']);?> :</span> <?php echo balanceTags($solonick_project_opts['car_opt_in_con']);?> </li>
													<?php } } ;?> 
                                                    
                                                </ul>
												<?php if (( get_post_meta($post->ID,'rnr_bl-port-button-opt',true))):?>
                                                <a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl-port-button-opt',true)); ?>" class="btn color-bg fl-wrap"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl-port-button_text-opt',true)); ?></a>
												<?php endif;?>
                                            </div>
                                        </div>
										<?php } ;?>
                                    </div>
                                    <div class="limit-box2 fl-wrap"></div>
                                    <!--content-nav_holder-->            
                                    <div class="content-nav_holder fl-wrap blog-nav">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <div class="content-nav">
                                            <ul>
                                                <li>
											<?php $nastik_previous_post = get_previous_post();
                                            $nastik_url = is_object( $nastik_previous_post ) ? get_permalink( $nastik_previous_post->ID ) : '';
                                            $nastik_title = is_object( $nastik_previous_post ) ? get_the_title( $nastik_previous_post->ID ) : '';
											if ($nastik_previous_post) { 
											$nastik_image = wp_get_attachment_image_src( get_post_thumbnail_id( $nastik_previous_post->ID ), 'nastik_portfolio_image' );
											}
											?>
											<?php  if ($nastik_previous_post) { ?>
                                                    <a href="<?php echo esc_url( $nastik_url ) ?>" class="ln ajax"><i class="fal fa-long-arrow-left"></i><span><?php if(!empty($nastik_options['translet_opt_18'])):?><?php echo esc_html(nastik_AfterSetupTheme::return_thme_option('translet_opt_18',''));?> - <?php else: ?><?php esc_html_e('Prev - ','nastik');?><?php endif;?><?php echo esc_html( $nastik_title ) ?></span></a>
                                                    <div class="content-nav-media">
                                                        <div class="bg"  data-bg="<?php echo esc_url($nastik_image[0]);?>"></div>
                                                    </div>
											<?php } else { ?>
											<?php if(!empty($nastik_options['portpageurl'])):?>
											<a href="<?php echo esc_url(nastik_AfterSetupTheme::return_thme_option('portpageurl',''));?>" class="ln ajax"><i class="fal fa-long-arrow-left"></i><span><?php if(!empty($nastik_options['translet_opt_22'])):?><?php echo esc_html(nastik_AfterSetupTheme::return_thme_option('translet_opt_22',''));?><?php else: ?><?php esc_html_e('Back To Portfolio','nastik');?><?php endif;?></span></a>
											<?php else : ?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ln ajax"><i class="fal fa-long-arrow-left"></i><span><?php if(!empty($nastik_options['translet_opt_21'])):?><?php echo esc_html(nastik_AfterSetupTheme::return_thme_option('translet_opt_21',''));?><?php else: ?><?php esc_html_e('Back To Home','nastik');?><?php endif;?></span></a>
											<?php endif;?>
                                                    <div class="content-nav-media">
                                                        <div class="bg"  data-bg="<?php echo esc_url($nastik_image[0]);?>"></div>
                                                    </div>
											<?php } ;?>
                                                </li>
                                                <li>
											<?php $nastik_next_post = get_next_post();
                                            $nastik_url = is_object( $nastik_next_post ) ? get_permalink( $nastik_next_post->ID ) : '';
                                            $nastik_title = is_object( $nastik_next_post ) ? get_the_title( $nastik_next_post->ID ) : ''; 
											if ($nastik_next_post) {
											$nastik_image = wp_get_attachment_image_src( get_post_thumbnail_id( $nastik_next_post->ID ), 'nastik_portfolio_image' );
											}
											?>
											<?php if ($nastik_next_post) { ?>
                                                    <a href="<?php echo esc_url( $nastik_url ) ?>" class="rn ajax"><span ><?php if(!empty($nastik_options['translet_opt_20'])):?><?php echo esc_html(nastik_AfterSetupTheme::return_thme_option('translet_opt_20',''));?> - <?php else: ?><?php esc_html_e('Next - ','nastik');?><?php endif;?><?php echo esc_html( $nastik_title ) ?></span> <i class="fal fa-long-arrow-right"></i></a>
                                                    <div class="content-nav-media">
                                                        <div class="bg"  data-bg="<?php echo esc_url($nastik_image[0]);?>"></div>
                                                    </div>
											<?php } else { ?>
											<?php if(!empty($nastik_options['portpageurl'])):?>
											<a href="<?php echo esc_url(nastik_AfterSetupTheme::return_thme_option('portpageurl',''));?>" class="rn ajax"><span ><?php if(!empty($nastik_options['translet_opt_22'])):?><?php echo esc_html(nastik_AfterSetupTheme::return_thme_option('translet_opt_22',''));?><?php else: ?><?php esc_html_e('Back To Portfolio','nastik');?><?php endif;?></span> <i class="fal fa-long-arrow-right"></i></a>
											<?php else :?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rn ajax"><span ><?php if(!empty($nastik_options['translet_opt_21'])):?><?php echo esc_html(nastik_AfterSetupTheme::return_thme_option('translet_opt_21',''));?><?php else: ?><?php esc_html_e('Back To Home','nastik');?><?php endif;?></span> <i class="fal fa-long-arrow-right"></i></a>
											<?php endif;?>
                                                    <div class="content-nav-media">
                                                        <div class="bg"  data-bg="<?php echo esc_url($nastik_image[0]);?>"></div>
                                                    </div>
											<?php } ;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--content-nav_holder end -->                         
                                </div>
                                <!-- text-block end --> 
                            </div>
                            <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
                        </section>
                        <!--section end-->
                    </div>
                    <!--content  end -->
                    <div class="limit-box fl-wrap"></div>
<?php endwhile;  endif; wp_reset_postdata(); ?>
