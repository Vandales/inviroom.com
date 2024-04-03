<?php
/*
Template Name: Privacy Policy
Template Post Type: page
*/
?>

<?php get_header(); ?>
	<header id="header">
        <div class="logo" id="logo-header">
            <?php the_custom_logo(); ?>
        </div>
        <button class="uppercase link--text" onclick="modal_call();"><?php 
        $parent_id = get_ancestors( get_the_ID(), 'page')[0];
        the_field('link_demo_text', $parent_id );
        ?></button>
        <a href="<?php the_field('link_login', $parent_id); ?>" class="uppercase link--text"><?php the_field('link_login_text', $parent_id); ?></a>
        <a href="<?php the_field('link_registration', $parent_id); ?>" class="uppercase link--text"><?php the_field('link_registration_text', $parent_id); ?></a>
        
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

    <main class="screen police content-page">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </main>

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
            <h2 class="uppercase"><?php the_field('title_modal_demo', $parent_id); ?></h2>
            <form action="" id="getDemo">
                <div class="input-box">
                    <span><?php the_field('name_modal_demo', $parent_id); ?></span>
                    <input type="text" class="input-line" name="name">
                </div>
                <div class="input-box">
                    <span><?php the_field('phone_modal_demo', $parent_id); ?></span>
                    <input type="text" class="input-line input-phone" name="phone">
                </div>
                <div class="input-box">
                    <span><?php the_field('email_modal_demo', $parent_id); ?></span>
                    <input type="email" class="input-line" name="mail" >
                </div>
                <input type="submit" class="btn" value="<?php the_field('submit_modal_demo', $parent_id); ?>">
                <div class="successMessage" style="display: none;"><?php the_field('sucsess_modal_demo', $parent_id); ?></div>
                <div id="errorMessage" style="display: none;"><?php the_field('error_modal_demo', $parent_id); ?></div>
            </form>
        </div>
    </div>

<?php get_footer(); ?>
