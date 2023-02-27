<?php
$download_bg = appto_get_redux_option('blog_download_bg_img', site_url() . '/wp-content/uploads/2022/07/bg-parallax-c.png');

$app_store = appto_get_redux_option('blog_download_appstore');
$play_store = appto_get_redux_option('blog_download_playstore');
?>

<section class="grdnt-orange">
    <div class="parallax-bg sec-pad-lg" style='background-image: url("<?php echo $download_bg['url']; ?>");' data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="section-text text-center light">
                    <h2><?php echo appto_get_redux_option('blog_download_title', 'Get Started.') ?></h2>
                    <p><?php echo appto_get_redux_option('blog_download_desc') ?></p>
                </div>
                <div class="btn-holder text-center">
                    <?php if (!empty($app_store)) { ?>
                        <a class="btn" href="<?php echo $app_store; ?>"><img alt="" src="<?php echo APPTO_ASSETS . '/image/is-badge.png'; ?>"></a>
                    <?php } ?>

                    <?php if (!empty($play_store)) { ?>
                        <a class="btn" href="<?php echo $play_store; ?>"><img alt="" src="<?php echo APPTO_ASSETS . '/image/an-badge.png'; ?>"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>