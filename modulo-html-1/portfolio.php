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
        <title>Portfolio - João da Silva</title>
        <meta charset="utf-8">
        <link rel="icon" href="../Alura/img/favicon.png">

        <!-- carrega a fonte Crimson Text nas versões normal, itálico e negrito -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
        
        <!-- carrega a fonte Open Sans Condensed na versão negrito, -->
        <!-- que é a única necessária para os cabeçalhos            -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">
        
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("reset.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("header.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("bio.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("posts.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("barra-lateral.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("citacao.css")?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("icones-sociais.css")?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS( "footer.css")?> ">
        
        
    </head>

    <body>
            
        <header>
            <h1 class="titulo">Portfolio</h1>
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
        
        
        <main class="container">
            
            <p>Veja abaixo a lista dos meus projetos mais relevantes.</p>

            <article>

                <figure>
                    <img src=" <?php echo pegarArquivoIMG ("IBM-site.png")?>" alt="print-IBM-site">
                </figure>

                <p><a href="">IBM Site</a></p> 

            </article>

            <article>
                <figure>
                        <img src=" <?php echo pegarArquivoIMG ("BMW-site.jpg")?>" alt="print-BMW-site">
                </figure>             
                
                <p><a href="">BMW Site</a></p> 

            </article>

            <article>
                <figure>
                    <img src="<?php echo pegarArquivoIMG ("UOL-site.png")?>" alt="print-UOL-site">
                </figure>

                <p><a href="">UOL Site</a></p> 
            </article>
            
            <article>
                <figure>
                    <img src=" <?php echo pegarArquivoIMG ("G1-site.png")?>" alt="print-g1-site">
                </figure>
                
                <p><a href="">G1 Site</a></p> 
            
            </article>
        </main>
  
        
        
        <footer>
        © João da Silva 2014
        </footer>

    </body>

</html>