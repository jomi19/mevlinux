<nav class="nav-bar">
    <ul>
<?php
$navbar= [
    "Me" =>  [
        "icon" => "fas fa-home",
        "file" => "index.php",
    ],
    "Redovisning" => [
        "icon" => "far fa-file",
        "file" => "redovisning.php",
    ],
    "Om" => [
        "icon" => "far fa-question-circle",
        "file" => "om.php",
    ],
];

foreach ($navbar as $key => $value) : ?>
    <li><a href="<?=  $value["file"] ?>" class="<?= selectedSite($value["file"]) ?>" ><i class="<?= $value["icon"] ?>"></i> </a></li>
<?php endforeach; ?>
</ul>
</nav>
