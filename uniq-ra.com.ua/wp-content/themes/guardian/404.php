<?php get_header(); ?>
<?php if (pll_current_language() === 'ru'){
    $lang = true;
} else {
    $lang = false;
}?>
<div class="clearfix"></div>
<div id="main-content" class="content_fullwidth not_found">
    <div class="container">
        <div class="nf-wrap">
            <img class="nf-img" src="<?php echo bloginfo('template_url'); ?>/images/sorry_02.png" alt="Page not found" />
            <div>
                <span class="nf-title">
                    <?php
                    if ($lang) {
                        echo('Страница не найдена');
                    } else {
                        echo('Сторінка не знайдена');
                    }
                    ?>
                </span>
                <span class="nf-bold">
                    <?php
                    if ($lang) {
                        echo('Приносим свои извинения!');
                    } else {
                        echo('Приносимо свої вибачення!');
                    }
                    ?>
                </span>
            </div>
        </div>
        <span class="nf-bold">
            <?php
            if ($lang) {
                echo('Что делать?');
            } else {
                echo('Що робити далі?');
            }
            ?>
        </span>
        <?php if ($lang) { ?>
            <span class="please_choose">Пожалуйста, перейдите <a href="<?php echo esc_url(home_url( '/' )); ?>">на главную</a> или <a href="#" onclick="history.back();return false;">вернитесь назад</a></span>
            <p>Получите всю информацию по:</p><p class="b-tel"><i class="fa fa-phone" aria-hidden="true"></i>(067) 431 80 88</p><p class="b-email"><i class="fa fa-envelope" aria-hidden="true"></i>uniq.ada@gmail.com</p>
        <?php } else { ?>
            <span class="please_choose">Будь-ласка, перейдіть <a href="<?php echo esc_url(home_url( '/' )); ?>">на головну</a> чи поверніться <a href="#" onclick="history.back();return false;">на попередню сторінку</a></span>
            <p>Отримайте всю інформацію за:</p><p class="b-tel"><i class="fa fa-phone" aria-hidden="true"></i>(067) 431 80 88</p><p class="b-email"><i class="fa fa-envelope" aria-hidden="true"></i>uniq.ada@gmail.com</p>
        <?php } ?>

    </div>
</div>

<?php get_footer();?>