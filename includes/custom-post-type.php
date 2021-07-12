<?php

function raccoon_custom_post_type() {

    $labels = array(
        'name'                  => 'Cidades',
        'singular_name'         => 'Cidade',
        'menu_name'             => 'Cidades',
        'name_admin_bar'        => 'Cidade',
        'archives'              => 'Cidades',
        'attributes'            => 'Atributos de cidades',
        'parent_item_colon'     => 'Cidade',
        'all_items'             => 'Todas as cidades',
        'add_new_item'          => 'Adicionar nova cidade',
        'add_new'               => 'Adicionar nova',
        'new_item'              => 'Nova cidade',
        'edit_item'             => 'Editar cidade',
        'update_item'           => 'Atualizar cidade',
        'view_item'             => 'Visualizar cidade',
        'view_items'            => 'Visualizar itens',
        'search_items'          => 'Buscar cidade',
        'not_found'             => 'Não encontrada',
        'not_found_in_trash'    => 'Não encontrada na lixeira',
        'featured_image'        => 'Imagem de destaque',
        'set_featured_image'    => 'Definir imagem de destaque',
        'remove_featured_image' => 'Remover imagem de destaque',
        'use_featured_image'    => 'Usar imagem de destaque',
        'insert_into_item'      => 'Inserir no item',
        'uploaded_to_this_item' => 'Uploade para este item',
        'items_list'            => 'Lista de cidades',
        'items_list_navigation' => 'Navegação na lista de cidades',
        'filter_items_list'     => 'Filtrar lista de cidades',
    );

    $args = array(
        'label'                 => 'Cidade',
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type( 'city', $args );
}

add_action( 'init', 'raccoon_custom_post_type', 0 );
