<?php
   require_once "../src/models/vehicles/Vehicle.php";
   require_once "../src/models/way/HighWay.php";
   
   $car = new Car('red', 5,'electric');
   $car->setParkBrake(true);
   var_dump($car->switchOn());
   var_dump($car);
   try {
      $car->start($car);
   } catch (Exception $hasParkBrake){
      echo 'Une exception a été lancée. Message d\'erreur : ', $hasParkBrake->getMessage() . "<br>";
      $car->setParkBrake(false);
   }finally{
      echo 'Ma voiture roule comme un donut';
   }


   $bicycle = new Bicycle('orange', 1);
   var_dump($bicycle);
   var_dump($bicycle->dynamo(10));


    
    

    
