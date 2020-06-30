<html>
<head>
<title>Exo 1</title>
</head>

<body>
<?php
function update ($quantité){
    if ($quantité>0) {
        return true ;
    }
    if ($quantité<0) {
        return false ;
    }
    
}
?>

<?php
function restockage ($quantité ,$nb_ajout) {
    echo "$nb_ajout"; {
    return $quantité + $nb_ajout;
    }
}
?>

<?php
function achat ($quantité, $nb_achat) {
    echo "$nb_achat"; {
    return $quantité - $nb_achat;
    }
}
?>
</body>