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
    $city_link = get_field("link_mapa");
    $city_phone = get_field("city_phone");
    $city_adress = get_field("city_adress");
    $city_name = get_the_title();
    $city_code = get_field("city_code");

    $response = array(
        "cityPhone" => $city_phone,
        "cityAdress" => $city_adress,
        "cityName" => $city_name,
        "cityCode" => $city_code,
        "cityLink" => $city_link['url']
    );
   
    wp_send_json_success( $response, 200);
    
    wp_die();
}

add_action( 'wp_ajax_raccoon_get_city_data', 'raccoon_get_city_data' );
add_action( 'wp_ajax_nopriv_raccoon_get_city_data', 'raccoon_get_city_data' );

