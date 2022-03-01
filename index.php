<?php
 include 'libs/load.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sakil Portfolio</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <div class="site-main-wrapper">
    <?php load_templates('_header') ?>

    <?php load_templates('_about') ?>


    <?php load_templates('_services') ?>


    <?php load_templates('_freelancer') ?>


    <?php load_templates('_reviews') ?>


    <?php load_templates('_work') ?>


    <?php load_templates('_blog') ?>


    <?php load_templates('_contact') ?>


    <?php load_templates('_footer') ?>

  </div>

  <!-- javascript -->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="./js/app.js"></script>
  <script>
    let mainImage = document.getElementById('sakil');
    // let text = document.getElementById('');
    // let text = document.getElementById('');

    window.addEventListener('scroll', function() {
      let value = window.screenY;

      mainImage.style.top = 50 + value * -0.5 + '%';
      // text.style.top = 50 + value * -0.5 + '%';
      // text.style.top = 50 + value * -0.5 + '%';
      // text.style.top = 50 + value * -0.5 + '%';
    })
  </script>
</body>

</html>