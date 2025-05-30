<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu blog</title>
</head>
<body>
    <div id="container-upper-layout">
        <?php
            include_once 'aside.php';
        ?>

        <?php
            include_once 'header.php';
        ?>
    </div>

    <main>
        <h1>Em construção</h1>
    </main>

    <?php
            include_once 'footer.php';
    ?>

    <style>
        main {
            position: absolute;
            left: 25vw;
            top: 25vh;
            padding: 20px;
        }
        #container-upper-layout {
            display: flex;
            align-items: start;
        }
    </style>
</body>
</html>