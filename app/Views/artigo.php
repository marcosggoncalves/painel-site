<!doctype html>
<html>

<head>
    <title><?=$titulo?></title>
    <meta charset="UTF-8">
    <link  rel="stylesheet" type="text/css" href="../siteStyle/css/variaveis.css">
    <link  rel="stylesheet" type="text/css" href="../siteStyle/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$artigo[0]['previa_artigo']?>">
    <meta name="robots" content="index">
    <meta name="author" content="<?=$artigo[0]['autor_artigo']?>">
    <meta name="keywords" content="<?=$artigo[0]['palavras_chaves_artigo']?>">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-layout">
                <div class="logo">
                   <img src="<?=$site['Cabeçalho']['img_page']?>" alt="<?=$site[0]['desc_page']?>">
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="/#home">Home</a>
                        </li>
                        <li>
                            <a href="/#serviços">Serviços</a>
                        </li>
                        <li>
                            <a href="/#depoimentos">Depoimentos</a>
                        </li>
                        <li>
                            <a href="/#artigos">Artigos</a>
                        </li>
                    </ul>
                </nav>
                <div class="btn-especial">
                    <a href="/#fale-conosco" >Fale Conosco</a>
                </div>
            </div>
        </div>
    </header>
    <main class="postagem">
        <section class='postagem-artigo container'>
            <div class="titulo-postagem">
             <h1><?=$artigo[0]['titulo']?></h1>
          </div>
          <div class="desc-postagem">
            <figure>
                <img src="../<?=$artigo[0]['img_artigo']?>" alt="">
            </figure>
            <?=$artigo[0]['publicacao_artigo']?>

            <div class="postagem-created">
                <p><em><?=$artigo[0]['autor_artigo']?> - <?= date_format(date_create($artigo[0]['created']),"Y/m/d H:i:s")?></em></p>
            </div>
          </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <p>&copy;Site instituicional - desenvolvimento 2019 - <?=date('Y')?> </p>
        </div>
    </footer>
</body>
</html>