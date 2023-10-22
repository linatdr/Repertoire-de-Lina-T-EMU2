<?php
$langues = ["Français (courant)",
"Anglais (avancé)",
"Néerlandais (notions)"];
?> 
<h3>langues<?php if (count($langues) > 1) { echo 's'; } ?></h3>
<?php if (!empty($langues)): ?>
    <ul>
        <?php foreach ($langues as $langue): ?>
            <li><?php echo $langue; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>