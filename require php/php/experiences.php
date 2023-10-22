<?php
$experiences = ["Avril 2016 - Présent : Développeur Front-End, Société TechVision, Bruxelles", 
"Juin 2015 - Mars 2016 : Stagiaire en Développement Web, Startup WebCraft, Liège"];
?>
<h3>experiences<?php echo (count($experiences) == 1) ? 'experience professionnelle': 'experience professionnelle'; ?></h3>

<li>Avril 2016 - Présent : Développeur Front-End, Société TechVision, Bruxelles
      <ul>
        <li>Conception et développement d'interfaces utilisateur pour des applications web et mobiles en utilisant HTML, CSS et JavaScript.</li>
        <li>Collaboration étroite avec les designers pour transformer des maquettes en interfaces interactives et conviviales.</li>
        <li>Expérience dans la mise en œuvre de projets Agile, avec des sprints et des réunions de planification et de rétrospective.</li>
        <li>Utilisation de frameworks tels que React et Vue.js pour créer des expériences utilisateur dynamiques et réactives.</li>
        <li>Intégration de services RESTful et utilisation de Git pour le contrôle de version.</li>
      </ul>
    </li>
    <li>Juin 2015 - Mars 2016 : Stagiaire en Développement Web, Startup WebCraft, Liège
      <ul>
        <li>Assistance dans la création d'une application web responsive utilisant les dernières technologies front-end.</li>
        <li>Participation à l'optimisation des performances du site et à l'assurance de sa compatibilité avec différents navigateurs.</li>
        <li>Contribution à la mise en place d'une méthodologie de développement Agile au sein de l'équipe.</li>
      </ul>
    </li>
  </ul>
  <?php if (!empty($experiences)): ?>
    <?php foreach ($experiences as $experience): ?>
        <p><?php echo $experience; ?></p>
    <?php endforeach; ?>
<?php endif; ?>