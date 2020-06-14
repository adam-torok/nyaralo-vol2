<!DOCTYPE html>
<html>
   <?php include_once("php_components/meta.php");?>
   <body>
   <?php include_once("php_components/loader.php")?>
   <?php include_once("php_components/navbar.php")?>
   <?php include_once("php_components/hero.php")?>
      <div class="container">
         <section class="articles">
         <?php include_once("php_components/whyus.php")?>
         <?php include_once("php_components/galery.php")?>
         <?php include_once("php_components/policy.php")?>
         <?php include_once("php_components/prices.php")?>
         </div>
      </div>
      <?php include_once("php_components/contactfooter.php")?>
      <?php include_once("php_components/modal.php")?>
      <script src="app.js"></script>  
   </body>
   <script>setTimeout(function() {
  $('#pageloader').fadeOut('slow');
}, 1500);

function openModal() {
    document.getElementById('myModal').style.display = "block";
  }
  
  function closeModal() {
    document.getElementById('myModal').style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("item-slide");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }
</script>
</html>