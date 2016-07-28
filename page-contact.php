<?php
/**
 * Template Name: Contact
 *
 **/?>

<?php
    if(empty($_POST) === false){
        $errors = array();

        $webdev_form_name = $_POST['webdev_form_name'];
        $webdev_form_email = $_POST['webdev_form_email'];
        $webdev_form_message = $_POST['webdev_form_message'];

        if( empty($webdev_form_name) === true || empty($webdev_form_email) || empty($webdev_form_message) === true ){
            $errors[] = 'Name, email and message are required';
        } else{
            if (filter_var($webdev_form_email, FILTER_VALIDATE_EMAIL) === false){
                $errors[] = 'That\'s not a valid email address';
            }
            if(ctype_alpha($webdev_form_name) === false){
                $errors[] = 'Name must contain only letters';
            }
        }

        print_r($errors);
    }
?>

<?php get_header(); ?>

<div class="row">

    <div class="col-sm-8 blog-main">

                <div class="blog-post">

                    <h2 class="blog-post-title">
                        <?php the_title(); ?>
                    </h2>

                    <form action="" method="post">

                        <label for="name">Name: </label>
                        <input type="text" name="webdev_form_name" id="webdev_form_name">
                            <br>
                        <label for="email">Email: </label>
                        <input type="text" name="webdev_form_email" id="webdev_form_email">
                            <br>
                        <label for="message">Message: </label>
                        <textarea name="webdev_form_message" id="webdev_form_message"></textarea>
                            <br>
                        <input type="submit" value="submit">

                    </form>

                </div><!-- /.blog-post -->


    </div><!-- /.blog-main -->

<?php get_footer(); ?>