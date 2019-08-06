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
        <title>Blog João da Silva</title>
        <meta charset="utf-8">
        <link rel="icon" href="../Alura/img/favicon.png">
       

        <!-- carrega a fonte Crimson Text nas versões normal, itálico e negrito -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">

        <!-- carrega a fonte Open Sans Condensed na versão negrito, -->
        <!-- que é a única necessária para os cabeçalhos            -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">


        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("reset.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("header.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("blog.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("bio.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("barra-lateral.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("citacao.css")?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("icones-sociais.css")?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS( "footer.css")?> ">



    </head>

    <body>
            
        <header>
            <h1 class="titulo">Blog</h1>
        </header>

        <aside class="navegacao-site">
    
                <img src="<?php echo pegarArquivoIMG ("eu.jpg")?>" alt="foto joão da Silva">
                    
                <div class="container-menu">
                    
                    <h1>João da Silva</h1>
        
                    <nav>
                        <ul>
                            <li><a href="<?php echo pegarArquivoPagina ("index.php")?>">HOME</a></li> 
                            <li><a href="<?php echo pegarArquivoPagina ("portfolio.php")?>">Portfolio</a></li> 
                            <li><a href="<?php echo pegarArquivoPagina ("bio.php")?>">Sobre mim</a></li> 
                            <li><a href="<?php echo pegarArquivoPagina ("blog.php")?>">Blog</a></li>
                            <li><a href="<?php echo pegarArquivoPagina ("contato.php")?>">Contato</a></li>
                        </ul>
        
                        <ul class="icones-sociais">
                            <li>
                                <a href="https://github.com/joaodasilva" class="github">
                                    github
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/joaodasilva" class="twitter">
                                    twitter
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com" class="linkedin">
                                   linkedin 
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </aside> 
        
        
        <main>

            

            <div>
                <article>

                    <h2>O essencial de design responsivo</h2>
                    <time datetime="2014-07-13">13 de julho de 2014</time>
                    <p>Design responsivo tem ganho cada vez mais atenção como técnica de desenvolvimento de páginas web para dispositivos móveis. Mas como começar?</p>
                    <a href="#" class="Leia-mais">Leia mais</a>
                    <footer class="tags">Tags: <a href="#">Desing responsivo</a>, <a href="#">mobile</a>, <a href="#">css</a></footer>
                    
                </article>

                <article>
                    <h2>Por que fazer páginas acessíveis?</h2>
                    <time datetime="2014-07-13">13 de julho de 2014</time>
                    <p>Tem se falado cada vez sobre acessibilidade na web. Há diversas técnicas e diretivas a serem seguidas, inclusive da própria W3C. Mas vale a pena investir nisso?
                    </p>
                    <a href="#" class="Leia-mais">Leia mais</a>
                    <footer class="tags">Tags: <a href="#">Desing responsivo</a>, <a href="#">mobile</a>, <a href="#">css</a></footer>
                    
                </article>

                <article>
                    <h2>JavaScript não obstrusivo</h2>
                    <time datetime="2014-07-13">13 de julho de 2014</time>
                    <p>JavaScript é uma linguagem essencial hoje em dia para criar páginas ricas, interativas e dinâmicas. Porém, há alguns cuidados que devem ser tomados ao colocarmos código JavaScript em nossas páginas.
                    </p>
                    <a href="#" class="Leia-mais">Leia mais</a>
                    <footer class="tags">Tags: <a href="#">Desing responsivo</a>, <a href="#">mobile</a>, <a href="#">css</a></footer>
                    
                </article>
            </div>

        </main>
  
        
        
        <footer>
        © João da Silva 2014
        </footer>

    </body>

</html>