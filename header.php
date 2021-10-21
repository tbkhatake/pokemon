<!DOCTYPE html>
<html <?= get_language_attributes() ?>>

<head>
   	<meta charset="<?php bloginfo( 'charset' ) ?>" />
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<header class="header">
<?php $menuItens = get_field('header-links','options')?>
<?php $forWhoLinks = get_field('header-forWhoLinks','options')?>

	<div class="header-wrapper">
		<?php $logo = get_field('header-logo','options')?>
		<img class="header-logo" src="<?=$logo['url']?>" alt="logo">
		<img class="header-nav-icon" src="<?=get_template_directory_uri()?>/images/menu.png" alt="menu">
		<div class="header-nav">
			<div class="nav-up">
				<div class="nav-for-who">
					<?php foreach($forWhoLinks as $forWhoItens): ?>
						<a class="for-who-itens" href="<?= $forWhoItens['header-forWhoLinks-link']?>"><?= $forWhoItens['header-forWhoLinks-name']?></a>
					<?php endforeach ?>
				</div>
				<form class="nav-cities" action="">
					<select class="nav-select" name="">
						<?php
							$city_plans_args = array(
								'post_type' => 'city',
								'orderby' => 'name',
								'order'   => 'ASC',
							);

							$city_plans_query = new WP_Query($city_plans_args);
						?>

						<?php if($city_plans_query->have_posts()) :while($city_plans_query->have_posts()):$city_plans_query->the_post()?>
							<option value="<?= get_post_field( 'post_name', get_post() )?>"><?= the_title()?></option>
						<?php endwhile; endif;?>

					</select>
					<?php wp_reset_postdata();?>
					<img class="nav-image" src="<?=get_template_directory_uri()?>/images/down-arrow.svg" alt="seta para baixo">
				</form>
			</div>	
			<div class="nav-down">
				<?php wp_nav_menu(array(
					'theme_location' => 'header-menu-desk',
					'container_class' => 'menu-desk',
				));?>
				<div class="nav-buttons">
					<button class="button search">
						<img class="button-img" src="<?=get_template_directory_uri()?>/images/search.svg" alt="lupa de pesquisa">
						<p>Buscar</p>
					</button>
					<button class="button login">
						<img class="button-img" src="<?=get_template_directory_uri()?>/images/login.svg" alt="login">
						<p>Login</p>
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="sub-menu-space"></div>
	<div class="modal">
		<div class="modal-area">
			<div class="container">
				<form class="modal-search" action="">
					<input class="modal-input" type="text" placeholder="Buscar">
					<input class="modal-button" type="image" src="<?=get_template_directory_uri()?>/images/search.svg" value="" alt="lupa de pesquisa">
				</form>
				<?php wp_nav_menu(array(
					'theme_location' => 'header-menu-mobile',
					'container_class' => 'menu-mobile'
				));?>
				<div class="modal-space">
					<span class="modal-redLine"></span>
				</div>
				<form class="modal-login" action="">
					<div class="modal-cities">
						<select class="cities-select" name="" id="">
						<?php
							$city_plans_args = array(
								'post_type' => 'city',
								'orderby' => 'name',
								'order'   => 'ASC',
							);

							$city_plans_query = new WP_Query($city_plans_args);
						?>

						<?php if($city_plans_query->have_posts()) :while($city_plans_query->have_posts()):$city_plans_query->the_post()?>
							<option value="<?= get_post_field( 'post_name', get_post() )?>"><?= the_title()?></option>
						<?php endwhile; endif;?>
						</select>
						<?php wp_reset_postdata();?>
						<img class="cities-image" src="<?=get_template_directory_uri()?>/images/down-arrow-mobile.svg" alt="seta para baixo">
					</div>
						<input class="modal-login-button" type="button" value="Login">
				</form>
				<div class="modal-for-who">
					<?php foreach($forWhoLinks as $forWhoItens): ?>
						<a class="for-who-itens" href="<?= $forWhoItens['header-forWhoLinks-link']?>"><?= $forWhoItens['header-forWhoLinks-name']?></a>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</header>



