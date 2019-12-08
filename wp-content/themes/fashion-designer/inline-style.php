<?php
	/*------------------------------ Global First Color -----------*/

	$fashion_designer_first_color = get_theme_mod('fashion_designer_first_color');

	$custom_css = '';

	if($fashion_designer_first_color != false){
		$custom_css .='.left-bg, .right-bg, #slider .more-btn a:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer .tagcloud a:hover, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #sidebar .custom-social-icons i:hover, #footer .custom-social-icons i:hover, .scrollup, #footer-2, input[type="submit"], .more-btn a, #sidebar h3, .pagination .current, .pagination a:hover, #sidebar .tagcloud a:hover, #comments input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .scrollup i, .toggle-nav i, #comments a.comment-reply-link{';
			$custom_css .='background-color: '.esc_html($fashion_designer_first_color).';';
		$custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$custom_css .='#footer li a:hover, .post-main-box:hover h3, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .entry-content a, .post-main-box:hover h3 a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #footer .textwidget p a{';
			$custom_css .='color: '.esc_html($fashion_designer_first_color).';';
		$custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$custom_css .='#slider .more-btn a:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer .tagcloud a:hover, #sidebar .tagcloud a:hover{';
			$custom_css .='border-color: '.esc_html($fashion_designer_first_color).';';
		$custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$custom_css .='.main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($fashion_designer_first_color).';';
		$custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$custom_css .='.main-navigation ul ul, .header-fixed{';
			$custom_css .='border-bottom-color: '.esc_html($fashion_designer_first_color).';';
		$custom_css .='}';
	}

	/*------------------------------ Global Second Color -----------*/

	$fashion_designer_second_color = get_theme_mod('fashion_designer_second_color');

	if($fashion_designer_second_color != false){
		$custom_css .='a, .icon-ctr i, .info-ctr i, .info-ctr p, .search-box i, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #sidebar ul li a:hover{';
			$custom_css .='color: '.esc_html($fashion_designer_second_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'fashion_designer_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page .home-page-header{';
			$custom_css .='width: 97.4%;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page .home-page-header{';
			$custom_css .='width: 97.7%;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'fashion_designer_slider_opacity_color','0.4');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'fashion_designer_slider_content_option','Center');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'fashion_designer_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.post-main-box{';
			$custom_css .='';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .post-main-box .more-btn{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.post-info{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.post-main-box .more-btn{';
			$custom_css .='margin-top:25px;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin:15px auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Left'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .post-main-box .more-btn, #our-services p{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.post-main-box .more-btn{';
			$custom_css .='margin:20px 0;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin-bottom:10px;';
		$custom_css .='}';
		$custom_css .='.post-main-box h2{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
	}
	