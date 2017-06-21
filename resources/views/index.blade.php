<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lead Page Campanha de Matricula SENAI 2017">
    <meta name="author" content="Diego Gonçalves SESI RO">

    <title>Premio Fiero de Jornalismo 2016</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Tema CSS -->
    <link href="{{ asset('css/senai.min.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('img/PFJ_-_favicon.png') }}" type="image/x-icon"/>
    <!-- Slick.js CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/sweetalert/dist/sweetalert.css') }}">


    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=pt-br" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('banner/css/normalize.css') }}">

    <link rel="stylesheet" href="{{ asset('banner/css/slider.css') }}">
    <!-- Fonts -->
    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <script>
        function formatar(src, mask) {
            var i = src.value.length;
            var saida = mask.substring(0, 1);
            var texto = mask.substring(i)
            if (texto.substring(0, 1) != saida) {
                src.value += texto.substring(0, 1);
            }
        }
    </script>

</head>

<body id="page-top" class="index">

<!-- Navegação -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <img class="img-responsive" src="{{ asset('img/PFJ_-_topo_logo2.png') }}" alt="">

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right"
                style=" font-family:  'Trebuchet MS'; font-weight: normal; font-size: 10px; margin: 20px 0 0px; ">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#page-top">Inicio</a>
                </li>
                <li class="page-scroll">
                    <a href="#informa">Sobre o Prêmio</a>
                </li>
                <li class="page-scroll">
                    <a href="#pauloqueijoz" style=" text-decoration: underline;  ">Paulo Queiroz</a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Inscrição</a>
                </li>
                <li class="page-scroll">
                    <a href="#video">Vídeos</a>
                </li>
                <li class="page-scroll">
                    <a href="https://drive.google.com/file/d/0BywOlRJ55qsmSG8wR2FLOWpEd0E/view?usp=sharing"
                       target="_black">Regulamento</a>
                </li>
                <li class="page-scroll">
                    <a href="https://goo.gl/in1ugJ" target="_black">Downloads</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contato</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container" style=" width: 100%; height: 110%;">

        <div class="slider">
            <ul>
                <li>
                    <img src="{{ asset('img/banner/PFJ_-_banner1.png') }}" style=" width: 100%; height: 110%;"/>

                </li>
                <li>
                    <img src="{{ asset('img/banner/PFJ_-_banner2.png') }}" style=" width: 100%; height: 140%;"/>

                </li>
                <li>
                    <img src="{{ asset('img/banner/PFJ_-_banner3.png') }}" style=" width: 100%; height: 140%;"/>

                </li>
            </ul>
        </div>

    </div>
</header>

<section id="informa">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style=" font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(29, 87, 167);font-size: 28px;">
                    SOBRE O PRÊMIO</h2>

            </div>
        </div>
        <div class="row">
            <p style=" text-align: justify; font-family:  'Arial'; font-weight: normal; font-size: 18px;">
                O Prêmio FIERO Paulo Queiroz de Jornalismo é uma iniciativa da Federação das Indústrias do Estado de
                Rondônia. Tem por
                objetivos estimular, valorizar e reconhecer os profissionais comprometidos com a prática de um
                jornalismo fundamentado na
                propriedade técnica, na ética, na verdade, na transparência e na imparcialidade. Para profissionais que
                formalizam na notícia um
                instrumento de informação, de serviço e de formação de valores de uma sociedade industrial, o Prêmio
                visa incentivar a produção de
                reportagens e a divulgação de informações sobre o desenvolvimento industrial rondoniense e sua
                importância estratégica no
                crescimento do Estado de Rondônia.<br><br>
                Levar parte da história recente da imprensa rondoniense voltada para desenvolvimento industrial ao
                público interessado em
                comunicação, como estudantes de jornalismo, profissionais da área e pessoas que não têm acesso ao dia a
                dia do complexo
                midiático. O prêmio, além de informativo, visa com materiais multimídia, como quiz sobre a mídia e
                resgate de reportagens de rádio,
                TV, internet e meio impresso. Transformar a visão levando informação e experiência a quem não tem acesso
                a este conteúdo e
                mostrar a Industria como protagonista do desenvolvimento de um município, um estado e um Pais.<br><br>
                A temática do Prêmio FIERO Paulo Queiroz de Jornalismo contempla reportagens publicadas em rádio,
                jornal, televisão e sites de
                notícias que evidenciem a indústria como força propulsora da economia e do desenvolvimento do Estado de
                Rondônia, com ênfase
                para o papel do Sistema FIERO, SENAI, SESI e IEL no apoio integral à produção, por meio da educação
                básica e profissional, saúde,
                responsabilidade social, inovação tecnológica, meio ambiente e sustentabilidade, esporte e lazer,
                comércio exterior, burocracia,
                macroeconomia, segurança jurídica, tributação, financiamento, infraestrutura, relações do trabalho.

            </p>

        </div>
    </div>
