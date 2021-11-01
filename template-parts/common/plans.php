<?php $cityName = $_GET['cityname'];
        $city = $_GET['city'];
        $city_args = array(
            'post_type' => 'city',
            'name' => 'sumare'   
        );
    
        $city_query = new WP_Query($city_args);
        $city_query->the_post();
?>

<?php $section2 = get_field('section2-category')?>
<?php $section2_title = get_field('section2-title')?>
<section class="plans">
<h2 class="section-title"><?php echo($section2_title); ?></h2>
    <form class="categories" action="">
        <input type="hidden" name="pageid" id="pageid" value="<?= get_the_ID()?>">
        <select class="categories-select" name="plans-categories">
            <?php foreach($section2 as $category):?>
                <option class="options" value="<?= $category['category-title']?>"><?= $category['category-title']?></option>
            <?php endforeach; ?>
        </select>
        <img class="categories-arrow" src="<?=get_template_directory_uri()?>/images/down-arrow-mobile.svg" alt="seta para baixo">   
    </form>

    <form class="categories-desk" action="">
        <input type="hidden" name="pageid" value="<?= get_the_ID()?>">
        <div class="categories-desk-select" name="plans-categories">
            <?php foreach($section2 as $category):?>
                <p role="button" class="desk-options" plan="<?= $category['category-title']?>"><?= $category['category-title']?></p>
            <?php endforeach; ?>
        </div>
    </form>
    
    <div class="cards-wrapper">
        <div class="plans-slider #tns3">
            <?php foreach($section2[0]['section2-cards'] as $card):?>
                <?php if ($card['card2-mvp'] == 1){?>
                    <div class="card-outside">
                        <div class="card card-active">
                            <div class="card-dest"><?= $card['card2-mvpText']?></div>
                            <h3 class="card-speed"><?= $card['card2-speed']?></h3>
                            <p class="card-price"><?= $card['card2-price']?></p>
                            <p class="card-text"><?= $card['card2-text']?></p>
                            <span class="card-redline"> </span>
                            <div class="features-wrapper">                
                                <?php foreach($card['card2-features'] as $features):?>
                                    <div class="feature">
                                        <div class="icon-space">
                                            <img class="feature-icon" src="<?= $features['features-icon']['url']?>" alt="">
                                        </div>
                                        <p class="feature-title"><?= $features['features-title']?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <p class="services-title">Serviços inclusos</p> 
                            <div class="services-wrapper"> 
                                <div class="services-IS">
                                    <?php foreach($card['card2-IS'] as $servicesKey => $services):?>
                                        <?php if($servicesKey <= 3):?>
                                            <a class="IS-link" href="<?= $services['IS-link']?>"><img class="IS-icon" src="<?= $services['IS-icon']['url']?>" alt=""></a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php if($servicesKey > 3):?>
                                        <p class="services-plus-button">+<?=$servicesKey-3?></p>
                                    <?php else:?>
                                        <p class="services-plus-button"></p>
                                    <?php endif?>
                                </div>
                                <div class="services-plus">
                                <?php foreach($card['card2-IS'] as $servicesKey => $services):?>
                                    <?php if($servicesKey > 3):?>
                                        <a class="IS-link" href="<?= $services['IS-link']?>"><img class="IS-icon" src="<?= $services['IS-icon']['url']?>" alt=""></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                </div>
                            </div>  
                            <a class="cta" href="<?= $card['card2-cta']['url']?>"><?= $card['card2-cta']['title']?> </a>
                            <a class="more-info" href="<?=$card['card2-moreInfo']['url']?>"><?= $card['card2-moreInfo']['title']?></a>
                        </div>
                    </div>
                <?php }else{ ?>   
                    <div class="card-outside">
                        <div class="card">
                            <?php if($card['card2-mvpText']):?>
                                <div class="card-dest"><?= $card['card2-mvpText']?></div>
                            <?php endif;?>
                            <h3 class="card-speed"><?= $card['card2-speed']?></h3>
                            <p class="card-price"><?= $card['card2-price']?></p>
                            <p class="card-text"><?= $card['card2-text']?></p>
                            <span class="card-redline"> </span>
                            <div class="features-wrapper">                
                                <?php foreach($card['card2-features'] as $features):?>
                                    <div class="feature">
                                        <div class="icon-space">
                                            <img class="feature-icon" src="<?= $features['features-icon']['url']?>" alt="">
                                        </div>
                                        <p class="feature-title"><?= $features['features-title']?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <p class="services-title">Serviços inclusos</p> 
                            <div class="services-wrapper"> 
                                <div class="services-IS">
                                    <?php foreach($card['card2-IS'] as $servicesKey => $services):?>
                                        <?php if($servicesKey <= 3):?>
                                            <a class="IS-link" href="<?= $services['IS-link']?>"><img class="IS-icon" src="<?= $services['IS-icon']['url']?>" alt=""></a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php if($servicesKey > 3):?>
                                        <p class="services-plus-button">+<?=$servicesKey-3?></p>
                                    <?php else:?>
                                        <p class="services-plus-button"></p>
                                    <?php endif?>
                                </div>
                                <div class="services-plus">
                                    <?php foreach($card['card2-IS'] as $servicesKey => $services):?>
                                        <?php if($servicesKey > 3):?>
                                            <a class="IS-link" href="<?= $services['IS-link']?>"><img class="IS-icon" src="<?= $services['IS-icon']['url']?>" alt=""></a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>  
                            <a class="cta" href="<?= $card['card2-cta']['url']?>"><?= $card['card2-cta']['title']?> </a>
                            <a class="more-info" href="<?=$card['card2-moreInfo']['url']?>"><?= $card['card2-moreInfo']['title']?></a>
                        </div> 
                    </div>
                <?php } ?> 
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata();?>
<div class="plans-graph">
    <img class="plans-graph-img-1" src="<?=get_template_directory_uri()?>/images/plans-graph1.svg" alt="graphismo">
    <img class="plans-graph-img-2" src="<?=get_template_directory_uri()?>/images/plans-graph2.svg" alt="graphismo">
</div>
