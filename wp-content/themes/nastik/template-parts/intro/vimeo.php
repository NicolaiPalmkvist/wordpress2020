<div class="hero-wrap fl-wrap full-height scroll-con-sec hidden-section" id="sec1" data-scrollax-parent="true">
                        <div class="media-container" data-scrollax="properties: { translateY: '30%' }">
						<?php $nastik_images = rwmb_meta( 'rnr_ns_intro_back_vimeo_video','type=image&size=' );
						foreach ( $nastik_images as $nastik_image ){ ?>
                            <div class="bg mob-bg" style="background-image: url(<?php echo esc_url(($nastik_image['url']));?>)"></div>
						<?php } ;?>
						<div class="video-mask"></div>
                        <div class="video-holder">
							<div  class="background-vimeo" data-vim="<?php echo esc_attr(get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_id',true)); ?>"> </div>
						</div>
                            <div class="overlay"></div>
                        </div>
                        <div class="half-hero-wrap">
                            <div class="pr-bg"></div>
                            <?php if(get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_right_side_con',true)!='st1'){ ?>
                <div class="rotate_text hero-decor-let">
				<?php
				$nastik_left_con = rwmb_meta( 'rnr_ns_intro_vimeo_video_rightside_con_opt' );
				if ( ! empty( $nastik_left_con ) ) {
				foreach ( $nastik_left_con as $nastik_left_cons ) { ;?>
				<?php $nastik_intro_text_left = isset( $nastik_left_cons['rnr_ns_intro_vimeo_video_con_text'] ) ? $nastik_left_cons['rnr_ns_intro_vimeo_video_con_text'] : ''; ?><?php if ( !empty( $nastik_intro_text_left ) ) { ?>
                    <div><?php echo esc_html($nastik_intro_text_left);?></div>
				<?php } ?>
				<?php } } ;?>
                </div>
				<?php } ;?>
				<?php if (( get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_title',true))):?>
				<h1><?php echo balanceTags(get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_title',true)); ?></h1>
				<?php endif;?>
				<?php if (( get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_sub_title',true))):?>
				<h4><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_sub_title',true)); ?></h4>
				<?php endif;?>
				<div class="clearfix"></div>
				<?php 
				global $nastik_buton_class;
				if(get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_button_type',true)!='st2'){
				$nastik_buton_class="custom-scroll-link";
				} ;?>
				<?php if (( get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_button_url',true))):?>
				<a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_button_url',true)); ?>" class="btn fl-btn <?php echo sanitize_html_class($nastik_buton_class);?>  color-bg"><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_button_text',true)); ?></a>
				<?php endif;?>
                        </div>
                        <!-- hero  elements  --> 
                        <div class="hero-border hb-top"></div>
                        <div class="hero-border hb-bottom"></div>
                        <div class="hero-border hb-right"></div>
                        <?php if(get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_corner_border',true)!='st2'){ ?>
				<div class="hero-corner hiddec-anim"></div>
				<div class="hero-corner2 hiddec-anim"></div>
				<div class="hero-corner3 hiddec-anim"></div>
				<?php } ;?>
				<?php if (( get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_scroll_button_text',true))):?>
				<div class="scroll-down-wrap sdw_hero hiddec-anim">
					<div class="mousey">
						<div class="scroller"></div>
					</div>
					<span><?php echo esc_html(get_post_meta($post->ID,'rnr_ns_intro_vimeo_video_scroll_button_text',true)); ?></span>
				</div>
				<?php endif;?>
                        <!-- hero  elements end--> 
                    </div>