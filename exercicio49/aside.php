<?php
    $categorias = [
        'Culinária',
        'Tecnologia',
        'Saúde',
        'Viagens',
        'Educação',
    ];
?>

<aside>
    <h2>Categorias</h2>
    <ul>
        <?php foreach ($categorias as $categoria): ?>
            <li><?php echo $categoria; ?></li>
        <?php endforeach; ?>
    </ul>
</aside>

<style>
    aside {
        background-color: #f9f9f9;
        padding: 30px;
        border: 1px solid #ddd;
        height: 100vh;
    }
    
    h2 {
        color: #333;
    }
    
    ul {
        list-style-type: none;
        padding: 0;
    }
    
    li {
        padding: 5px 0;
        color: #555;
    }
    li:hover {
        background-color: #e0e0e0;
    }
</style>