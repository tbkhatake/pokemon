<section class="plans-packages">
    <div class="streaming-carousel">
        <?php if(have_rows('carrossel_streaming')): ?>
            <div class="streaming-engine">
                <?php while(have_rows('carrossel_streaming')): the_row(); ?>
                    <div class="streaming-wrapper">
                        <?php
                            $streaming_image = get_sub_field('imagem_streaming');
                        ?>
                        <div class="streaming-item">
                           <button class="streaming-btn" type="button">
                               <img class="streaming-image" src="<?= $streaming_image['url']; ?>" alt="<?= $streaming_image['alt']; ?>">
                            </button>
                        </div>
                    </div>
                <?php  endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="videos-section">
    <?php if(have_rows('carrossel_video')): ?>
        <div class="video-engine">
            <?php while(have_rows('carrossel_video')): the_row(); ?>
                <div class="video-slide">
                    <div class="video-wrapper">
                        <?php
                            $streaming_video = get_sub_field('video_streaming');
                            $video_title = get_sub_field('titulo_video');
                            $video_text = get_sub_field('texto_video');      
                        ?>
                        <!--
                        <video type="video/mp4" class="streaming-video" src="">

                        </video>
                        -->
                        <div class="video-area">
                            <img class="video-image" src="<?= $streaming_video['url'];?>" alt="<?= $streaming_video['alt'];?>">
                        </div>
                        <div class="video-info">
                            <p class="info-title">
                                <?= $video_title;?>
                            </p>
                            <p class="info-text">
                                <?= $video_text;?>
                            </p>
                        </div>
                    </div>
                </div> 
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>