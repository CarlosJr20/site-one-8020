<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<?php get_header(); ?>

<body>
<nav class="navbar navbar-toggleable-md navbar-inverse" role="navigation">
    <div class="container no-override">
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <a class="navbar-brand" href="../">
        <!-- LOGO NAVBAR
        <img src="../assets/img/lb-investimentos.png" class="hidden-md-down d-inline mr-2" />
        -->
      </a>

      <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item active dropdown">
            <a href="../" class="nav-link">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a href="../quem-somos/" class="nav-link">Quem Somos</a>
          </li>
          <li class="nav-item dropdown">
            <a href="../servicos/" class="nav-link">Serviços</a>
          </li>
          <li class="nav-item dropdown">
            <a href="../#" class="nav-link dropdown-toggle" data-toggle="dropdown">Obras<i class="ion-chevron-down"></i></a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="../restaurantes/">Restaurantes</a>
              <a class="dropdown-item" href="../moda/">Moda</a>
              <a class="dropdown-item" href="../especialidades/">Especialidades</a>
              <a class="dropdown-item" href="../lojas/">Lojas</a>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-extend">
            <a href="../clientes/" class="nav-link">Clientes</a>
          </li>
          <li class="nav-item dropdown">
            <a href="../blog/" class="nav-link">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a href="../contato/" class="nav-link">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link--rounded" href="../login/">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="blog-sidebar-posts">
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

<section class="site-footer">
                <div class="widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <div class="widget">
                                    <h3 class="widget-title">Dermato</h3>
                                    <address>Praça de Casa Forte, 381/308<br>Recife/PE
                                    </address>
                                    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">Contato</h3>
                                        Telefone:<br><i class="fa fa-phone"></i>(81) 3048-6087 | (81) 3423-3803<br>(81) 99926-4659
                                        <a href="../mailto:contato@dermatorecife.com.br">contato@dermatorecife.com.br</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">A Clínica</h3>
                                    <ul class="no-bullet">
                                    <li><a href="../equipe/">Dermatologista casa forte;</a></li>
                                    <li><a href="../a-clinica/">Clínica dermatológica casa forte;</a></li>
                                    <li><a href="../equipe/">Doutora Ana Roberta;</a></li>
                                    <li><a href="../equipe/">Doutora Ligia;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <div class="widget no-bottom">
                                    <h3 class="widget-title">Tratamentos</h3>
                                    <ul class="no-bullet">
                                    <li><a href="../tratamentos/peeling-ultrasonico/">Peeling Ultrasônico;</a></li>
                                    <li><a href="../tratamentos/limpeza-de-pele/">Limpeza de pele;</a></li>
                                    <li><a href="../tratamentos/peeling-quimico/">Peeling Químico;</a></li>
                                    <li><a href="../tratamentos/toxina-botulinica/">Toxina Botulínica;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <div class="widget ajusta-mobile">
                                    <h3 class="widget-title"></h3>
                                    <ul class="no-bullet">
                                    <li><div class="trata-footer"></div></li>
                                    <li><a href="../tratamentos/fototerapia/">Fototerapia;</a></li>
                                    <li><a href="../tratamentos/preenchimento-facial/">Preenchimento facial;</a></li>
                                    <li><a href="../tratamentos/laser-de-co2/">Laser de CO2;</a></li>
                                    <li><a href="../tratamentos/luz-intensa-pulsada/">Luz Intensa Pulsada;</a></li>
                                    <li><a href="../tratamentos/peeling-de-cristal/">Peeling de Cristal;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <nav class="footer-navigation">
                                <a href="../ ">Home</a>
                                <a href="../a-clinica/">A Clínica</a>
                                <a href="../equipe/">Equipe</a>
                                <a href="../tratamentos/">Tratamentos</a>
                                <a href="../blog/">Blog</a>
                                <a href="../contato/">Contato</a>
                        </nav>
                        <div class="colophon">Copyright 2017 | LB Investimentos Recife.</div>
                    </div>
                </div>
            </section>
            <div class="otimizado-one8020">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                      <p id="copyright-text">otimizado por | <a href="http://one8020.com.br/"><img src="http://one8020.com.br/assets/img/otimizado-one-8020.png" alt="Marketing Digital em Recife | ONE 80/20" title="Marketing Digital em Recife | ONE 80/20"></a></p>
                  </div>
                </div>
              </div>
            </div>

  <!-- LIVE CHAT -->

<div class="live-chat-widget">
  <button class="live-chat-button" href="../#" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-comments"></i>
  </button>
  <div class="live-chat-tooltip">
    <strong>Precisa de Ajuda?</strong><br/>Fale conosco.</div>
</div>

<!-- Modal Alert -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar Mensagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input type="text" placeholder="Email" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <input type="text" placeholder="Assunto" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <textarea  placeholder="Menssagem" rows="4" class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/tether.min.js"></script>
    <script src="../dist/theme.min.js"></script>