<!DOCTYPE html>
<html lang="pt-BR" class="no-js no-svg">

    <?php get_header(); ?>
    <div class="main-session cor-blog">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 text-center text-lg-left">
                    <div class="pr-0 pr-xl-5 pr-lg-0">
                        <h1 class="main-content__title mb-3 mb-lg-4 h2 cd-headline slide animated fadeInUp" data-wow-delay=".1s">
                            <?php the_title();?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" style="width: 100%">

    <div class="blog-post-alt section--padding">
        <div class="container">
            <div class="blog-post-content">
                <h5>
                    <?php
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/post/content', get_post_format() );
                        endwhile;
                    ?>
                </h5>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT']."/components/contact.php");?>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT']."/components/footer.php");?>

    <script type="text/javascript" src="/assets/js/jquery.min.js?v=3.3.1"></script>
    <script type="text/javascript" async src="/assets/js/popper.min.js"></script>
    <script type="text/javascript" async src="/assets/js/bootstrap.min.js?v=4.0.0"></script>
    <script type="text/javascript" async src="/assets/js/feather.min.js"></script>
    <script type="text/javascript" async src="/assets/js/chart.min.js?v=2.7.2"></script>
    <script type="text/javascript" async src="/assets/js/one8020.js?v=1.0"></script>
    <script type="text/javascript" async src="/assets/js/initial.js"></script>
    <script type="text/javascript" async src="/assets/js/wow.min.js"></script>
</html>