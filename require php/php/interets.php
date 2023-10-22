<?php
$interets = [
    "Programmation créative", "Musique : Pratique de la guitare et de la composition musicale","Randonnée : Exploration des magnifiques paysages naturels en Belgique et ailleurs"
  ];
  ?>
  <h3>Centre d'interets<?php if (count($interets) > 1) { echo 's'; } ?></h3>
<?php if (!empty($interets)): ?>
    <ul>
        <?php foreach ($interets as $interet): ?>
            <li><?php echo $interet; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>