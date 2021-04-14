<div class="col-12 col-md-4">
    <div class="services-item">
        <div class="services-item-image">
            <img alt="" data-object-fit="cover" src="<?php echo get_field('services_image') ?>"/>
        </div>
        <h3 class="services-item-title">
            <?php the_title(); ?>
        </h3>
        <p class="services-item-body">
        <?php if (has_excerpt()) {
                  echo get_the_excerpt(); 
               } else {
                  echo wp_trim_words(get_the_content(), 18);
               } ?> 
        </p>
        <a href="<?php the_permalink(); ?>" class="button">Find out more</a>
    </div>
</div>