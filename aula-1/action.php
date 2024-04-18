<?php
$chose = $_POST["chose"];
$machineChose = rand(1, 3);
$win = "";

switch ($machineChose) {
    case 1:
        $machineChose = "pedra";
        $win = "papel";
        break;
    case 2: 
        $machineChose = "papel";
        $win = "tesoura";
        break;
    default:
        $machineChose = "tesoura";
        $win = "pedra";
        break;
}

if ($chose == $machineChose) {
    echo "empate";
} elseif ($chose == $win) {
    echo "você venceu";
} else {
    echo "Você perdeu";
}

?>