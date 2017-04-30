<?php
/*
 Template Name: Home page Main
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
$ajax_nonce = wp_create_nonce("my-special-string");
?>

    <?php get_header(); ?>

        <div id="content">
            <!--         Главная страница-->
            <div class="page active" id="page_0">
                <div class="page-content">
                    <?php   $postId = 69;
                $post = get_post($postId); 
                $content = do_shortcode($post->post_content);
                echo ($content) ?>
                </div>
                <div class="mslogo">
                    <img src="http://school.mosswimming.ru/wp-content/uploads/2017/04/mslogo.png" height="127px" />
                    <div class="mslogo__text">при поддержке
                        <br/> ФЕДЕРАЦИИ ПЛАВАНИЯ
                        <br/> ГОРОДА МОСКВЫ
                        <br/>
                    </div>
                </div>
                <div class="evgenText">
                    <p class="evgenText__text">Я считаю, что любой ребёнок имеет достаточно таланта, чтобы стать чемпионом в будущем, просто нужно ему в этом помочь...</p>
                    <a href="#" class="evgenText__link">Читать полностью</a>
                </div>
            </div>

            <!--            О клубе-->
            <div class="page" id="page_about">
                <!--                <div class="page-content"></div>-->
                <div class="part part_object" data-link="page_about_object">
                    <div class="part__icon"><img src="wp-content/themes/bones/library/images/svg/pool.svg" width="62px" height="62px" /></div>

                    <div class="part__name">Спортивный объект</div>

                </div>
                <div class="part part_trainer" data-link="page_about_trainer">
                    <div class="part__icon"><img src="wp-content/themes/bones/library/images/svg/trainer.svg" width="62px" height="62px" /></div>
                    <div class="part__name">Тренерский состав</div>
                </div>
                <div class="part part_methods" data-link="page_about_methods">
                    <div class="part__icon"><img src="wp-content/themes/bones/library/images/svg/methods.svg" width="62px" height="62px" /></div>

                    <div class="part__name">Методика тренировок</div>

                </div>

            </div>

            <div class="page"  id="page_about_object">
                <div class="page-content"></div>
            </div>

            <div class="page"  id="page_about_trainer">
                <div class="page-content grid-2-3 fl"></div>
                <div class="page__image grid-1-3 fr" style="background-image: url('<?php echo(get_post_meta( 83, 'image_url', true ))?>')"></div>
            </div>
            
            <div class="page"  id="page_about_methods">
                <div class="page-content"></div>
            </div>

            <div class="page" id="page_news">
                <div class="page-content"></div>
            </div>

        </div>


        <?php wp_footer(); ?>

            </body>

            </html>
            <!-- end of site. what a ride! -->