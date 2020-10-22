<?php 
/*
Template Name: Наша команда
*/
?>

<?php 
    get_header(); 
?>

<div class="specialists" id="specialists">
            <div class="container">
                <div class="title">
                    <?php the_field('team_title'); ?>
                </div>
                </br>
                </br>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1"> 
                        <div class="about__img">
                        <?php
                              $image2 = get_field('team_foto');
                              if (!empty($image2)): ?>
                                <img 
                                src='<?php echo $image2['url']; ?>'
                                alt='<?php echo $image2['alt']; ?>'>
                        <?php endif;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php 
    get_footer(); 
?>