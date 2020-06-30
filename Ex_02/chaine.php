<html>
<meta charset ="utf-8">
<head>
<title> Chaine </title>
</head>

<body>
<?php
$str1 = "La maîtrise des fondamentaux  du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile"; {
    echo strlen ($str1);
    echo "<br>";
    echo str_word_count ($str1);
    echo "<br>";
    echo strtolower ($str1);
    echo "<br>";
    echo strtoupper ($str1);
    echo "<br>";
    echo str_shuffle ($str1);
}
?>
</body>

</html>