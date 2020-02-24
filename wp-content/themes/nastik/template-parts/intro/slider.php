<div class="hero-wrap fl-wrap full-height scroll-con-sec home-half-slider" id="sec1">
                        <!-- option-panel-->  
                        <div class="option-panel hiddec-anim">
                            <div class="swiper-counter">
                                <div id="current">01</div>
                                <div id="total"></div>
                            </div>
                            <div class="slide-progress-container">
                                <div class="slide-progress-warp">
                                    <div class="slide-progress color-bg"></div>
                                </div>
                            </div>
                        </div>
                        <!--option-panel end -->                	 
                        <!-- hero-slider-wrap --> 
                        <div class="hero-slider-wrap fl-wrap full-height">
                            <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper" >
									<?php
									$nastik_slider_text_opt = rwmb_meta( 'rnr_ns_intro_slider_gallery_slider' );
									if ( ! empty( $nastik_slider_text_opt ) ) {
									foreach ( $nastik_slider_text_opt as $nastik_slider_text_opts ) { ;?>
									
									<?php $nastik_intro_title = isset( $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_title'] ) ? $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_title'] : ''; ?>
									
									<?php $nastik_intro_subtitle = isset( $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_sub_title'] ) ? $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_sub_title'] : ''; ?>
									
									<?php $nastik_intro_buttontxt = isset( $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_button_text'] ) ? $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_button_text'] : ''; ?>
									
									<?php $nastik_intro_buttonurl = isset( $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_button_url'] ) ? $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_button_url'] : ''; ?>
									
									<?php $nastik_intro_left_cont = isset( $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_left_con'] ) ? $nastik_slider_text_opts['rnr_ns_intro_slider_gallery_slider_left_con'] : ''; ?>
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="half-hero-wrap">
                                                <div class="pr-bg"></div>
                                                <div class="pr-bg"></div>
												<?php if ( !empty( $nastik_intro_left_cont ) ) { ?>
                                                <div class="rotate_text">
												<?php echo esc_html($nastik_intro_left_cont);?>
                                                </div>
												<?php } ;?>
												<?php if ( !empty( $nastik_intro_title ) ) { ?>
                                                <h1><?php echo balanceTags($nastik_intro_title);?></h1>
												<?php } ;?>
												<?php if ( !empty( $nastik_intro_subtitle ) ) { ?>
                                                <h4><?php echo esc_html($nastik_intro_subtitle);?></h4>
												<?php } ;?>
                                                <div class="clearfix"></div>
												<?php if ( !empty( $nastik_intro_buttontxt ) ) { ?>
												<?php if ( !empty( $nastik_intro_buttonurl ) ) { ?>
                                                <a href="<?php echo esc_url($nastik_intro_buttonurl);?>" class="btn ajax  fl-btn color-bg"><?php echo esc_html($nastik_intro_buttontxt);?></a>
												<?php } ?>
												<?php } ?>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end-->
                                        <?php } } ;?>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-slider_control-wrap hiddec-anim">
                                <div class="hsc hsc-prev"><span><i class="fal fa-angle-left"></i></span> </div>
                                <div class="hsc hsc-next"><span><i class="fal fa-angle-right"></i></span></div>
                            </div>
                            <div class="hero-slider-wrap_pagination hiddec-anim"></div>
                            <div class="hero-dec  hiddec-anim"></div>
                        </div>
                        <!-- hero-slider-wrap  end--> 
                        <!-- hero-slider-img--> 
                        <div class="hero-slider-img hero-slider-wrap_halftwo">
                            <div class="sec-lines"></div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper" >
							<?php
							$nastik_slider_opt = rwmb_meta( 'rnr_ns_intro_slider_gallery_slider' );
							if ( ! empty( $nastik_slider_opt ) ) {
							foreach ( $nastik_slider_opt as $nastik_slider_opts ) { ;?>
							<?php $nastik_image_ids = isset( $nastik_slider_opts['rnr_ns_intro_slider_gallery_slider_image'] ) ? $nastik_slider_opts['rnr_ns_intro_slider_gallery_slider_image'] : array();
							foreach ( $nastik_image_ids as $nastik_image_id ) {
							$nastik_image = RWMB_Image_Field::file_info( $nastik_image_id, array( 'size' => '' ) ); ?>
								<!-- swiper-slide-->
								<div class="swiper-slide">
									<div class="bg"  data-bg="<?php echo esc_url(($nastik_image['url']));?>"></div>
									<div class="overlay"></div>
								</div>
								<!-- swiper-slide end-->
                            <?php } ?>
							<?php } } ;?>   
                                </div>
                            </div>
                        </div>
                        <!-- hero-slider-img  end--> 
                        <!-- hero  elements--> 
                        <div class="hero-border hb-top"></div>
                        <div class="hero-border hb-bottom"></div>
                        <div class="hero-border hb-right"></div>
						<?php if(get_post_meta($post->ID,'rnr_ns_intro_slider_corner_border',true)!='st2'){ ?>
                        <div class="hero-corner"></div>
                        <div class="hero-corner2"></div>
						<?php } ;?>
						<?php if (( get_post_meta($post->ID,'rnr_ns_intro_slider_scroll_button_text',true))):?>
                        <div class="scroll-down-wrap hiddec-anim">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_intro_slider_scroll_button_text',true)); ?></span>
                        </div>
						<?php endif;?>
                        <!-- hero  elements end--> 
                    </div>