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
        <title>Biografia - João da Silva</title>
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
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("barra-lateral.css") ?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("citacao.css")?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS ("icones-sociais.css")?>">
        <link rel="stylesheet" href=" <?php echo pegarArquivosCSS( "footer.css")?> ">
        
        
    </head>
    
    <body>
        
        <header>
                <h1 class="titulo">Sobre mim</h1>
        </header>
        
        <aside class="navegacao-site">
    
            <figure>
                <img src="<?php echo pegarArquivoIMG ("eu.jpg")?>" alt="Foto João da Silva">
            </figure>
                
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

                <p>Moro em São Paulo mas atendo clientes do mundo todo. Sou conhecido por fazer produtos de <em>qualidade, durabilidade</em> e que <em>agregam valor</em> 
                    para meus clientes.
                </p>

                <p>Trabalho usando a web como plataforma, ou seja, respiro HTML5, CSS3 e JavaScript (ou melhor: ECMASCript). Crio sites para todos, seguindo as principais 
                    diretivas de acessibilidade, responsividade e web semântica, sem descuidar da qualidade de código.
                </p> 

            <h2>Como trabalho</h2>

                <blockquote class="citacao-bio-fiat">
                    <p>João é o melhor desenvolvedor front-end com quem já trabalhei. Muito eficiente e muito capaz. Recomendo sem dúvidas!</p>
                    <cite>José Souza, Fiat</cite>
                </blockquote>

                <p>Satisfazer meus clientes é prioridade. Para isso, garanto um processo de desenvolvimento altamente interativo, baseado em feedback contínuo. 
                <strong>Não trabalho com escopo fechado:</strong>  o cliente é que decide quando o produto está pronto.
                </p>

                <p>Também não trabalho com prazos fechados: <strong> qualidade é importante demais para ser sacrificada.</strong>
                </p> 

            <h2>Experiência</h2>

                <blockquote class="citacao-bio-petrobras">
                    <p>João domina as tecnologias como ninguém. Eu apresentava um problema, ele tinha na ponta da lingua a solução mais adequada com as tecnologias mais recentes. </p>
                    <cite>Manoel Santos, Petrobrás</cite>
                </blockquote>
                
            
                <p>Já desenvolvi projetos para grandes empresas como <a href="http://www.bmw.com/">BMW</a>, <a href="https://www.uol.com.br/">UOL</a> e <a href="https://www.ibm.com/br-pt">IBM</a> . Neles, o foco principal era entregar uma experiência imersiva e impactante 
                    para o usuário final sem descuidar do desempenho e da acessibilidade da página.
                </p>

                <p>Também já fui contratado para transformar grandes portais, como Terra e G1, em páginas responsivas. Fui responsável por renovar o layout, 
                    reorganizar o conteúdo e re-escrever o código de forma mais reaproveitável.
                </p>

            <h2>Comunidade</h2>

                <p>Procuro repassar meu conhecimento para a comunidade. 
                Para isso, já dei <a href="<?php echo pegarArquivoPagina ("portfolio.php")?>">diversas palestras</a> 
                e mantenho um <a href="<?php echo pegarArquivoPagina ("blog.php")?>">blog</a>.
                </p>

            </div>
        </main>

        <footer>
        © João da Silva 2014
        </footer>
    </body>

</html>
