// cette ligne permet d'être sûr que le document est prêt à utiliser jQuery
$(function() {

        console.error('script chargé et pas prête');
    /*  
    Quand je clique sur un élément de la navigation, 
    le composant : 
    1. met en avant le lien sur lequel je viens de cliquer
    2. affiche l'image adéquate
    3. affiche le paragraphe adéquat
    */
    $("S.js-link a").on('EVENEMENT', function() {
        event.preventDefault();
        console.log('Click')
 });

});
$(function() {
    // Sélectionnez tous les liens de la classe js-links
    $(".js-links a").on('click', function(event) {
      // Empêchez le comportement par défaut du lien
      event.preventDefault();
  
      // Retirez la classe "active" de tous les liens
      $(".js-links a").removeClass("active");
  
      // Ajoutez la classe "active" au lien sur lequel vous avez cliqué
      $(this).addClass("active");
  
      // Récupérez l'index de l'élément sur lequel vous avez cliqué
      var index = $(this).data("index");
  
      // Masquez tous les articles et images
      $(".js-text article").removeClass("active");
      $(".js-images img").removeClass("active");
  
      // Affichez l'article et l'image correspondants à l'index
      $(".js-text article[data-index='" + index + "']").addClass("active");
      $(".js-images img[data-index='" + index + "']").addClass("active");
    });
  });
  
