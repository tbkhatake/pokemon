<?php
$city_args = array(
    'post_type' => 'city',
    'posts_per_page' => -1
);

$city_query = new WP_Query($city_args);
?>

<?php
    $first_city_name = "";
    $first_city_phone = "";
    $first_city_adress = "";
    $first_city_link = "";
    $first_city_code = "";
    $map_selector = "";
?>

<section class="map-section">
    <div class="graphism-wrapper">
        <img src="<?=get_template_directory_uri()?>/assets/map-graphism.svg">
    </div>
    <div class="container">
        <?php
            $mapTitle = get_field('titulo_mapa');
        ?>
        <h2 class="map-title"><?= $mapTitle ?></h2>
        <div class="map-content">
            <select name="" id="cities">
                <?php
                    $index = 0;
                ?>
                <?php while ($city_query->have_posts()): $city_query->the_post(); ?>
                    <?php
                        if($index == 0){
                            $first_city_name = get_the_title();
                            $first_city_phone = get_field('city_phone');
                            $first_city_adress = get_field('city_adress');
                            $first_city_link = get_field('link_mapa')['url'];
                            $first_city_code = get_field('city_code');
                        }
                        $city_name = get_the_title();
                        $city_code = get_field("city_code");
                    ?>
                    <option value="<?= $city_code; ?>"><?= $city_name; ?></option>
                <?php $index++; endwhile; ?>
            </select>
            <img class="categories-arrow" src="<?=get_template_directory_uri()?>/images/down-arrow-mobile.svg" alt="seta para baixo">
            
            <style>
                <?php while ($city_query->have_posts()): $city_query->the_post(); ?>
                        <?php
                            $city_code = get_field("city_code");
                            $mun_effect = '#'.'mun_'.$city_code.':hover';
                            $mun_style = '#'.'mun_'.$city_code;
                            $style = $mun_style.'{
                                fill: #F9B700;
                                cursor: pointer;
                            }';
                            $effect = $mun_effect.'{
                                fill: #c3000a;
                                stroke: #f9b700 !important;
                                stroke-width: 200px;
                            }';
                            $map_selector = $map_selector . $style;
                            $map_hover = $map_hover . $effect;
                        ?>
                <?php endwhile; ?>
                <?= $map_selector ?>
                <?= $map_hover ?>
            </style>
            
            <?= $cities_ids; ?>
            <div class="city-info">
                <p class="city-name" id=cityName><?= $first_city_name ?></p>
                <p class="city-phone" id=cityPhone><?= $first_city_phone ?></p>
                <p class="city-adress" id=cityAdress><?= $first_city_adress ?></p>
                <div class="cta-wrapper">
                <?php
                    $mapUrl = get_field("link_mapa");
                ?>
                    <a id="cityLink" href="<?= $first_city_link; ?>" class="map-link">Veja o plano ideal para você</a>
                </div>
                
                
            </div>
           
            <div class="map-wrapper">
                <style>
                        #mun_<?= $first_city_code ?> {
                            fill: #c3000a;
                        }
                </style>
                <?=
                    file_get_contents(get_template_directory_uri() . "/assets/map.svg");
                ?>
            </div> 
        </div>
    </div>
    <script>
        <?php $cities_ids = ""; $index = 0; while ($city_query->have_posts()): $city_query->the_post(); ?>
            <?php
                $city_code = get_field("city_code");
                if($index == $city_query->post_count - 1){
                    $cities_ids = $cities_ids . '"mun_' . $city_code . '"';
                    
                }else{
                    $cities_ids = $cities_ids . '"mun_' . $city_code . '",';
                }
            ?>

        <?php $index++; endwhile; ?>
        let citiesIds = [<?= $cities_ids; ?>];
        let selectLocal = document.getElementById("cities");
        citiesIds.map ((city, index) => {
            
            let cityElement = document.getElementById(city);
            cityElement.setAttribute("index", index);
            cityElement.addEventListener('click', (event) => {
                let munId = event.target.id;
                let munCode = munId.slice(4);
                fetchCityData(munCode);
                document.querySelector('#cities [value = "'+ munCode + '"]').selected = true;
            })
        })
    </script>
</section>
