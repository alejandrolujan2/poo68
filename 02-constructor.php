<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - constructor</title>
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
<h1 class="text-2xl">02 - constructor</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[540px]">
<?php
     class playlist {
           // Atributes
           private $name;
           private $artista= array();
           private $album= array();
           private $cover= array();
           private $year= array();
           // Metodos
           public function __construct($name){
                  $this->name = $name;
           }
           public function setplaylist($artista,$album,$cover,$year){
                  $this-> artista[] = $artista;
                  $this-> album[] = $album;
                  $this-> cover[] = $cover;
                  $this-> year[] = $year;

           }
           public function getplaylist(){
                 echo "<div class='p-2 ring-1 ring-white/80 rounded-lg '>
                 <h2 class='text-center tex-2xl my-4'> $this->name </h2>";
                 for($i=0; $i < count($this->artista); $i++){
                 echo "<div class= 'mb-4 p-2 flex text-black/80 flex-col gap-4 bg-black/40 rounded-md'>
                   <p>".$this->album[$i]."</p>
                   <img src='".$this->cover[$i]."' alt='cover' witd='280px'>
                   <p>".$this->artista[$i]."</p>
                   <p>".$this->year[$i]."</p>
                   
                 </div>";
           }
                 "</div>";


           }


     }
$myplaylist = new playlist ('my favorite music');

$myplaylist -> setplaylist ( 'rituals','ghostemane','https://tinyurl.com/3dm7hmbm',2016);
$myplaylist -> setplaylist ( 'trench','TØP','https://tinyurl.com/2rezj87j',2018);
$myplaylist  -> setplaylist ( 'thriller','michael jackson','https://tinyurl.com/48b2kur5',1982);
$myplaylist -> setplaylist ('true','avicci','https://tinyurl.com/udjt6xd6',2013);
$myplaylist ->  setplaylist ('news of the world','Queen','https://tinyurl.com/3c8fm9mr',1977);
 $myplaylist-> getplaylist();
 
?>
        </section>
        <h1></h1>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>