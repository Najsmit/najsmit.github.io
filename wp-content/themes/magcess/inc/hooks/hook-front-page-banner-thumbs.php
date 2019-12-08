<?php
if (!function_exists('magcess_banner_thumbs')):
    /**
     * Ticker Slider
     *
     * @since Newsphere 1.0.0
     *
     */
    function magcess_banner_thumbs(){
        ?>

            <div class="af-main-banner-featured-posts featured-posts">
                <div class="section-wrapper">
                    <div class="small-gird-style af-container-row clearfix">
                        <?php
                        $newsphere_editors_pick_category = newsphere_get_option('select_trending_tab_news_category');
                        $featured_posts = newsphere_get_posts(2, $newsphere_editors_pick_category);
                        if ($featured_posts->have_posts()) :
                            while ($featured_posts->have_posts()) :
                                $featured_posts->the_post();
                                global $post;
                                $url = newsphere_get_freatured_image_url($post->ID, 'newsphere-medium');
                                ?>
                                <div class="col-1 pad float-l big-grid af-sec-post">
                                    <div class="read-single pos-rel">
                                        <div class="data-bg read-img pos-rel read-bg-img"
                                             data-background="<?php echo esc_url($url); ?>">
                                            <img src="<?php echo esc_url($url); ?>">
                                            <a href="<?php the_permalink(); ?>"></a>
                                            <?php newsphere_get_comments_count($post->ID); ?>
                                        </div>
                                        <div class="read-details">
	  							<span class="min-read-post-format">
		  								<?php echo newsphere_post_format($post->ID); ?>
                                        <?php newsphere_count_content_words($post->ID); ?>

                                        </span>
                                            <div class="read-categories">
                                                <?php newsphere_post_categories(); ?>
                                            </div>
                                            <div class="read-title">
                                                <h4>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h4>
                                            </div>
                                            <div class="entry-meta">
                                                <?php newsphere_post_item_meta(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>

        <!-- Editors Pick line END -->
        <?php

    }
endif;

add_action('newsphere_action_banner_thumbs', 'magcess_banner_thumbs', 10);