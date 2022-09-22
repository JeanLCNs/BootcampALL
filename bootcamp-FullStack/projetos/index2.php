<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery Accordion teste</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>
<body>
 
<div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>Até a 2</p>
    <?php
        for ($i = 0; $i < 3; $i++){
            print( "Linha número " . $i . "<br/>" );
        }
    ?>
  </div>

  <h3>Section 2</h3>
  <div>
    <p>Até a 4</p>
    <?php
        for ($i = 0; $i < 5; $i++){
            print( "Linha número " . $i . "<br/>" );
        }
    ?>
  </div>

  <h3>Section 3</h3>
  <div>
   <p>Até a 6</p>
    <?php
        for ($i = 0; $i < 7; $i++){
            print( "Linha número " . $i . "<br/>" );
        }
    ?>
  </div>

  <h3>Section 4</h3>
  <div>
    <p>Até a 9</p>
    <?php
        for ($i = 0; $i < 10; $i++){
            print( "Linha número " . $i . "<br/>" );
        }
    ?>
  </div>
</div>
 
 
</body>
</html>