<?php
$numeroCertificado = urldecode($_GET['numeroCertificado']);

if(!$numeroCertificado){ ?>
    <meta http-equiv="refresh" content="0; URL='<?php echo $pathUrl;?>/404'"/>
<?php exit; } ?>


<head>
    <title><?php echo $titleStart; ?> Certificado #<?php echo $numeroCertificado;?></title>
</head>


<body>
  <style>
    .iframe-container {
      position: relative;
      overflow: hidden;
      padding-top: 56.25%;
    }
    .iframe-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }
  </style>

  <div class="iframe-container">
    <iframe src="<?php echo $_ENV["BASE_URL_API_N8N"].'/ver?numeroCertificado='.$numeroCertificado ?>" frameborder="0"></iframe>
  </div>
</body>