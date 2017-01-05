<?php
require_once 'include/functions.php';
sec_session_start();
$append = "Jonathan Sundqvist";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title." - ".$append;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <?php
    if (isset($styles_include) && is_array($styles_include) && count($styles_include) > 0) {
        foreach ($styles_include as $style) {
            echo "<link href='css/".$style."' rel='stylesheet'>";
        }
    }
    ?>
</head>

<body>
    <div class="brand"><img src="img/logga.png" alt="Logga"><br><?php echo $append; ?></div>
    <div class="address-bar">Gatan 1 | 37136, Staden | 012-34 56 78</div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo $append; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Hem</a>
                    </li>
                    <li>
                        <a href="report.php">Redovisning</a>
                    </li>
                    <li>
                        <a href="game.php">Spelet</a>
                    </li>
                    <li>
                        <a href="highscores.php">Poängtavla</a>
                    </li>
                    <li>
                        <a href="source.php">Källkod</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>