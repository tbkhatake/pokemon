<section class="plans-packages">
    <div class="streaming-carousel">
        <?php if(have_rows('carrossel_streaming')): ?>
            <div class="straming-engine">
                <?php while(have_rows('carrossel_streaming')): the_row(); ?>
                    <div class="straming-wrapper">
                        <?php
                            $streaming_image = get_sub_field('imagem_streaming');
                        ?>
                        <div class="straming-item">
                            <img src="<?= $streaming_image['url']; ?>" alt="<?= $streaming_image['alt']; ?>">
                        </div>
                    </div>
                <?php  endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>