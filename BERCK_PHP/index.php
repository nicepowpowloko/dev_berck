<html>
<body>


<?php include("./index2.php"); ?>


<p>bonjour</p>
<?php
$numbers = array(1.5, 2.4, 3.1, 4.2);

$total = 0;
foreach ($numbers as $number) {
    $total += $number;
}

echo $total; // affiche "11.2"
?>

<style>
    p{
        color: greenyellow;
    }
</style>


</body>
</html> 