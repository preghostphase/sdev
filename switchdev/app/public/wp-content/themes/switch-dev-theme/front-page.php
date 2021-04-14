<?php get_header(); ?>

<!-- Banner markup to go here -->
<?php get_template_part( 'templates/parts/banner'); ?>

<!-- Main page content -->
<main id="primary" class="content">
    <section class="flexblock __about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="about">
                    <h2 class="about-title">Who we are.</h2>
                    <p class="about-body">We’re an integrated design, brand and digital communications business and for over 30 years we’ve dedicated ourselves to helping our clients communicate effectively, so that they position themselves with clarity, engage more closely with their audiences, sell more of what they do and successfully grow or transform their businesses.</p>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flexblock __imagetext">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="imagetext">
                        <div class="imagetext-col __image">
                            <div class="imagetext-col-image">
                                <img alt="" data-object-fit="cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/imagetext.jpg"/>
                            </div>
                        </div>
                        <div class="imagetext-col">
                            <div class="imagetext-col-body">
                                <h2 class="imagetext-col-body-title">Some of our clients.</h2>
                                <p class="imagetext-col-body-bodytext">We’re an integrated design, brand and digital communications business and for over 30 years we’ve dedicated ourselves to helping our clients communicate effectively, so that they position themselves with clarity.</p>
                                <p class="imagetext-col-body-bodytext">Engage more closely with their audiences, sell more of what they do and successfully grow or transform their businesses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="services">
        <div class="container-fluid">
            <div class="row">
                <?php
                $homepageServices = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'service',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC'
                ));
            
                while ($homepageServices->have_posts()) {
                $homepageServices->the_post(); 
                get_template_part('templates/parts/serviceitem', 'service');
                } wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
