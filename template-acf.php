<?php

if( !class_exists('acf')) {

    echo 'Please install advanced custom fields';
    die();
}

/* Template Name: ACF Tutorial */

get_header();


// Variables
$name = get_field('your_name');
$description = get_field('description');
$active = get_field('active');
$colour = get_field('select_a_colour');
?>



<?php if($active):?>


    <div class="container py-5">

   
        <?php if($name):?>
            <h1><?php echo $name;?></h1>
        <?php endif;?>


        <?php if($description):?>
            <?php echo $description;?>
        <?php endif;?>




        <?php if( is_array($colour) ):?>
          <?php if(in_array('red', $colour)):?>

            Red is selected

          <?php endif;?>
        <?php endif;?>


    </div>


<?php else:?>

        <div class="container">The page is not active</div>

<?php endif;?>

<?php get_footer();?>