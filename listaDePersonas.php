<html lang="es">
 <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>primera web</title>

 </head>
 <body>
     <div class="container-fluid">
         <header id="estilo">
             <?php

                $registro = array();

                $datosP0 = array();
                $datosP0 ["nombre"] = "Facundo";
                $datosP0 ["apellido"] = "Medina";
                $datosP0 ["edad"] = 19;
                $datosP0 ["email"] = "fakumedina1@hotmail.com";
                $datosP0 ["dni"] = 44219012;

                $datosP1 = array();
                $datosP1 ["nombre"] = "Axel";
                $datosP1 ["apellido"] = "Wilhelm";
                $datosP1 ["edad"] = "19";
                $datosP1 ["email"] = "axelwilhelm21@gmail.com";
                $datosP1 ["dni"] = 44214011;

                $datosP2 = array();
                $datosP2 ["nombre"] = "Lautaro";
                $datosP2 ["apellido"] = "Paez";
                $datosP2 ["edad"] = "20";
                $datosP2 ["email"] = "lautipaez@gmail.com";
                $datosP2 ["dni"] = 43100210;

                $datosP3 = array();
                $datosP3 ["nombre"] = "Thomas";
                $datosP3 ["apellido"] = "Lopez";
                $datosP3 ["edad"] = "21";
                $datosP3 ["email"] = "tomi_lopez@hotmail.com";
                $datosP3 ["dni"] = 42130698;

                $datosP4 = array();
                $datosP4 ["nombre"] = "Lucas";
                $datosP4 ["apellido"] = "Covas";
                $datosP4 ["edad"] = 23;
                $datosP4 ["email"] ="luki-covas@hotmail.com";
                $datosP4 ["dni"] = 40321147;


                $registro[0] = $datosP0;
                $registro[1] = $datosP1;
                $registro[2] = $datosP2;
                $registro[3] = $datosP3;
                $registro[4] = $datosP4;

                echo "<div class=\"row\">";
                echo "<div class=\"col-12 col-sm-4\"><h5>Nombre</h5></div>";
                echo "<div class=\"col-12 col-sm-2\"><h5>Apellido</h5></div>";
                echo "<div class=\"col-12 col-sm-2\"><h5>Edad</h5></div>";
                echo "<div class=\"col-12 col-sm-2\"><h5>Email</h5></div>";
                echo "<div class=\"col-12 col-sm-2\"><h5>DNI</h5></div>";
                echo "</div>";
                ?>

                <?php for ($i = 0; $i < count($registro); $i++) { ?>
                    <div class="row">
                    <div class="col-12 col-sm-4"><?php echo $registro[$i]["nombre"];?></div>
                    <div class="col-12 col-sm-2"><?php echo $registro[$i]["apellido"]; ?></div>
                    <div class="col-12 col-sm-2"><?php echo $registro[$i]["edad"];?></div>
                    <div class="col-12 col-sm-2"><?php echo $registro[$i]["email"];?></div>
                    <div class="col-12 col-sm-2"><?php echo $registro[$i]["dni"]; ?></div>
              <?php
                   }
               ?>
            <br><br><br>
            <h6> <a href="index.php">volver al menú principal</a></h6>
        
         </header>
        
     </div> 
   
  </body>
</html>
