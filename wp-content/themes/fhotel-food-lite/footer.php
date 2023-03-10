<?php

/**
 * footer Template.
 *
 * @package fhotel-food-lite
 */
?>
<?php
$fhotel_food_lite_copyright = get_theme_mod('fhotel_food_lite_copyright');
$fhotel_food_lite_design    = get_theme_mod('fhotel_food_lite_design');
?>
<?php if ($fhotel_food_lite_copyright || $fhotel_food_lite_design) { ?>
    <div class="footer-bottom">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-lg-6 col-md-6 copyrightcol">
                    <div class="copyright text-right">
                        <?php if (get_theme_mod('fhotel_food_lite_copyright')) { ?>
                            <?php echo esc_html($fhotel_food_lite_copyright); ?>
                        <?php } ?>
                    </div>
                    <!--copyright-->
                </div>

                <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12 designcol">
                    <div class="design text-left">
                        <?php if (get_theme_mod('fhotel_food_lite_design')) { ?>
                            <?php echo ' - '.esc_html($fhotel_food_lite_design); ?>
                        <?php } ?>
                    </div>
                    <!--design-->
                </div>
                <!--col-sm-6-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--footer-bottom-->
<?php }
?>
<?php wp_footer(); ?>
</body>

</html>