<!-- Front page news -->
<div id="front-page-news" class="front-page-news">
    <div class="solid-section flexible-widgets widget-area fadeup-effect widget-halves fadeInUp">
        <div class="wrap">
            <section class="widget widget_text widget_custom_html">
                <div class="widget_text widget-wrap">
                    <h3 class="widgettitle widget-title">News</h3>
                </div>
            </section>
            <section class="widget widget_text">
                <div class="widget_text widget-wrap">
                <h3>Email Newsletter Signup</h3>
                <p>Sign up below to receive all of our news posts via email:</p>
                <?php
                gravity_form(3,false,false);
                ?>
                </div>
            </section>
            <section class="widget widget_text">
                <div class="widget_text widget-wrap">
                    <h3>Recent Posts</h3>
                    <ul class="post-list">
                    <?php
                    $args = [
                        'posts_per_page' => 5,
                    ];
                    $posts_array = get_posts( $args );
                    foreach( $posts_array as $post ) : setup_postdata( $post ); ?>
                    <li><a href="<?= the_permalink() ?>"><?= the_title() ?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>