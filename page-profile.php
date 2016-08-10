<?php
/**
 * Template Name: Profile
 *
 **/?>


<?php get_header(); ?>


    <div class="row">

        <div class="col-sm-8 blog-main" >


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Greg Crowell</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 portfolio" align="center"> <img alt="Greg" src="<?php echo get_template_directory_uri();?>/img/greg.png" class="img-circle img-responsive"> </div>

                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Title:</td>
                                    <td>Developer</td>
                                </tr>
                                <tr>
                                    <td>Years Experience</td>
                                    <td>3</td>
                                </tr>

                                <tr>
                                <tr>
                                    <td>Favorite Language</td>
                                    <td>PHP</td>
                                </tr>
                                <tr>
                                    <td>Home Address</td>
                                    <td>Philadelphia, Pennsylvania</td>
                                </tr>
<!--                                <tr>-->
<!--                                    <td>Email</td>-->
<!--                                    <td><a href="mailto:info@webdevcontractors.com">info@webdevcontractors.com</a></td>-->
<!--                                </tr>-->
<!--                                <td>Phone Number</td>-->
<!--                                <td>xxx-xxxx-xxx(Landline)</td>-->
<!--                                </tr>-->

                                </tbody>
                            </table>

                            <a href="#"  data-toggle="modal" data-target="#portfolioModal" class="btn btn-primary">Portfolio</a>
                            <a href="#" data-toggle="modal" data-target="#proficienciesModal" class="btn btn-primary">Tech</a>

                            <!-- Portfolio Modal -->
                            <div class="modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Greg's Portfolio - A Few Examples</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php require 'portfolio-modal.php'; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button href="http://webdevcontractors.com" type="button" class="btn btn-primary">Download Resume</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Proficiencies Modal -->
                            <div class="modal fade" id="proficienciesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Greg's Tech</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php require 'tech-modal.php'; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button href="http://webdevcontractors.com" type="button" class="btn btn-primary">Download Resume</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <a href="http://webdevcontractors.com/contact-us/" type="button" class="btn btn-sm btn-primary" title="Contact Greg"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a target="blank" href="http://github.com/OleGreg" type="button" class="btn btn-sm btn-warning"><i title="Github" class="fa fa-github fa-lg" aria-hidden="true"></i></a>
                            <a target="blank" href="http://codepen.io/OleGreg/" type="button" class="btn btn-sm btn-danger"><i title="Codepen" class="fa fa-codepen" aria-hidden="true"></i></a>
                        </span>
                </div>

            </div>
        </div>

<?php get_footer(); ?>
