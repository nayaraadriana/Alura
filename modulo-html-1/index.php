<?php
function pegarArquivosCSS ($arquivo) {
    return "/Alura/modulo-html-1/css/$arquivo" ;
}
?>

<?php 
function pegarArquivoIMG ($arquivo) {
    return "/Alura/modulo-html-1/img/$arquivo" ;
}
?>

<?php 
function pegarArquivoPagina ($arquivo) {
    return "/Alura/modulo-html-1/$arquivo" ;
}
?>




<!DOCTYPE html>
    <head>
        <title>Home - João da Silva</title>
        <meta charset="utf-8">
        <link rel="icon" href="<?php echo pegarArquivoIMG("favicon.png")?>">

        <!-- carrega a fonte Crimson Text nas versões normal, itálico e negrito -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
        
        <!-- carrega a fonte Open Sans Condensed na versão negrito, -->
        <!-- que é a única necessária para os cabeçalhos            -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">
        
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("reset.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("bio.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("index.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("footer.css")?> ">
        
        
    </head>

    <body>

        <header class="cabecalho">
            <figure>
                <img src="<?php echo pegarArquivoIMG ("eu.jpg") ?>" alt="foto João da Silva">
            </figure>

            <h1>João da Silva</h1>
            <p class="subtitulo">Desenvolvedor Web</p>
        </header>

        
        <div class="container incio">

            <section class=" saudacao-inicial ">
                <p> 
                <span class="saudacao-inicio">
                <span class="medio">Olá,</span>
                <span class="pequeno">meu nome é</span>
                <strong>João da Silva</strong><br>
                </span>

                <span class="saudacao-final">
                <span class="pequeno">e eu construo</span>
                <em>site maravilhosos</em>
                </span>
                </p>

                <a class="veja-mais" href="<?php pegarArquivoPagina("bio.php")?>">Conheça mais um pouco sobre mim</a>

            </section>

        </div>

        <div class="container meio" >

            <section class="trabalhos">

                <h2>Trabalhos</h2>

                <figure>
                    <a href="<?php echo pegarArquivoPagina("portfolio.php")?>"><img src="<?php echo pegarArquivoIMG ("BMW-site.jpg")?>" alt="foto BMW site"></a>
                        
                    <a href="<?php echo pegarArquivoPagina("portfolio.php")?>"><img src="<?php echo pegarArquivoIMG ("IBM-site.png")?>" alt="foto IMB site"></a>
                    
                    <a href="<?php echo pegarArquivoPagina("portfolio.php")?>"><img src="<?php echo pegarArquivoIMG ("UOL-site.png")?>" alt="foto UOL site"></a>
                </figure>

                <a class="veja-mais" href="<?php pegarArquivoPagina("portfolio.php")?>">Veja mais</a>

            </section>

        </div>

        <div class="final">

            <section class="blog">
                <h2>Blog</h2>

                <p>Últimos posts</p>

                <a class="chamada-post" href="">O essencial do design responsivo</a><br>
                <a class="chamada-post" href="">Por que fazer páginas acessíveis?</a><br>
                <a class="chamada-post" href="">JavaScript não obstrutivo</a>

                <a class="veja-mais" href="<?php pegarArquivoPagina("blog.php")?>" >Veja mais</a>
            </section>


        </div>

        <footer>
            <div class="rodape">
                <h3>Vamos conversar?</h3>
                <p>Você pode entrar em contato comigo <a href="#"> por e-mail </a> ou pelo <a href="">telefone (12) 3456-7890</a> </p>
            </div>
        </footer>

    </body>

</html>   