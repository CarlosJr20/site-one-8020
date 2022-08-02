<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<?php get_header(); ?>
    <div class="main-session cor-blog">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 text-center text-lg-left">
                    <div class="pr-0 pr-xl-5 pr-lg-0">
                        <h1 class="main-content__title mb-3 mb-lg-4 h2 cd-headline slide animated fadeInUp" data-wow-delay=".2s">
                            Blog ONE 80/20
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="blog-sidebar-posts section--padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <?php
            if ( have_posts() ) :


                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/post/content-excerpt', get_post_format() );

                endwhile;

                the_posts_pagination( array(
                    'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                    'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
                ) );

            else :

                get_template_part( 'template-parts/post/content-excerpt', 'none' );

            endif;
            ?>
        </div>
            <div class="col-lg-3 sidebar">
                <?php get_sidebar(); ?>
            </div>
      </div>
    </div>
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
</body>
</html>