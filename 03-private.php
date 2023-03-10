<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - private</title>
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
<h1 class="text-2xl">03 - private</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[540px]">
        <h2 class="text-center text-2xl mb-6">Table Maker</h2>    
        <form class="p-2 mb-4 grid grid-cols-2 justify-center gap-4 ring-1 bg-white/20 ring-white/50 rounded-md" action="" method="post">
                <div class="flex flex-col items-center gap-4">
                    <label>Rows:</label>
                    <input type="range" name="nr" min="1" max="25" step="1" 
                           value="10" oninput="onr.value=this.value">
                    <output id="onr" class="text-2xl">10</output>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <label>Columns:</label>
                    <input type="range" name="nc" min="1" max="25" step="1" 
                           value="10" oninput="onc.value=this.value">
                    <output id="onc" class="text-2xl">10</output>
                </div>
                <button class="p-2 bg-blue-600 w-[324px] rounded-md hover:scale-95 transition">Make Table</button>
            </form>
            <?php
                class Table {
                    private $nr;
                    private $nc;

                    public function __construct($nr, $nc) {
                        $this->nr = $nr;
                        $this->nc = $nc;
                        $this->makeTable();
                    }
                    private function makeTable() {
                        echo "<table class='border-collapse mx-auto'>";
                        for($r = 1; $r <= $this->nr; $r++) {
                            echo "<tr>";
                            for($c = 1; $c <= $this->nc; $c++) {
                                echo "<td class='p-2 ring-1 ring-white/50 bg-black/40'> </td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                if ($_POST) {
                    $table = new Table($_POST['nr'], $_POST['nc']);
                }
            ?>
        </section>
        <h1></h1>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>