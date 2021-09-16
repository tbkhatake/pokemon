
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

<?php

function raccoon_get_quiz_data() {
    $quizpageid = intval($_GET['quizid']);
    $quiztype = $_GET['quiztype'];
    $quizz = get_field('quiz-quiz',$quizpageid);
    $quizLocalP = get_field('quiz-points',$quizpageid);
    $quizText = get_field('quiz-resp',$quizpageid);
    $quiz_buttons = get_field('quiz-buttons',$quizpageid);

    foreach($quizz as $quiz){
        $icon[] = $quiz['quiz-icon']['url'];
        $question[] = $quiz['quiz-question'];
        foreach($quiz['quiz-answers'] as $qanswers){
            $answers[] = $qanswers['quiz-answers-answer'];
            $points[] = $qanswers['quiz-answers-point'];
        }
    }
    foreach($quizLocalP as $localPoints){
        $localPointsPoints[] = $localPoints['quiz-points-qtd'];
        $localPointsDesc[] = $localPoints['quiz-points-desc'];
        $localPointsprice[] = $localPoints['quiz-points-price'];
    }
        $quizResp =  $quizText;
        $removeButton = $quiz_buttons['quiz-buttons-remove'];
        $adddButton = $quiz_buttons['quiz-buttons-add'];
        $conversionButton = $quiz_buttons['quiz-buttons-conversion'];

        $localPointsJson = [
            'pointsPoints1' =>$localPointsPoints[0],
            'pointsDesc1' => $localPointsDesc[0],
            'pointsPrice1' => $localPointsprice[0],
            'pointsPoints2' =>$localPointsPoints[1],
            'pointsDesc2' => $localPointsDesc[1],
            'pointsPrice2' => $localPointsprice[1],
            'pointsPoints3' =>$localPointsPoints[2],
            'pointsDesc3' => $localPointsDesc[2],
            'pointsPrice3' => $localPointsprice[2]
        ];
   
        $boxUnity[0] = [
            'icon' => $icon[0],
            'question' => $question[0],
            'option1' => [
                'answer' => $answers[0],
                'point' => $points[0]],
            'option2' => [
                'answer' => $answers[1],
                'point' => $points[1]],
            'option3' => [
                'answer' => $answers[2],
                'point' => $points[2]],
        ];
        $boxUnity[1] = [
            'icon' => $icon[1],
            'question' => $question[1],
            'option1' => [
                'answer' => $answers[3],
                'point' => $points[3]],
            'option2' => [
                'answer' => $answers[4],
                'point' => $points[4]],
            'option3' => [
                'answer' => $answers[5],
                'point' => $points[5]],
        ];
        $boxUnity[2] = [
            'icon' => $icon[2],
            'question' => $question[2],
            'option1' => [
                'answer' => $answers[6],
                'point' => $points[6]],
            'option2' => [
                'answer' => $answers[7],
                'point' => $points[7]],
            'option3' => [
                'answer' => $answers[8],
                'point' => $points[8]],
        ];

    for($i = 0 ; $i < 3 ; $i++){
        if($quiztype == $i){
            $response = array(
                'quiz' => $boxUnity[$i],
                'localPoints' => $localPointsJson,
                'quizResp' => $quizResp,
                'removeButton' => $removeButton,
                'addButton' => $adddButton,
                'conversionButton' => $conversionButton,
            );
        }
    }

    wp_send_json($response);
    wp_die();
}

add_action( 'wp_ajax_raccoon_get_quiz_data', 'raccoon_get_quiz_data');
add_action( 'wp_ajax_nopriv_raccoon_get_quiz_data', 'raccoon_get_quiz_data');

?>