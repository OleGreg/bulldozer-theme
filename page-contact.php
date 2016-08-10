<?php
/**
 * Template Name: Contact
 *
 **/?>

<?php
    //check if there are any post variables, in other words check if the form on this page has been submitted
    if(empty($_POST) === false){
        $errors = array();

        $webdev_form_name = $_POST['webdev_form_name'];
        $webdev_form_email = $_POST['webdev_form_email'];
        $webdev_form_message = $_POST['webdev_form_message'];

        if( empty($webdev_form_name) === true || empty($webdev_form_email) === true || empty($webdev_form_message) === true ){
            $errors[] = 'Name, email and message are required';
        } else{
            if (filter_var($webdev_form_email, FILTER_VALIDATE_EMAIL) === false){
                $errors[] = 'That\'s not a valid email address';
            }
            if(ctype_alpha(str_replace(" ","",$webdev_form_name)) === false){
                $errors[] = 'Name must contain only letters';
            }
        }

        //If there are no errors, build the email from the form contents and then mail it

        if(empty($errors) === true){

            $message = "FROM: " . $webdev_form_name . "\n\n" .
                "EMAIL: " . $webdev_form_email . "\n\n" .
                "MESSAGE: " . $webdev_form_message . "\n\n";

            $success_message = '<p>Your message has been sent</p>';
            $subject = 'New contact from webdevcontractors.com';

            $headers   = array();
            $headers[] = "MIME-Version: 1.0";
            $headers[] = "Content-type: text/plain; charset=iso-8859-1";
            $headers[] = "From:Webdev Contractors<info@webdevcontractors.com>";
//            $headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
//            $headers[] = "Reply-To: {$webdev_form_email}";
            $headers[] = "Subject: {$subject}";
            $headers[] = "X-Mailer: PHP/".phpversion();

            mail('Greg4510@gmail.com', $subject, $message, implode("\r\n", $headers));

            header('Location: ?sent');
            exit();
        }

    }
?>

<?php get_header(); ?>

<div class="row">

    <div class="col-sm-8 blog-main">

                <div class="blog-post">

                    <h2 class="blog-post-title">
<!--                        --><?php //the_title();
//                            phpinfo();
                        ?>
                    </h2>

                    <div class="contact-form">

                        <?php
                        if(empty($errors) === false) {
                            echo '<ul>';
                            foreach($errors as $error){
                                echo '<li>' . $error . '</li>';
                            }
                            echo '</ul>';
                        }
                        if ($_SERVER['QUERY_STRING'] === 'sent'){
                            echo "<label>Message sent. We will be in touch with you shortly!</label>";
                        }
                        ?>

                        <form action="" method="post">

                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="name">Name: </label>
                                <input class="form-control" type="text" name="webdev_form_name" id="webdev_form_name" <?php if (isset($_POST['webdev_form_name'])){ echo 'value="', strip_tags($_POST['webdev_form_name']), '"'; } ?>>
                                <br>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="email">Email: </label>
                                <input class="form-control" type="text" name="webdev_form_email" id="webdev_form_email" <?php if (isset($_POST['webdev_form_email'])){ echo 'value="', strip_tags($_POST['webdev_form_email']), '"'; } ?>>
                                <br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Message: </label>
                            <textarea class="form-control" name="webdev_form_message" id="webdev_form_message"><?php if (isset($_POST['webdev_form_message'])){ echo strip_tags($_POST['webdev_form_message']); } ?></textarea>
                            <br>
                        </div>
                        <button class="btn btn-primary" type="submit" value="submit">Submit</button>

                    </form>
                    </div>

                </div><!-- /.blog-post -->


    </div><!-- /.blog-main -->

<?php get_footer(); ?>