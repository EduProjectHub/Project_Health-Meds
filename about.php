<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre Nosotros</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>¿Por qué debería escogernos?</h3>
         <p>
         Nuestra prioridad es ofrecer soluciones de salud innovadoras y confiables que mejoren la calidad de vida de los pacientes. Nos destacamos por nuestra dedicación a la excelencia en la investigación y desarrollo, asegurando la producción de medicamentos de alta calidad y eficacia. Nuestra empresa se compromete con la ética, la transparencia y el cumplimiento de los más altos estándares regulatorios, garantizando la seguridad y la eficacia de nuestros productos. Además, contamos con un equipo altamente calificado y comprometido con la atención al cliente, brindando un servicio excepcional y estableciendo relaciones a largo plazo con profesionales de la salud y socios comerciales. Elegirnos significa optar por la excelencia en la atención médica y la confiabilidad en cada producto que ofrecemos.
         </p>
         <a href="contact.php" class="btn">Contactanos</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Reseñas de clientes</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/man-1.png" alt="">
         <h1>Innovación en Salud</h1>
         <p>Ofrecemos soluciones médicas vanguardistas, impulsadas por la innovación constante. Nuestros medicamentos reflejan la última investigación y desarrollo para mejorar la atención y el bienestar del paciente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Juan Delgado</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/man-2.png" alt="">
         <h1>Compromiso con la Calidad</h1>
         <p>Nos enorgullece producir medicamentos de la más alta calidad, garantizando la eficacia y la seguridad. Cumplimos con los estándares más rigurosos para brindar confianza a profesionales de la salud y pacientes</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Miguel Ortiz</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/mujer-1.png" alt="">
         <h1>Ética y Transparencia</h1>
         <p>Nuestra empresa se rige por principios éticos sólidos y una transparencia inquebrantable. Priorizamos la integridad en todas nuestras operaciones, desde la investigación hasta la producción y distribución de medicamentos.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sara Lopez</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/man-4.png" alt="">
         <h1>Atención al Cliente Excepcional</h1>
         <p>Contamos con un equipo altamente capacitado y comprometido con brindar un servicio excepcional. Estamos dedicados a establecer relaciones sólidas y duraderas con profesionales de la salud y colaboradores.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Cristian Runza</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/mujer-2.png" alt="">
         <h1>Cumplimiento Regulatorio</h1>
         <p>Garantizamos el cumplimiento estricto de todas las normativas y requisitos regulatorios. La seguridad de nuestros productos es primordial, y trabajamos incansablemente para cumplir con los estándares de la industria y las autoridades sanitarias.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Daniela Jimenez</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>