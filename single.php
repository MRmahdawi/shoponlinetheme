<?php get_header(); ?>
    <!---- Start Contenteara --->
    <div class="row">
        <div class="col-lg-9 pull-left">
            <div class="row">
                <div class="col-xs-12">
                    <div class="titlemain">
                        <p>
                            <?php woocommerce_breadcrumb();  ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="archive">
                        <h3><?php the_title(); ?></h3>
                        <span>این مقاله در تاریخ :  <?php the_time('j F Y'); ?> منتشر شد</span>
                        <span>نام نویسنده : <?php the_author(', ') ?></span>
                        <div class="sps"></div>
                        <?php the_content(__('')); ?>
                        <h3>نظرات ثبت شده</h3>
                        <div class="sps"></div>
                        <?php comments_template(); ?>
                    </div>

                    <?php endwhile; else: ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
      <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
