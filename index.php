<?php get_header(); ?>
    <!---- Start Contenteara --->
    <div class="row">
        <div class="col-lg-9 pull-left">
            <!------ Start Slider Top ------->
            <?php get_template_part('page-templates/Slider'); ?>
            <!------ End Slider Top ------->
            <div class="row">
                <div class="col-xs-12">
                    <div class="titlemain">
                        <h3>جدید ترین محصولات </h3>
                    </div>
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 9,
                    );
                    $my_query = new WP_Query($args);
                    while ($my_query->have_posts()):
                        $my_query->the_post();
                        $do_not_duplicate = $post->ID; ?>

                        <div class="col-xs-12 col-sm-4">
                            <div class="productbox">
                                <?php the_post_thumbnail('productpicture'); ?>
                                <h2><?php the_title(); ?></h2>
                                <span>قیمت : <?php if ($price_html = $product->get_price_html()) : ?>
                                        <?php echo $price_html; ?>
                                    <?php endif; ?>
                                </span>
                                <a href="<?php the_permalink(); ?>" class="add_to_cart">اطلاعات بیشتر </a>
                            </div>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata(); ?>

                </div>
            </div>
            <div class="otherproduct">
                <a href="shop">مشاهده همه محصولات</a>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    </div>
<?php get_footer(); ?>