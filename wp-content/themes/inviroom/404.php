<?php get_header(); ?>

	<script type="text/javascript">
        window.onload = function () {
        var currentBLang = navigator.language || navigator.userLanguage;
        console.log(currentBLang);
        var login = document.getElementById('login');
        var reg = document.getElementById('reg');
        var message404 = document.getElementById('message404');
        var button404 = document.getElementById('btn404');
        
        if (currentBLang == 'ru-RU') {

        	var lang = document.querySelector('li.lang-ru');

            login.textContent = 'Войти';
            reg.textContent = 'Регистрация';
            message404.textContent = 'Ошибка 404. Похоже что-то пошло не так!';
            btn404.textContent = 'Вернуться на главную';
            btn404.setAttribute('href', '/ru/');
            langMenu.prepend(lang);

        } else {

        }

        if (currentBLang == 'de') {

        	var lang = document.querySelector('li.lang-de');

            login.textContent = 'Login';
            reg.textContent = 'Anmeldung';
            message404.textContent = 'Fehler 404. Anscheinend ist etwas schief gelaufen!';
            btn404.textContent = 'Zurück zur Hauptseite';
            btn404.setAttribute('href', '/de/');
            langMenu.prepend(lang);

        } else {

        }
    };
    </script>

	<header id="header">
        <div class="logo" id="logo-header">
            <?php the_custom_logo(); ?>
        </div>
        
        <a href="<?php the_field('link_login'); ?>" class="uppercase link--text" id="login">Login</a>
        <a href="<?php the_field('link_registration'); ?>" class="uppercase link--text" id="reg">Registration</a>
        
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
						'items_wrap'      => '<ul class="%2$s" id="langMenu">%3$s</ul>',
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

    <section class="screen page-404">
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/oops.svg" alt="">
        </div>
        <div class="uppercase" id="message404">
            Error 404. Looks like something went wrong!
        </div>
        <a href="/" class="btn uppercase" id="btn404">Back to the main page</a>
    </section>

<?php get_footer(); ?>