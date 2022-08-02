<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ONE 80/20 | Marketing Digital em Recife</title>
        <meta name="description" content="">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="https://one8020.com.br/" itemprop="url">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css?v=4.0.0">
        <link rel="stylesheet" href="/assets/css/one8020.min.css?v=1.0.3">

        <meta property="og:title" content="ONE 80/20 | Marketing Digital em Recife">
        <meta property="og:url" content="https://one8020.com.br/">
        <meta property="og:type" content="website">
        <meta property="og:image" content="/assets/img/favicon.ico">
        <meta property="og:description" content="">

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89942737-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-89942737-1');
        </script>
    </head>
    <body class="sites-sessao">
    <main>
        <?php include($_SERVER['DOCUMENT_ROOT']."/components/header.php");?>

        <div class="main-session cor-contato">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 text-center text-lg-left">
                        <div class="pr-0 pr-xl-5 pr-lg-0">
                            <h1 class="main-content__title mb-3 mb-lg-4 h2 cd-headline slide animated fadeInUp" data-wow-delay=".1s">
                                Entre em Contato
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="sites section--padding">
        <div class="container">
            <div class="row flx-center">
                <div class="col-12 col-lg-6 mb-3">
                    <div class="descricao">
                        <h2 class="wow fadeInUp animated" data-wow-delay=".1s">Fale conosco</h2>
                        <p class="lead wow fadeInUp animated" data-wow-delay=".2s">Preencha o nosso formulário ao lado para tirar dúvidas, marcar uma reunião ou até mesmo para dar uma opinião. Seu contato é muito importate para nós.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <form action="/components/mail.php" method="POST" class="form-signin">
                        <div class="text-center mb-4">
                            <h1 class="h3 mb-3 font-weight-normal">Preencha o nosso formulário</h1>
                        </div>
                        <div class="form-label-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" required autofocus>
                        </div>
                        <div class="form-label-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-label-group mb-3">
                            <label>Mensagem</label>
                            <textarea name="mensagem" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdTzQEVAAAAAGeqRX1saPX7QJjdo07g24mT9cc6" required></div>
                        <div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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