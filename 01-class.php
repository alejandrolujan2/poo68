<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 01 - class</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-black  ">

    <main class="bg-red-200 h-[640px] w-[380px] rounded">
        <header class="flex justify-center items-center py-5 gap-5 bg-orange-300 rounded-t-md">
<a href="index.php">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-red-500 hover:-transalate-x-4m hover:scale-150 transition-all">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
      </svg>
      

</a>
<h1 class="text-2xl"> 01 - class</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[540px]">
<?php
     class Vehicle{
        // Atributes
        public $brand;
        public $refer;
        public $model;
        public $color;

        //Metodos
        public function setAtributes($brand, $refer, $model, $color){
            $this -> brand = $brand;
            $this -> refer = $refer;
            $this -> model = $model;
            $this -> color = $color;
        }
        public function getAtributes(){
           return "<div class='p-4 mb-4 flex-col ring-1 ring-white/50 rounded-md bg-white/20'>
                         <p><strong>Brand:</strong>        $this->brand</p>
                         <p><strong>Refer:</strong>        $this->refer</p>
                         <p><strong>Model:</strong>        $this->model</p>
                         <p><strong>Color:</strong>        $this->color</p>
                   </div>";

        }
     }
      $vehicle1 = new Vehicle;
      $vehicle1 -> setAtributes('volkswagen','tiguan',2023,'black');
      echo $vehicle1 ->getAtributes();

      $vehicle2 = new Vehicle;
      $vehicle2 -> setAtributes('mazda','cx-5',2021,'red');
      echo $vehicle2 ->getAtributes();

      $vehicle3 = new Vehicle;
      $vehicle3 -> setAtributes('nissan','versa',2023,'green');
      echo $vehicle1 ->getAtributes();

      $vehicle4 = new Vehicle;
      $vehicle4 -> setAtributes('ferrari','enzo',2005,'red');
      echo $vehicle4 ->getAtributes();

?>
        </section>
        <h1></h1>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>