</section>

<section id="pauloqueijoz">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style=" font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(29, 87, 167);font-size: 28px;">
                    QUEM É PAULO QUEIROZ</h2>

            </div>
        </div>
        <div class="row">
            <p style=" text-align: justify; font-family:  'Arial'; font-weight: normal; font-size: 18px;">
                Criterioso, intelectual, solidário. Assim era o jornalista Paulo Queiroz Bezerra, que morreu em Porto
                Velho, aos 63 anos, em março de
                2011. Deixou cinco filhos, dois deles adotivos.
                Cearense, foi levado pelos pais com apenas um ano de idade para Pombal (PB), depois morou em João
                Pessoa, de onde se mudou
                para Porto Velho em 1978.
                Despojado, nunca se incomodou de ser visto trajando calça jeans e sandálias de couro. Seus valores
                superavam o “ter”, privilegiando
                o “ser”.<br><br>
                E assim ele conheceu e se especializou no modus vivendi da Capital de Rondônia em sua fase mais
                efervescente: a transição entre o
                velho território federal e o estado.<br>
                Texto elegante, sempre formatado com base em suas pesquisas bem feitas, o credenciaram às análises
                políticas. PQ tornou-se o
                mais famoso comentarista político do estado. Sua coluna "Política em Três Tempos" tinha o pendor de
                incursionar em espaços
                distintos, do chão do samba à reforma agrária, aos gabinetes de executivos, juízes, legisladores, à
                indústria, às escolas, à
                universidade e aos poetas da esquina.<br>
                Quem conviveu com ele, o percebia feliz ao ouvir declamações do também saudoso poeta Cabo Lira no balcão
                do pequeníssimo bar
                de dona Cleusa, na Rua José de Alencar.<br>
                Nas Redações em que trabalhou teve paciência e competência em auxiliar novatos, procurando lhes infundir
                a busca pela melhor
                apuração, sem que isso significasse fazer do repórter um autômato frio e desprovido de sentimentos.
                A vida do nosso homenageado implicou também o uso de sua larga experiência e liderança. E elas
                contribuíram com a organização
                da então Associação dos Jornalistas e posteriormente Sindicato dos Jornalistas Profissionais no Estado
                Rondônia, do qual ele foi
                presidente.<br><br>
                Foi secretário-adjunto de comunicação do Governo Valdir Raupp e
                assessor de imprensa da Universidade Federal de Rondônia (Unir).<br><br>
                Em sua trajetória, ele chegou a enfrentar momentos de sofrimento, entretanto, procurava não incomodar a
                ninguém.
                Flagrado em sua solidão interior, algumas vezes procurava justificá-la. Sentia-se no meio do povo e
                deste absorveria a maioria dos
                problemas, caso tivesse um dia se formado em história, filosofia e medicina.<br>
                Mas o nosso homenageado formou-se em matemática na Universidade Federal da Paraíba. E mesmo não galgando
                essas outras
                áreas, vivenciou-as neste imenso laboratório social, político e econômico.<br>
                Assim, pelo menos pôde contribuir para solucionar parte desses problemas, minimizando a dor de muitos
                rondonienses e de outros
                brasileiros que para cá vieram.
            </p>

        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style=" font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(29, 87, 167); font-size: 28px;">
                    Inscrição</h2>

            </div>
        </div>
        <br>
        <div class="row">
            <form action="{{ route('subscribe') }}" method="post">
                {{ csrf_field() }}
                @include('includes.dados')
                @include('includes.empresa')
                <div class="row">
                    <div class="col-md-10">
                        <br>
                        <button type="submit" class="btn btn-lg btn-primary"
                                style="font-family:  'Trebuchet MS'; font-weight: normal; background: rgb(29, 87, 167)">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<!-- About Section -->
