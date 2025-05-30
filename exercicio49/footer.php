<?php
    $copyright = "© 2023 - Todos os direitos reservados.";
    $version = "Versão 1.0.0";
?>

<footer>
    <p><?php echo $copyright; ?></p>
    <p><?php echo $version; ?></p>
</footer>

<style>
    footer {
        background-color: #f1f1f1;
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    p {
        margin: 5px 0;
        color: #555;
    }
    p:first-child {
        font-weight: bold;
    }
    p:last-child {
        font-style: italic;
    }
    footer p {
        margin: 0;
    }
    footer p:first-child {
        font-weight: bold;
    }
    footer p:last-child {
        font-style: italic;
    }
</style>