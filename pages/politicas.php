<?php /* Template Name: Página Políticas */ ?>

<?php
    $faq_title = get_field('titulo_faq');
    $faq_description = get_field('descricao_faq');
?>
<?php get_header() ?>
    <section class="faq">
        <div class="container">
            <p class="faq__title">
                <?= $faq_title; ?>
            </p>
            <p class="faq__description">
                <?= $faq_description; ?>
            </p>
            <?php if(have_rows('item_faq')): ?>
                <?php while(have_rows('item_faq')): the_row(); ?>
                    <div class="faq__item">
                        <?php
                            $question = get_sub_field('pergunta');
                            $answer = get_sub_field('resposta');     
                        ?>
                        <div class="ask">
                            <p class="ask__text"><?= $question; ?></p>
                        </div>
                        <div class="answer--border">
                            <p class="answer">
                                <?= $answer; ?> 
                            </p>
                        </div>
                    </div>
                <?php  endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer() ?>