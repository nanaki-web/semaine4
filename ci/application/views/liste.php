<!-- application/views/liste.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <p>Bonjour <?php echo $prenom," " ,$nom; ?> !</p>
    
        <ul>
        <?php foreach ($marque as $value)
        {
            echo '<li>'.$value.'</li>';
        }
        
        
        ?>
        </ul>
</body>
</html>
