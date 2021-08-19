
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
?>

<?php

function raccoon_get_plans_data() {
    $pageid = intval($_GET['pageid']);
    $plantype = $_GET['plantype'];
    $sectionPlans = get_field('section2-category',$pageid);

    foreach($sectionPlans as $plans){
        $plansOptions[] = $plans['category-title'];
        $plansCards[] = $plans['section2-cards'];
    }
     $plansQuantity = count($plansOptions);

    for($i = 0 ; $i < $plansQuantity ; $i++){
        if($plantype == $plansOptions[$i]){
            foreach($plansCards[$i] as $cards){
                $featuresQuantity = count($cards['card2-features']);
                $servicesQuantity = count($cards['card2-IS']);
                for($t = 0 ; $t < $featuresQuantity ; $t++){
                    $featuresIcon[$t] = $cards['card2-features'][$t]['features-icon']['url'];
                    $featuresTitle[$t] = $cards['card2-features'][$t]['features-title'];
                }
                for($t = 0 ; $t < $servicesQuantity ; $t++){
                    $servicesIcon[$t] = $cards['card2-IS'][$t]['IS-icon']['url'];
                    $servicesLink[$t] = $cards['card2-IS'][$t]['IS-link']['url'];
                }
                
                $cardUnity[] = [
                    'mvp' => $cards['card2-mvp'],
                    'mvpDest'=>$cards['card2-mvpText'],
                    'speed' => $cards['card2-speed'],
                    'price' => $cards['card2-price'],
                    'text' => $cards['card2-text'],
                    'features' => [
                        'icon' => $featuresIcon,
                        'title' => $featuresTitle 
                    ],
                    'services' => [
                        'icon' => $servicesIcon,
                        'link' => $servicesLink
                    ],
                    'cta'=> $cards['card2-cta']
                ];
            }
        }
    }    

    for($i = 0 ; $i < $plansQuantity ; $i++){
        if($plantype == $plansOptions[$i]){
            $response = array(
                'planos' => $plansOptions[$i],
                'cards' => $cardUnity,
            );
        }
    }
    wp_send_json($response);
    wp_die();
}

add_action( 'wp_ajax_raccoon_get_plans_data', 'raccoon_get_plans_data');
add_action( 'wp_ajax_nopriv_raccoon_get_plans_data', 'raccoon_get_plans_data');

?>