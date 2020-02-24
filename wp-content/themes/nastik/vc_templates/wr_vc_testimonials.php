<?php

$args = array(
    	'class'=>'',
		'boxsize'=>'',
		'boxheight'=>'',
		'title'=>'',
		'iconclass'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

		
		$html .= '<div class="testimonilas-carousel-wrap fl-wrap '.$class.'">';
		$html .= '<div class="tcb-wrap">
                    <div class="tcb  tcb-prev"><i class="fas fa-caret-left"></i></div>
                    <div class="tcb  tcb-next"><i class="fas fa-caret-right"></i></div>
                  </div>';
			$html .= '<div class="testimonilas-carousel fl-wrap">';
			$html .= '<div class="swiper-container">';
			$html .= '<div class="swiper-wrapper">';
			$html .= do_shortcode($content);
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
		$html .= '<div class="tc-pagination"></div>';
		$html .= '</div>';
	


echo $html;