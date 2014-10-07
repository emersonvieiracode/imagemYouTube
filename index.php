<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Obter miniatura do youtube através da URL</title>
</head>
<body>
  <?php
  // $tipo aceita: default, 0, 1, 2 e 3 como parâmetro
  function imagemYouTube($url, $tipo = 0){
      // cria um array com várias informações da url
      $yt_link = parse_url($url);
      // verifica se no array existe a chave query
      // e verifica se o parâmetro $tipo é aceito
      if (isset($yt_link['query']) && in_array($tipo, array(0,1,2,3,'default'))){
          // transforma a querystring em um array associativo
          parse_str($yt_link['query'], $video);
          // verifica se tem a chave v no array $video
          if (isset($video['v'])){
              // retorna o link da imagem de acordo com o tipo
            return 'http://i1.ytimg.com/vi/'.$video['v'].'/'.$tipo.'.jpg';
          }
      }
      // retorna false. Pode ser trocado por um link
      // de uma imagem padrão
      // use como abaixo para isso
      // return 'http://endereco-da-imagem-padrao/imagem.jpg';
      return false;
  }
  ?>
  
    <!--
    Modo de Aplicação
    o segundo parametro passado é o $tipo
    asdasdasd
    -->
    <img src="<?php echo imagemYouTube($rowVideos->url, '1')?>" class="form">
</body>
</html>
