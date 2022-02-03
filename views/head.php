<!doctype html>
<html lang="en-US"> 
<head>
<title><?=$title?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:type" content="website">
<meta property="og:locale" content="en">
<meta property="og:title" content="<?=$label?>">
<meta property="og:description" content="<?=$description?>">
<meta property="og:url" content="<?=$domain?>">
<meta property="og:image:width" content="<?=$width?>">
<meta property="og:image:height" content="<?=$height?>">
<meta property="og:image" content="<?=$cover?>">
<?=$csrf?>
<meta name="apple-mobile-web-app-title" content="<?=$label?>">
<meta name="application-name" content="<?=$description?>">
<meta name="msapplication-TileColor" content="<?=$msColor?>">
<meta name="msapplication-config" content="<?=$path?>browserconfig.xml">
<meta name="theme-color" content="<?=$color?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?=$path?>apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=$path?>favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=$path?>favicon-16x16.png">
<link rel="manifest" href="<?=$path?>manifest.json">
<link rel="mask-icon" href="<?=$path?>safari-pinned-tab.svg" color="<?=$svgColor?>">
<link rel="shortcut icon" href="<?=$path?>favicon.ico">
<?=$this->head()?>
</head>
