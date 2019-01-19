<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>CID-API</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="API - Classificação Internacional de Doenças">
    <meta name="author" content="Atila Silva">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/themes/prism-okaidia.min.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="https://themes.3rdwavemedia.com/demo/prettydocs/assets/css/styles.css">
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body class="landing-page">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"><i class="fas fa-list-alt"></i></span>
                        <span class="text-highlight">CID</span><span class="text-bold">API</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>API - Classificação Internacional de Doenças</p>
                </div><!--//tagline-->
            </div><!--//container-->
        </header><!--//header-->

        <section class="cards-section text-center pb-1">
            <div class="container">
                <h2 class="title">API CID-10</h2>
                <div class="intro">
                    <p>
                        A Classificação Internacional de Doenças e Problemas Relacionados à Saúde (também conhecida como Classificação Internacional de Doenças – CID 10) é publicada pela Organização Mundial de Saúde (OMS) e visa padronizar a codificação de doenças e outros problemas relacionados à saúde. A CID 10 fornece códigos relativos à classificação de doenças e de uma grande variedade de sinais, sintomas, aspectos anormais, queixas, circunstâncias sociais e causas externas para ferimentos ou doenças. A cada estado de saúde é atribuída uma categoria única à qual corresponde um código CID 10
                    </p>
                </div><!--//intro-->

                <div class="callout-block callout-success">
                    <div class="icon-holder">
                        <i class="fas fa-ambulance"></i>
                    </div><!--//icon-holder-->
                    <div class="content">

                        <p>Cada doença pode ser dada a uma categoria e receber um código de até seis caracteres de longitude (em formato de X00.000). Cada uma das tais categorias pode incluir um grupo de doenças similares.</p>

                    </div><!--//content-->
                </div>
            </div><!--//section-block-->
        </section><!--//cards-section-->
        <section class="cards-section text-center pt-1">
            <div class="section-block">
                <p>Obtém a lista de todas as doenças:</p>
                <div class="callout-success">
                    <h6>
                        <span class="badge-info p-1">
                            <i class="fa fa-globe"></i> GET
                        </span>
                        <code>{{env('APP_URL')}}/cid10</code>
                    </h6>
                    <pre style="background: #212121">

    <code class="language-js">[
  {
    "codigo":"A00",
    "nome":"Cólera"
  },
  {
    "codigo":"A00.0",
    "nome":"Cólera Devida a Vibrio Cholerae 01, Biótipo Cholerae"
  },
  {
    "codigo":"A00.1","nome":"Cólera Devida a Vibrio Cholerae 01, Biótipo El Tor"
  },
  {
    "codigo":"A00.9",
    "nome":"Cólera Não Especificada"
  },
          ...
  {
    "codigo":"A02",
    "nome":"Outras Infecções Por Salmonella"
  }
]                  </code>
                    </pre>
                </div><!--//code-block-->
            </div><!--//section-block-->
            <div class="section-block">
                <p>Obtém paginação das doenças:</p>
                <div class="callout-success">
                    <h6>
                        <span class="badge-info p-1">
                            <i class="fa fa-globe"></i> GET
                        </span>
                        <code>{{env('APP_URL')}}/cid10?page=1&perPage=2</code>
                    </h6>
                    <pre style="background: #212121">

    <code class="language-js">[
  {
    "codigo":"A00",
    "nome":"Cólera"
  },
  {
    "codigo":"A00.0",
    "nome":"Cólera Devida a Vibrio Cholerae 01, Biótipo Cholerae"
  }
]                  </code>
                    </pre>
                </div><!--//code-block-->
            </div><!--//section-block-->
            <div class="section-block">
                <p>Obtém doença por código:</p>
                <div class="callout-success">
                    <h6>
                        <span class="badge-info p-1">
                            <i class="fa fa-globe"></i> GET
                        </span>
                        <code>{{env('APP_URL')}}/cid10/{codigo-cid}</code>
                    </h6>
                    <pre style="background: #212121">

    <code class="language-js">{
   "codigo":"A00",
   "nome":"Cólera"
}                    </code>
                    </pre>
                </div><!--//code-block-->
            </div><!--//section-block-->
        </section>
        <div class="content-inner">
            <section id="license" class="doc-section text-center">
                <div class="section-block">
                    <div class="jumbotron text-center">
                        <h1 class="doc-title">CC  3.0</h1>
                        <p>API-CID foi criado por <a href="https://github.com/Atiladanvi/" target="_blank">Atila Silva</a> desenvolvedor de aplicações <strong>WEB</strong> e está sob a licença <a class="dotted-line" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License (CC BY 3.0)</a></p>
                        <p>Se você quiser copiar esse projeto sinta-se livre para fazer um fork no<strong> GitHub</strong>. Você pode ! <a href="https://github.com/Atiladanvi/cid-api" target="_blank">Atiladanvi/cid-api</a></p>

                        <div class="speech-bubble mt-5 text-center">
                            <h3 class="speech-title">Gostaria que fosse adicionado mais algo aqui ?</h3>
                            <p>Abra uma issue no <strong>GitHub</strong> e especifique sua sugestão aqui <a href="https://github.com/Atiladanvi/cid-api/issues" target="_blank">GitHub</a> </p>
                        </div>

                        <div class="list list-inline text-center">
                            <!-- Place this tag where you want the button to render. -->
                            <a class="github-button" href="https://github.com/Atiladanvi/cid-api" data-size="large" data-show-count="true" aria-label="Star Atiladanvi/cid-api on GitHub">Star</a>
                        </div>
                    </div><!--//jumbotron-->
                </div><!--//section-block-->
            </section><!--//doc-section-->
        </div>
    </div><!--//page-wrapper-->

<footer class="footer text-center">
    <div class="container">
        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
        <small class="copyright">CID-API @2019</small>
    </div><!--//container-->
</footer><!--//footer-->

<!-- Main Javascript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/2.1.0/stickyfill.min.js"></script>
<script type="text/javascript" src="https://themes.3rdwavemedia.com/demo/prettydocs/assets/js/main.js"></script>

</body>
</html>
