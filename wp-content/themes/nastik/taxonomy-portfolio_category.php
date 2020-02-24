<?php $nastik_options = get_option('nastik'); ?>
<?php get_header();?>

<!--content -->
                    <div class="content dark-content portf-wrap">
                       
						<div class="fixed-top-panel fl-wrap">
                                <div class="sp-fix-header fl-wrap">
                                    <div class="scroll-down-wrap">
                                        <div class="mousey">
                                            <div class="scroller"></div>
                                        </div>
                                        <span><?php if(!empty($nastik_options['translet_opt_3'])):?><?php echo esc_html(nastik_AfterSetupTheme::return_thme_option('translet_opt_3',''));?><?php else: ?><?php esc_html_e('Scroll down  to discover','nastik');?><?php endif;?></span>
                                    </div>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ajax back-to-home-btn"><span><?php if(!empty($nastik_options['translet_opt_21'])):?><?php echo esc_html(nastik_AfterSetupTheme::return_thme_option('translet_opt_21',''));?><?php else: ?><?php esc_html_e('Back to home','nastik');?><?php endif;?></span></a>
                                </div>
                            </div>
						
                        <!--fixed-top-panel end -->
                        <!-- portfolio start -->
                        <div class="gallery-items min-pad  four-column   fl-wrap  ">
							<?php global $loop; 
							$args = array_merge( $wp_query->query, array( 'post_type' => 'portfolio', 'posts_per_page'=>-1, ) );
							query_posts( $args );
							?>	
						    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
							<?php $nastik_portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');?>
							<?php 
									$nastik_class = ""; 
									$nastik_categories = ""; 
									foreach ($nastik_portfolio_category as $nastik_item) {
									$nastik_class.=esc_attr($nastik_item->slug . ' ');
									$nastik_categories.='<a href="'.get_category_link($nastik_item->term_id).'">';
									$nastik_categories.=esc_attr($nastik_item->name . '  ');
									$nastik_categories.='</a>';
									}?>
								<?php if (has_post_thumbnail( $post->ID ) ):
								$nastik_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
                            <!-- gallery-item-->
                            <div class="gallery-item  <?php echo (get_post_meta($post->ID,'rnr_post-box-width',true)) ?> <?php echo esc_attr($nastik_class);?>">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="<?php echo esc_url($nastik_image[0]);?>"    alt="<?php the_title_attribute();?>">
								<?php if(get_post_meta($post->ID,'rnr_post-popup-option',true)=='st2'){ ?> 
								<?php if (( get_post_meta($post->ID,'rnr_post_popup_video',true))):?>
								<a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_post_popup_video',true)); ?>" class="box-media-zoom   image-popup"><i class="fal fa-play"></i></a>
								<?php endif;?>
								<?php } else { ?>
                                <a href="<?php echo esc_url($nastik_image[0]);?>" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
								<?php } ;?>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><?php echo balanceTags($nastik_categories);?></div>
                                        <div class="grid-det-item">
                                            <a href="<?php the_permalink();?>" class="ajax grid-det_link"><?php the_title();?><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <?php endif;?>
							<?php  endwhile; endif; wp_reset_postdata(); ?>                                                   
                        </div>
                        <!-- portfolio end -->
                    </div>
                    <!--content  end -->
                    <div class="limit-box fl-wrap"></div>
<?php get_footer(); ?>