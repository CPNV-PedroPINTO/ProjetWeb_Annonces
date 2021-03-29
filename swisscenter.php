<?php
$strings = array(
    'fr' => array(
        'WELCOME' => "Bienvenue sur",
        'DEFAULT' => "Ceci est une page par défaut créé par SwissCenter.",
        'HELP' => "Vous ne voyez pas la page d'accueil de votre site ?",
        'SOLUTION' => "Supprimer la page \"swisscenter.php\" se trouvant à la racine du site, et utiliser un nom de page du type \"index.htm\", \"index.html\" ou \"index.php\". Pour mémoire, votre site doit être publié (déposé) dans le dossier pourtant le nom de votre domaine.",
        'WHAT' => "Qui est SwissCenter ?",
        'SWISSCENTER' => "SwissCenter est une société Suisse qui fournit des serveurs haute disponibilité et est reconnu par les professionnels du net pour sa fiabilité, la qualité de son conseil et de son savoir-faire, vous propose des services internet qui répondront à tous vos besoins."
    ),
    'en' => array(
        'WELCOME' => "Welcome on",
        'DEFAULT' => "This is a default page created by SwissCenter.",
        'HELP' => "You do not see the homepage of your site ?",
        'SOLUTION' => "Delete the \"swisscenter.php\" found at the root of the site and use a page name like \"index.htm\", \"index.html\" or \"index.php\". For memory, your site must be published in the folder, however the name of your domain.",
        'WHAT' => "What's SwissCenter ?",
        'SWISSCENTER' => "SwissCenter is a Swiss company that provides high availability servers which is universally considered by web professionals for the high reliability of its services, the quality of its support and its know-how. SwissCenter can provide you with all the Internet services you need."
    )
);

$http_accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$language = strtolower(substr($http_accept, 0, 2)) == 'fr' ? 'fr' : 'en';

$domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">
<head>
    <title><?php echo $strings[$language]['WELCOME'] ?> <?php echo $domain ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        <!--
        body { font-family: Arial, sans-serif; font-size: 14px; background: #f2f2f2; color: #363636; margin: 20px }
        h1 { font-size: 28px; font-weight: normal }
        h2 { color: #315677; font-size: 16px;  margin: 0; padding: 0 0 20px 0 }
        p { line-height: 20px; margin: 0 0 15px 0 }
        a { text-decoration: none; color: #315677 }
        a:hover { text-decoration: underline }
        .wrapper { width: 750px; margin: 0 auto }
        .welcome, .info, .help { padding: 20px 0; border-bottom: 1px solid #ddd }
        .welcome { margin-top: 50px }
        .logo { width: 163px; margin: 20px auto }
        -->
    </style>
</head>

<body>

<div class="wrapper">

    <div class="welcome">
        <h1><?php echo $strings[$language]['WELCOME'] . ' ' . $domain ?></h1>
        <p><?php echo $strings[$language]['DEFAULT'] ?></p>
    </div>
    <div class="help">
        <h2><?php echo $strings[$language]['HELP'] ?></h2>
        <p><?php echo $strings[$language]['SOLUTION'] ?></p>
    </div>
    <div class="info">
        <h2><?php echo $strings[$language]['WHAT'] ?></h2>
        <p><?php echo $strings[$language]['SWISSCENTER'] ?></p>
        <a href="https://www.swisscenter.com" target="_blank">https://www.swisscenter.com</a>
    </div>
    <div class="logo">
        <a href="https://www.swisscenter.com" target="_blank"><img src="https://www.swisscenter.com/theme/swisscenter/images/logo_swisscenter.png" alt="SwissCenter Logo" /></a>
    </div>

</div>

</body>
</html>