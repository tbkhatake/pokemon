<?php 

function raccoon_get_city_data() {
    $city = $_GET['city'];

    $city_args = array(
        'post_type' => 'city',
        'meta_query' => array(
            array(
                'key'     => 'city_code',
                'value'   => $city
            ),
        ),
    );

    
    $city_query = new WP_Query($city_args);
    $city_query->the_post();
    
    $city_phone = get_field("city_phone");
    $city_name = get_the_title();
    $city_code = get_field("city_code");

    $response = array(
        "cityPhone" => $city_phone,
        "cityName" => $city_name
    );
   
    wp_send_json_success( $response, 200);
    
    wp_die();
}

add_action( 'wp_ajax_raccoon_get_city_data', 'raccoon_get_city_data' );
add_action( 'wp_ajax_nopriv_raccoon_get_city_data', 'raccoon_get_city_data' );

?>

<?php
    $mapTitle = get_field('titulo_mapa');
?>

<section class="map-section">
    <div class="container">
        <h2 class="map-title"><?= $mapTitle ?></h2>
        <div class="map-wrapper">
            <select name="" id="cities">
                <?php while ($city_query->have_posts()): $city_query->the_post(); ?>
                    <option value="<?= $city_code; ?>"><?= $city_name; ?></option>
                <?php endwhile; ?>
            </select>
            <p id=cityName><?= $city_name ?></p>
            <p id=cityPhone><?= $city_phone ?></p>
        </div>
    </div>
</section>
