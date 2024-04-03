
    <?php
                $stati_modal = new WP_Query(array(
                  'post_type' => 'page',
                  'post_parent' => get_the_ID()
                  )
                );


                if($stati_modal->have_posts()) :
                  while($stati_modal->have_posts()): $stati_modal->the_post();

                    ?>
                        <div class="modal modal--review" id="review-<?php echo get_the_ID(); ?>">
                            <div class="close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.021" height="12.021" viewBox="0 0 12.021 12.021">
                                    <g transform="translate(-1173.489 -345.49)">
                                        <path d="M18531,1843v16" transform="translate(-10615.041 -14060.75) rotate(45)" fill="none" stroke="#707070" stroke-width="1"/>
                                        <path d="M0,0V16" transform="translate(1185.156 357.157) rotate(135)" fill="none" stroke="#707070" stroke-width="1"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $stati_modal->ID ); ?>);">
                                </div>
                                <div class="text-s">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?
                    endwhile;
                endif; wp_reset_query();

                
                ?>

    <div id="overlay"></div>


<?php wp_footer(); ?>
    <script>
        function modal_call() {
            event.preventDefault();
            $('#modal--demo').fadeIn(300);
            $('#overlay').fadeIn(300);
            $('body').css('overflow', 'hidden');
        }

        /* Form Get a Demo submit */

        $('#getDemo').submit(function (event) {

            event.preventDefault();

            var form = $('#getDemo');
            var errorContainer = $('#errorMessage');
            var successContainer = $('.successMessage');
            var name = form.find('input[name="name"]');
            var phone = form.find('input[name="phone"]');
            var mail = form.find('input[name="mail"]');
            var errorMessage = '';
            var data = null;

            if(name.val().length === 0) {
                errorMessage += 'true';
            }

            if(phone.val().length === 0) {
                errorMessage += 'true';
            }

            if(mail.val().length === 0) {
                errorMessage += 'true';
            }

            if(errorMessage.length > 0) {

                errorContainer.fadeIn(300);
                setTimeout(function () {
                        errorContainer.fadeOut(300);
                    }, 3000);

            } else {
                
                errorContainer.hide();

                $.ajax({
                    type: 'POST',
                    url: '<?php echo admin_url("admin-ajax.php") ?>',
                    data: {
                        action: 'mail',
                        name: name.val(),
                        phone: phone.val(),
                        mail: mail.val(),
                        submit: true
                    }
                }).done(function () {

                    successContainer.fadeIn(300);

                    setTimeout(function () {
                        successContainer.fadeOut(300);
                        $('#modal--demo').fadeOut(300);
                        $('#overlay').fadeOut(300);
                    }, 3000);
                }).fail(function () {

                    errorContainer.html('Что-то пошло не так, попробуйте еще раз!');
                    errorContainer.fadeIn(300);

                    setTimeout(function () {
                        errorContainer.fadeOut(300);
                    }, 3000);
                });
            }
        });

        /* Form Unsubscribe submit */

        $('#unsubscribe').submit(function (event) {

            event.preventDefault();

            var formUn = $('#unsubscribe');
            var errorContainer = $('#errorMessage');
            var successContainer = $('.successMessage');
            var mail = formUn.find('input[name="mail"]');
            var errorMessage = '';
            var data = null;

            if(mail.val().length === 0) {
                errorMessage += 'true';
            }

            if(errorMessage.length > 0) {

                errorContainer.fadeIn(300);
                setTimeout(function () {
                        errorContainer.fadeOut(300);
                    }, 3000);

            } else {
                
                errorContainer.hide();

                $.ajax({
                    type: 'POST',
                    url: '<?php echo admin_url("admin-ajax.php") ?>',
                    data: {
                        action: 'unsubscribe',
                        mail: mail.val(),
                        submit: true
                    }
                }).done(function () {

                    successContainer.fadeIn(300);

                    setTimeout(function () {
                        successContainer.fadeOut(300);
                        $('#modal--demo').fadeOut(300);
                        $('#overlay').fadeOut(300);
                    }, 3000);
                }).fail(function () {

                    errorContainer.html('Что-то пошло не так, попробуйте еще раз!');
                    errorContainer.fadeIn(300);

                    setTimeout(function () {
                        errorContainer.fadeOut(300);
                    }, 3000);
                });
            }
        });
    </script>

</body>
</html>