<section id="video">
    <div class="container text-center">

        <div class="row">
            <center>
                <h2 style=" font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(29, 87, 167); font-size: 28px;">
                    Vídeos</h2></center>
            <br>
            <div class="col-lg-5 text-center">
                <iframe width="360" height="215" src="https://www.youtube.com/embed/vh9r0xDsbZA" frameborder="0"
                        allowfullscreen></iframe>
            </div>
            <div class="col-lg-5 text-center">
                <iframe width="360" height="215" src="https://www.youtube.com/embed/JJOqkzA1hxI" frameborder="0"
                        allowfullscreen></iframe>
            </div>
            <div class="col-lg-5 text-center">
                <iframe width="360" height="215" src="https://www.youtube.com/embed/l2iK6puI79E" frameborder="0"
                        allowfullscreen></iframe>
            </div>

        </div>

    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style=" font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(29, 87, 167);font-size: 28px;">
                    Contato</h2>

            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form action="{{ route('contact') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nome</label>
                            <input name="nome" type="text" class="form-control" placeholder="Nome" required
                                   data-validation-required-message="Campo Nome Obrigatório.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Endereço de Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Email" required
                                   data-validation-required-message="Formato do Email invalido.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Numero do Telefone</label>
                            <input name="telefone" type="tel" class="form-control" placeholder="Telefone" id="phone"
                                   required data-validation-required-message="Telefone para contato Obrigatório.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensagem</label>
                            <textarea name="mensagem" rows="5" class="form-control" placeholder="Mensagem" id="message"
                                      required data-validation-required-message="Sua duvida."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" id="btnSubmit" class="btn btn-lg btn-primary"
                                    style="font-family:  'Trebuchet MS'; font-weight: normal; background: rgb(29, 87, 167)"
                                    name="btn-Aderir">Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3 style=" text-align: left;">Contato</h3><br>
                    <img src="{{ asset('img/PFJ_-_icon_fone.png') }}" style=" text-align: left; width: 75%;"
                         class="img-responsive" alt=""><br>
                    <img src="{{ asset('img/PFJ_-_icon_mail.png') }}" style=" text-align: left; " class="img-responsive"
                         alt="">
                </div>
                <div class="footer-col col-md-4">
                    <h3 style=" text-align: left;">Rede social</h3>
                    <ul class="list-inline" style=" text-align: left;">
                        <li>
                            <a href="https://www.facebook.com/Senai-Rondonia-763469517016755/" target="_black"
                               class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>

                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <center>
                        <h3 style=" text-align: left;"><img class="img-responsive"
                                                            src="{{ asset('img/PFJ_-_logo_fiero.png') }}" alt=""></h3>
                        <h3 style=" text-align: left;"><img class="img-responsive"
                                                            src="{{ asset('img/PFJ_-_logo_sesi.png') }}" alt=""></h3>
                        <h3 style=" text-align: left;"><img class="img-responsive"
                                                            src="{{ asset('img/PFJ_-_logo_senai.png') }}" alt=""></h3>
                        <h3 style=" text-align: left;"><img class="img-responsive"
                                                            src="{{ asset('img/PFJ_-_logo_iel.png') }}" alt=""></h3>
                        <!--<h3><img class="img-responsive" src="img/logo-banner_movimento.png" style=" width: 70%;he: 20%;" alt=""></h3>-->
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <b style=" font-family:  'Trebuchet MS'; font-weight: normal; ">ESCRITÓRIO EXECUTIVO</b><br>
                    &copy; <label style=" font-family:  'Trebuchet MS'; font-weight: bold; ">FIERO 2017</label>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<!-- jQuery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('bower_components/inputmask/dist/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ asset('js/input/contato.js') }}"></script>
<script src="{{ asset('js/input/frmInscricao.js') }}"></script>
@include('sweet::alert')
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name=ESTADO]').change(function () {
            var idEstado = $(this).val();
            $.get('cidades/' + idEstado, function (cidades) {
                $('select[name=MUNICIPIO]').empty();
                $.each(cidades, function (key, value) {
                    $('select[name=MUNICIPIO]').append('<option value=' + value.CODIGO + '>' + value.cidade + '</option>');
                });
            });
        });
        $('select[name=EMPESTADO]').change(function () {
            var idEstado = $(this).val();
            $.get('cidades/' + idEstado, function (cidades) {
                $('select[name=EMPMUNICIPIO]').empty();
                $.each(cidades, function (key, value) {
                    $('select[name=EMPMUNICIPIO]').append('<option value=' + value.CODIGO + '>' + value.cidade + '</option>');
                });
            });
        });
        $('input[name=TELEFONE]').inputmask({"mask": "(99) 99999-9999"});
        $('input[name=TELEFONEFIXO]').inputmask({"mask": "(99) 9999-9999"});
        $('input[name=EMPTELEFONE]').inputmask({"mask": "(99) 99999-9999"});
        $('input[name=EMPTELEFONEFIXO]').inputmask({"mask": "(99) 9999-9999"});

    });
</script>
<!-- Theme JavaScript -->
<script src="{{ asset('js/senai.min.js') }}"></script>


</body>

</html>
