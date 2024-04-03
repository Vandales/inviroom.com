<?php
/*
Template Name: Unsubscribe page
Template Post Type: post
*/
?>

<?php get_header(); ?>

	<header id="header">
        <div class="logo" id="logo-header">
            <?php the_custom_logo(); ?>
        </div>
        <button class="uppercase link--text" onclick="modal_call();"><?php the_field('link_demo_text'); ?></button>
        <a href="https://app.inviroom.com/#/login" class="uppercase link--text">Login</a>
        <a href="https://app.inviroom.com/#/registration" class="uppercase link--text">registration</a>
        <div class="language-list" style="visibility: hidden;">
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

    <section id="demoPage">

        <div class="content">
            <h2 class="uppercase"><?php the_title(); ?></h2>
            <form action="" id="unsubscribe">
                
                <div class="input-box">
                    <span>Your e-mail</span>
                    <input type="email" class="input-line" name="mail" >
                </div>
                
                <input type="submit" class="btn" value="Submit">
                <div class="successMessage" style="display: none;">You are unsubscribed from our mailing list.</div>
                <div id="errorMessage" style="display: none;">Something went wrong. Please try again later.</div>
            </form>
        </div>

    </section>

    <footer>
        <div class="logo">
            <img src="/img/logo-white.svg" alt="">
        </div>
        <div class="description">
            We bring Brands and Customers together.
        </div>
        <span>Welcome! </span>
        <button class="link--underline uppercase" onclick="modal_call();"><?php the_field('footer_button_text'); ?></button>
        <a href="https://inviroom.com/en/privacy-policy/" class="link--text">Privacy policy</a>
        <a href="https://app.inviroom.com/#/about" class="link--text">Impressum</a>
    </footer>

<?php get_footer(); ?>
