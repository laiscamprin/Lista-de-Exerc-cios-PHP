 <?php
if(isset($_GET['numero'])) {
    $num = (int)$_GET['numero']; // Pega o número do formulário
    echo "<h1>Tabuada do $num</h1>";
    for($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
    exit; 
}
?>

