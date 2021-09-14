<?php $quiz_title = get_field('quiz-title')?>
<?php $quiz = get_field('quiz-quiz')?>
<?php $quiz_main_icon = get_field('quiz-main-icon')?>
<?php $quiz_main_question = get_field('quiz-main-question')?>
<?php $quiz_main_button = get_field('quiz-main-button')?>
<?php $quiz_buttons = get_field('quiz-buttons')?>

<section class="quiz">
    <h2 class="section-title"><?php echo($quiz_title); ?></h2>
    <div class="img-desk">
        <span class="span span-1"></span>
        <img class="img img-1" src="<?=get_template_directory_uri()?>/images/internet/multitech.svg">
        <img class="line line-2" src="<?=get_template_directory_uri()?>/images/internet/left-line.svg">
        <img class="img img-2" src="<?=get_template_directory_uri()?>/images/internet/house.svg">
        <img class="line line-3" src="<?=get_template_directory_uri()?>/images/internet/right-line.svg">
        <img class="img img-3" src="<?=get_template_directory_uri()?>/images/internet/notegamer.svg">
        <span class="span span-2"></span>
    </div>
    <form action="" >
    <input type="hidden" name="quizid" id="quizid" value="<?=get_the_ID()?>">
        <div class="quiz-wrapper">
            <div class="img-mobile">
                <img class="mobImg" src="<?=$quiz_main_icon['url'];?>" alt="Ícone">
            </div>
            <div class="quiz-box">
                <p class="start-question"><?=$quiz_main_question;?></p>
                <span class="redline"></span>
                <p class="start-button"><?=$quiz_main_button;?></p>
            </div>
        </div>
    </form>
    <div class="result">
        <div class="result-wrapper">
            <div class="megaAdc">
            </div>
            <img class="img-plus" src="<?=get_template_directory_uri()?>/images/internet/plus.png" alt="sinal de soma">
            <div class="pontosAdc">
            </div>
            <img class="img-equal" src="<?=get_template_directory_uri()?>/images/internet/equals.png" alt="sinal de igual">
            <div class="total">
            </div>
        </div>
        <p class="tryAgain-button"><?=$quiz_buttons['quiz-buttons-tryAgain']?></p>
    </div>
</section>
 