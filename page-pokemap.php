<?php
/**
 * Template Name: Script
 *
 **/?>


<?php get_header(); ?>

<div class="row">

    <div class="col-sm-8 blog-main">

        <?php
        echo '<pre>';

        // Outputs all the result of shellcommand "ls", and returns
        // the last output line into $last_line. Stores the return value
        // of the shell command in $retval.
        $last_line = system('ls', $retval);

        // Printing additional info
        echo '
            </pre>
            <hr />Last line of the output: ' . $last_line . '
            <hr />Return value: ' . $retval;
        ?>

    </div><!-- /.blog-main -->

<?php get_footer(); ?>
