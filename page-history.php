<?php 
/*
Template Name: Наша история
*/
?>

<?php 
    get_header(); 
?>

<div class="aboutus">
            <div class="container">
                <h1 class="title">Наша история</h1>
               
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('story1_title');?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('story1_descr');?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="aboutus__img">
                        <?php
                              $image3 = get_field('story1_foto');
                              if (!empty($image3)): ?>
                                <img 
                                src='<?php echo $image3['url']; ?>'
                                alt='<?php echo $image3['alt']; ?>'
                                style='width:100%;'>
                        <?php endif;
                        ?>
                        </div> 
                    </div>
                </div>
               
                <div class="row">
                </br>
                    <div class="col-lg-6">
                        <div class="aboutus__img">
                        <?php
                              $image4 = get_field('story2_foto');
                              if (!empty($image4)): ?>
                                <img 
                                src='<?php echo $image4['url']; ?>'
                                alt='<?php echo $image4['alt']; ?>'
                                style='width:100%;'>
                        <?php endif;
                        ?>
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('story2_title');?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('story2_descr');?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('story3_title');?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('story3_descr');?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="aboutus__img">
                        <?php
                              $image5 = get_field('story3_foto');
                              if (!empty($image5)): ?>
                                <img 
                                src='<?php echo $image5['url']; ?>'
                                alt='<?php echo $image5['alt']; ?>'
                                style='width:100%;'>
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