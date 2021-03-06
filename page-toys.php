<?php 
/*
Template Name: Игрушки
*/
?>

<?php 
    get_header(); 
?>

<div class="toys">
            <div class="container">
                <?php
                    // Получим ID категории
                    $category_id = get_cat_ID( 'Мягкие игрушки' );
                    // Теперь, получим УРЛ категории
                    $category_link = get_category_link( $category_id );
                ?>

                <h2 class="subtitle"><a href="<?php echo $category_link; ?>">Мягкие игрушки</a></h2>
                <div class="toys__wrapper">

                <?php   // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'soft_toys',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?> 

                    <div class="toys__item" style="background-image: url(<?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail_url();
                    } else {
                        echo get_template_directory_uri() . '/assets/img/not-found.jpg'; 
                    }
                    
                    ?>)">
                        <div class="toys__item-info">
                            <div class="toys__item-title"><?php the_title()  ;?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_descr'); ?>                            
                            </div>
                            <a href="<?php echo get_permalink() ;?>" class="minibutton toys__trigger">Подробнее</a>
                        </div>
                    </div>
                    <?php
                    // формат вывода the_title() ...
                }

                wp_reset_postdata(); // сброс ?>
                </div>

                <?php
                    // Получим ID категории
                    $category_id = get_cat_ID( 'Развивающие игрушки' );
                    // Теперь, получим УРЛ категории
                    $category_link = get_category_link( $category_id );
                ?>

                <h2 class="subtitle"><a href="<?php echo $category_link; ?>">Развивающие игрушки</a></h2>
                <div class="toys__wrapper">

                <?php   // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'edu_toys',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?> 

                    <div class="toys__item" style="background-image: url(<?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail_url();
                    } else {
                        echo get_template_directory_uri() . '/assets/img/not-found.jpg'; 
                    }
                    
                    ?>)">
                        <div class="toys__item-info">
                            <div class="toys__item-title"><?php the_title()  ;?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_descr'); ?>                            
                            </div>
                            <a href="<?php echo get_permalink() ;?>" class="minibutton toys__trigger">Подробнее</a>
                        </div>
                    </div>
                    <?php
                    // формат вывода the_title() ...
                }

                wp_reset_postdata(); // сброс ?>

                </div>


                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="toys__alert">
                            <?php the_field('toys_alert');?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


<?php 
    get_footer(); 
?>