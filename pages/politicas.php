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
            <!--
            <div class="faq__item">
                <div class="ask">
                    <div class="ask__text">Quais dados pessoais coletamos e porque</div>
                </div>
                <div class="answer--border">
                    <div class="answer">Comentários <br> Quando os visitantes deixam comentários no site, coletamos os
                        dados
                        mostrados no formulário de comentários, além do endereço de IP e de dados do navegador do
                        visitante,
                        para auxiliar na detecção de spam. <br> Uma sequência anonimizada de caracteres criada a partir
                        do seu
                        e-mail (também chamada de hash) poderá ser enviada para o Gravatar para verificar se você usa o
                        serviço. A política de privacidade do Gravatar está disponível aqui:
                        https://automattic.com/privacy/. Depois da aprovação do seu comentário, a foto do seu perfil
                        fica
                        visível publicamente junto de seu comentário.
                    </div>
                </div>
            </div>
            <div class="faq__item">
                <div class="ask">
                    <div class="ask__text">Quais dados pessoais coletamos e porque</div>
                </div>
                <div class="answer--border">
                    <div class="answer">Comentários <br> Quando os visitantes deixam comentários no site, coletamos os
                        dados
                        mostrados no formulário de comentários, além do endereço de IP e de dados do navegador do
                        visitante,
                        para auxiliar na detecção de spam. <br> Uma sequência anonimizada de caracteres criada a partir
                        do seu
                        e-mail (também chamada de hash) poderá ser enviada para o Gravatar para verificar se você usa o
                        serviço. A política de privacidade do Gravatar está disponível aqui:
                        https://automattic.com/privacy/. Depois da aprovação do seu comentário, a foto do seu perfil
                        fica
                        visível publicamente junto de seu comentário.
                    </div>
                </div>
            </div>
            -->
        </div>
    </section>
<?php get_footer() ?>