<?php get_header(); ?>

	<header id="header">
        <div class="logo" id="logo-header">
            <?php the_custom_logo(); ?>
        </div>
        <button class="uppercase link--text" onclick="modal_call();"><?php the_field('link_demo_text'); ?></button>
        <a href="<?php the_field('link_login'); ?>" class="uppercase link--text"><?php the_field('link_login_text'); ?></a>
        <a href="<?php the_field('link_registration'); ?>" class="uppercase link--text"><?php the_field('link_registration_text'); ?></a>
        
            <div class="language-list">
            	<?
	            	wp_nav_menu( [
						'theme_location'  => '',
						'menu'            => 'Language menu', 
						'container'       => '', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
	        	?>
            </div>

        <div class="hamburger mobile" id="hamburger">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15">
                <rect width="3" height="3"/>
                <rect width="3" height="3" transform="translate(0 6)"/>
                <rect width="3" height="3" transform="translate(0 12)"/>
                <rect width="3" height="3" transform="translate(7)"/>
                <rect width="3" height="3" transform="translate(7 6)"/>
                <rect width="3" height="3" transform="translate(7 12)"/>
                <rect width="3" height="3" transform="translate(14)"/>
                <rect width="3" height="3" transform="translate(14 6)"/>
                <rect width="3" height="3" transform="translate(14 12)"/>
            </svg>
        </div>
        <div id="menu-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="15.556" height="16" viewBox="0 0 15.556 16">
                <path d="M13,7.828V20H11V7.828L5.636,13.192,4.222,11.778,12,4l7.778,7.778-1.414,1.414Z" transform="translate(-4.222 -4)" fill="#1a1a1a"/>
            </svg>
        </div>
    </header>
	<section class="screen--hero" style="background-image: url('<?php the_field('image_hero'); ?>');">
        
        <div class="right">
            <h1><?php the_field('title_hero'); ?></h1>
            <div class="text-l">
                <?php the_field('text_hero'); ?>
            </div>
            <!-- <div class="icon-box desktop">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                        <path d="M0,0H30V30H0Z" fill="none"/>
                        <path d="M4.5,19.25h20V5.5H4.5Zm11.25,2.5v2.5h5v2.5H8.25v-2.5h5v-2.5H3.24A1.247,1.247,0,0,1,2,20.491V4.259A1.258,1.258,0,0,1,3.24,3H25.76A1.248,1.248,0,0,1,27,4.259V20.491a1.258,1.258,0,0,1-1.24,1.259Z" transform="translate(0.5 0.75)" fill="#e0dcdb"/>
                    </svg>
                </div>
                <div class="uppercase">
                    <?php the_field('icon_text'); ?>
                </div>
            </div> -->
            <div class="item-box uppercase flexible-box desktop">
                <?
                $bulets = get_field('bulets');
                if( $bulets ): ?>
                <div class="item">
                    <div class="image">
                        <img src="../img/hero-marker.svg" alt="">
                    </div>
                    <?php echo $bulets['bulet']; ?>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="../img/hero-marker.svg" alt="">
                    </div>
                    <?php echo $bulets['bulet_2']; ?>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="../img/hero-marker.svg" alt="">
                    </div>
                    <?php echo $bulets['bulet_3']; ?>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="../img/hero-marker.svg" alt="">
                    </div>
                    <?php echo $bulets['bulet_4']; ?>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="../img/hero-marker.svg" alt="">
                    </div>
                    <?php echo $bulets['bulet_5']; ?>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="../img/hero-marker.svg" alt="">
                    </div>
                    <?php echo $bulets['bulet_6']; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="left mobile">
            <img src="<?php the_field('image_hero_mobile'); ?>" alt="">
        </div>
    </section>
    <div class="bullets mobile">
        <?
        $bulets_1 = get_field('bulets');
        if( $bulets_1 ): ?>
        <div class="item uppercase flexible-box">
            <div class="image">
                <img src="../img/hero-marker.svg" alt="">
            </div>
            <?php echo $bulets_1['bulet']; ?>
        </div>
        <div class="item uppercase flexible-box">
            <div class="image">
                <img src="../img/hero-marker.svg" alt="">
            </div>
            <?php echo $bulets_1['bulet_2']; ?>
        </div>
        <div class="item uppercase flexible-box">
            <div class="image">
                <img src="../img/hero-marker.svg" alt="">
            </div>
            <?php echo $bulets_1['bulet_3']; ?>
        </div>
        <div class="item uppercase flexible-box">
            <div class="image">
                <img src="../img/hero-marker.svg" alt="">
            </div>
            <?php echo $bulets_1['bulet_4']; ?>
        </div>
        <div class="item uppercase flexible-box">
            <div class="image">
                <img src="../img/hero-marker.svg" alt="">
            </div>
            <?php echo $bulets_1['bulet_5']; ?>
        </div>
        <div class="item uppercase flexible-box">
            <div class="image">
                <img src="../img/hero-marker.svg" alt="">
            </div>
            <?php echo $bulets_1['bulet_6']; ?>
        </div>
        <?php endif; ?>
    </div>
    <section class="screen screen--second">
        <h2>
            <?php the_field('title_second_screen'); ?>
        </h2>
        <div class="item-box">
            <div class="item">
                <?
                $item_1 = get_field('item_second_screen');
                    if( $item_1 ): ?>
                    <div class="title">
                         <?php echo $item_1['title']; ?>
                    </div>
                    <div class="plain-text">
                        <?php echo $item_1['text']; ?>
                    </div>
                    <?php endif; ?>
            </div>
            <div class="item">
                <?
                 $item_2 = get_field('item_second_screen_2');
                if( $item_2 ): ?>
                <div class="title">
                     <?php echo $item_2['title']; ?>
                </div>
                <div class="plain-text">
                    <?php echo $item_2['text']; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="item">
                <?
                 $item_3 = get_field('item_second_screen_3');
                if( $item_3 ): ?>
                <div class="title">
                     <?php echo $item_3['title']; ?>
                </div>
                <div class="plain-text">
                    <?php echo $item_3['text']; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="item">
                <?
                 $item_4 = get_field('item_second_screen_4');
                if( $item_4 ): ?>
                <div class="title">
                     <?php echo $item_4['title']; ?>
                </div>
                <div class="plain-text">
                    <?php echo $item_4['text']; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="item">
                <?
                 $item_5 = get_field('item_second_screen_5');
                if( $item_5 ): ?>
                <div class="title">
                     <?php echo $item_5['title']; ?>
                </div>
                <div class="plain-text">
                    <?php echo $item_5['text']; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="item">
                <?
                 $item_6 = get_field('item_second_screen_6');
                if( $item_6 ): ?>
                <div class="title">
                     <?php echo $item_6['title']; ?>
                </div>
                <div class="plain-text">
                    <?php echo $item_6['text']; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="screen--third">
        <h2>
             <?php the_field('title_third'); ?>
        </h2>
        <div class="image mobile">
            <img src="<?php the_field('image_third_mobile'); ?>" alt="">
        </div>
        <?php the_field('text_third'); ?>
        <div class="image desktop absolute">
            <img src="<?php the_field('image_third_desktop'); ?>" alt="">
        </div>
    </section>
    <section class="screen screen--fourth" style="background-image: url('/img/om.svg');">
        <h2>
            <?php the_field('title_forth_screen'); ?>
        </h2>
        <div class="flexible-box three-column">
            <div class="column">
            	<?
        	 	$block_1 = get_field('block_1');

        	 	if( $block_1 ): ?>
        	 		<div class="title uppercase">
	                    <?php echo $block_1['headline']; ?>
	                </div>
	                <div class="text-l">
	                    <?php echo $block_1['text']; ?>
	                </div>
        	 	<?php endif; ?>
            </div>
            <div class="column">
                <?
        	 	$block_2 = get_field('block_2');

        	 	if( $block_2 ): ?>
        	 		<div class="title uppercase">
	                    <?php echo $block_2['headline']; ?>
	                </div>
	                <div class="text-l">
	                    <?php echo $block_2['text']; ?>
	                </div>
        	 	<?php endif; ?>
            </div>
            <div class="column">
                <?
        	 	$block_3 = get_field('block_3');

        	 	if( $block_3 ): ?>
        	 		<div class="title uppercase">
	                    <?php echo $block_3['headline']; ?>
	                </div>
	                <div class="text-l">
	                    <?php echo $block_3['text']; ?>
	                </div>
        	 	<?php endif; ?>
            </div>
        </div>
    </section>
    <section class=" screen screen--fifth" style="background-image: url('<?php the_field('image_fifth_screen'); ?>');">
        <div class="text-box">
            <h2>
                <?php the_field('title_fifth_screen'); ?>
            </h2>
            <div class="plain-text">
                <?php the_field('text_fifth_screen'); ?>
            </div>
            <div class="element-box">
                <button class="btn uppercase" onclick="modal_call();"><?php the_field('button_text'); ?></button>
                <button class="btn uppercase" onclick="modal_call();"><?php the_field('button_text_2'); ?></button>
            </div>
        </div>
        <div class="image mobile">
            <img src="<?php the_field('image_fifth_screen_mobile'); ?>" alt="">
        </div>
    </section>
    <section class="screen--sixth">
        <p class="uppercase"><?php the_field('title_sixth_screen'); ?></p>
        <div class="screen">
            <div class="image">
                <!-- <?php the_field('iframe_sixth_screen'); ?> -->
                <video muted autoplay loop>
                  <source src="../img/video.mp4" type="video/mp4">
                  <source src="../img/video.webm" type="video/webm">
                </video>
            </div>
        </div>
        <figure class="desktop">
            <img src="/img/digital.svg" alt="">
        </figure>
        <div class="mobile uppercase red">Digital showroom</div>
    </section>
    <section class="screen--review">
        <div class="title screen">
            <?php the_field('title_review'); ?>
        </div>
        <div class="review-slider">
            <div class="swiper-wrapper">

            	<?php
				$stati_children = new WP_Query(array(
                  'post_type' => 'page',
                  'post_parent' => get_the_ID(),
                  'post__not_in' => [ 234, 237, 239 ]
                  )
                );


                if($stati_children->have_posts()) :
                  while($stati_children->have_posts()): $stati_children->the_post();

                    ?>

                        <div class="swiper-slide">
                            <div class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                            </div>
                            <div class="text-s">
                                <?php the_content(); ?>
                            </div>
                            <button class="link--text read-more uppercase" onClick="showReview('<?php the_ID(); ?>');"><?php the_field('text_button_review', get_queried_object_id()); ?></button>
                        </div>

                    <?
                  endwhile;
                endif; wp_reset_query();

				
            	?>
            	<script>
            		function showReview(id){

					    $('#review-'+ id).fadeIn(300);
					    $('#overlay').fadeIn(300);
					    $('body').css('overflow', 'hidden');

					};
            	</script>
            </div>
            <!-- Add Pagination -->
            <div class="slider-nav">
                <div class="swiper-prev nav-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="140.99" height="20.484" viewBox="0 0 140.99 20.484">
                        <g transform="translate(0.99 0.495)">
                            <path class="cls-1" d="M11.161,20.2,1.414,10.454,11.161.707" transform="translate(-1.414 -0.707)"/>
                            <line class="cls-1" x2="90" y2="0.045" transform="translate(0 9.748)"/>
                        </g>
                    </svg>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-next nav-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="140.99" height="20.484" viewBox="0 0 140.99 20.484">
                        <g transform="translate(140 19.989) rotate(180)">
                            <path class="cls-1" d="M11.161,20.2,1.414,10.454,11.161.707" transform="translate(-1.414 -0.707)"/>
                            <line class="cls-1" x2="90" y2="0.045" transform="translate(0 9.748)"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="pre-footer screen" id="prefooter">
        <div class="text-box">
            <h2>
                <?php the_field('prefooter_title'); ?>
            </h2>
            <div class="plain-text">
                <?php the_field('prefooter_text'); ?>
            </div>
            <button class="btn uppercase" onclick="modal_call();"><?php the_field('button_text_3'); ?></button>
        </div>
        <div class="image" style="background-image: url('<?php the_field('prefooter_image'); ?>')">
        </div>
    </section>
    <footer>
        <div class="logo">
            <img src="/img/logo-white.svg" alt="">
        </div>
        <div class="description">
            <?php the_field('footer_text'); ?>
        </div>
        <span><?php the_field('footer_text_2'); ?></span>
        <button class="link--underline uppercase" onclick="modal_call();"><?php the_field('footer_button_text'); ?></button>
        <a href="<?php the_field('footer_police_link'); ?>" class="link--text"><?php the_field('footer_police_button_text'); ?></a>
        <a href="<?php the_field('footer_legal_link'); ?>" class="link--text"><?php the_field('footer_legal_button_text'); ?></a>

    </footer>
    <div class="modal" id="modal--demo">
        <div class="close">
            <svg xmlns="http://www.w3.org/2000/svg" width="12.021" height="12.021" viewBox="0 0 12.021 12.021">
                <g transform="translate(-1173.489 -345.49)">
                    <path d="M18531,1843v16" transform="translate(-10615.041 -14060.75) rotate(45)" fill="none" stroke="#707070" stroke-width="1"/>
                    <path d="M0,0V16" transform="translate(1185.156 357.157) rotate(135)" fill="none" stroke="#707070" stroke-width="1"/>
                </g>
            </svg>
        </div>
        <div class="content">
            <h2 class="uppercase"><?php the_field('title_modal_demo'); ?></h2>
            <form action="" id="getDemo">
                <div class="input-box">
                    <span><?php the_field('name_modal_demo'); ?></span>
                    <input type="text" class="input-line" name="name">
                </div>
                <div class="input-box">
                    <span><?php the_field('phone_modal_demo'); ?></span>
                    <input type="text" class="input-line input-phone" name="phone">
                </div>
                <div class="input-box">
                    <span><?php the_field('email_modal_demo'); ?></span>
                    <input type="email" class="input-line" name="mail" >
                </div>
                <input type="submit" class="btn" value="<?php the_field('submit_modal_demo'); ?>">
                <div class="successMessage" style="display: none;"><?php the_field('sucsess_modal_demo'); ?></div>
                <div id="errorMessage" style="display: none;"><?php the_field('error_modal_demo'); ?></div>
            </form>
        </div>
    </div>

<?php get_footer(); ?>
