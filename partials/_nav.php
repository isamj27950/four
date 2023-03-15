<?php
$navItems = [
    [
        "name"=> "les recettes sucrées",
        'url'=> "sucres.php"
    ],
    [
        "name"=> "les recettes salées",
        'url'=> "sales.php"
    ],
    [
        "name"=> "Ajouter une recette",
        'url'=> "add-recette.php"
    ],
    
    
]

?>

<nav class="">
				
                <?php
                foreach ($navItems as $navitem) { ?>
                 <a href=<?= $navitem["url"] ?> class="nav_padding_left pl-5 hover:underline hover:text-[#B4FFD8] "><?= $navitem["name"] ?></a>
                <?php } ?>   
            </nav>