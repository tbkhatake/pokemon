<?php
    $city_plans_args = array(
        'post_type' => 'city',
        'orderby' => 'name',
        'order'   => 'ASC',
    );

    $city_plans_query = new WP_Query($city_plans_args);
?>
<section class="initial-modal">
    <div class="modal__content">
        <img class="modal__logo" src="<?=get_template_directory_uri()?>/images/logo.svg" alt="">
            <div class="modal__cities-box">
                <input class="modal__search" type="text" placeholder="Pesquise sua cidade"/>
                <div class="modal__cities">
                  <?php if($city_plans_query->have_posts()) :while($city_plans_query->have_posts()):$city_plans_query->the_post()?>
                      <p class="modal__city"><?= the_title()?></p>
                  <?php endwhile; endif;?>
                </div>
                <p class="modal__notfound-city"> Não encontrei minha cidade </p>
              </div>
            </div>
          <div class="modal__forms">
        <form action="">
          
        </form>
    </div>
    <div class="forms" id="forms-modal">
      <div class="forms-container">
          <form class="forms-wrapper" action="">
              <p class="forms-desc">Por gentileza, nos envie a sua cidade.</p>
                  <div class="fields-wrapper">
                      <input class="tiny-form" id="forms-input" type="text" name="Nome" required placeholder="Nome">
                      <p class="required">Preenchimento obrigatório*</p>
                  </div>
                  <div class="fields-wrapper">
                      <input class="tiny-form" id="forms-input" type="text" name="Telefone" required placeholder="Telefone">
                      <p class="required">Preenchimento obrigatório*</p>
                  </div>
                  <div class="fields-wrapper">
                      <input class="tiny-form" id="forms-input  forms-input-email" type="email" name="Email" required placeholder="Email">
                      <p class="required">Preenchimento obrigatório*</p>
                      <p class="required-email">Digite um e-mail válido*</p>
                  </div>
                  <div class="fields-wrapper">
                    <div class="fields-wrapper-state">
                      <input class="tiny-form tiny-form-city" id="forms-input" name="Cidade" type="text" required placeholder="Cidade">
                      <input class="tiny-form tiny-form-state" id="forms-input" name="Estado" type="text" required placeholder="Estado">
                    </div>
                      <p class="required">Preenchimento obrigatório*</p>
                  </div>
              <input class="forms-button" type="submit" value="Enviar">
          </form>
      </div>
    </div>
</section>
<?php wp_reset_postdata();?>

