<div class="hero-wrap fl-wrap full-height scroll-con-sec hidden-section" id="sec1" data-scrollax-parent="true">
                        <!--ms-container-->
                        <div class="multi-slideshow_fs ms-container fl-wrap full-height" data-scrollax="properties: { translateY: '30%' }">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
								<?php $nastik_images = rwmb_meta( 'rnr_ns_intro_back_slideshow_image','type=image&size=' );
								foreach ( $nastik_images as $nastik_image ){ ?>
                                    <!--ms_item-->
                                    <div class="swiper-slide">
                                        <div class="ms-item_fs fl-wrap">
                                            <div class="bg par-elem"  data-bg="<?php echo esc_url(($nastik_image['url']));?>"  ></div>
                                            <div class="overlay"></div>
                                        </div>
                                    </div>
                                    <!--ms_item end-->
                                <?php } ;?>    
                                </div>
                            </div>
                        </div>
                        <!--ms-container end-->                     
                        <div class="half-hero-wrap">
                            <div class="pr-bg"></div>
                            <?php if(get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_right_side_con',true)!='st1'){ ?>
                <div class="rotate_text hero-decor-let">
				<?php
				$nastik_left_con = rwmb_meta( 'rnr_ns_intro_slideshow_image_rightside_con_opt' );
				if ( ! empty( $nastik_left_con ) ) {
				foreach ( $nastik_left_con as $nastik_left_cons ) { ;?>
				<?php $nastik_intro_text_left = isset( $nastik_left_cons['rnr_ns_intro_slideshow_image_con_text'] ) ? $nastik_left_cons['rnr_ns_intro_slideshow_image_con_text'] : ''; ?><?php if ( !empty( $nastik_intro_text_left ) ) { ?>
                    <div><?php echo esc_html($nastik_intro_text_left);?></div>
				<?php } ?>
				<?php } } ;?>
                </div>
				<?php } ;?>
				<?php if (( get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_title',true))):?>
				<h1><?php echo balanceTags(get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_title',true)); ?></h1>
				<?php endif;?>
				<?php if (( get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_sub_title',true))):?>
				<h4><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_sub_title',true)); ?></h4>
				<?php endif;?>
				<div class="clearfix"></div>
				<?php 
				global $nastik_buton_class;
				if(get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_button_type',true)!='st2'){
				$nastik_buton_class="custom-scroll-link";
				} ;?>
				<?php if (( get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_button_url',true))):?>
				<a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_button_url',true)); ?>" class="btn fl-btn <?php echo sanitize_html_class($nastik_buton_class);?>  color-bg"><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_button_text',true)); ?></a>
				<?php endif;?>
                        </div>
                        <!-- hero  elements  --> 
                        <div class="hero-border hb-top"></div>
                        <div class="hero-border hb-bottom"></div>
                        <div class="hero-border hb-right"></div>
                        <?php if(get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_corner_border',true)!='st2'){ ?>
						<div class="hero-corner hiddec-anim"></div>
						<div class="hero-corner2 hiddec-anim"></div>
						<div class="hero-corner3 hiddec-anim"></div>
						<?php } ;?>
						<?php if (( get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_scroll_button_text',true))):?>
						<div class="scroll-down-wrap sdw_hero hiddec-anim">
							<div class="mousey">
								<div class="scroller"></div>
							</div>
							<span><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_intro_slideshow_image_scroll_button_text',true)); ?></span>
						</div>
						<?php endif;?>
                        <!-- hero  elements end--> 
                    </div>