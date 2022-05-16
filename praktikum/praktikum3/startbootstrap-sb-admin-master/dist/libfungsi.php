<?php 

function kelulusan($_nilai) {
    if($_nilai > 55) {
        return 'Anda Lulus';
    } else {
        return 'Anda tidak lulus, sorry';
    }
};
function grade($_nilai) {
    if ($_nilai >= 85){
        return "A";
    }elseif($_nilai >= 70){
        return "B";
    }elseif($_nilai >= 56){
        return "C";
    }elseif($_nilai >= 36){
        return "D";
    }elseif ($_nilai >= 10){
        return "E";
    }else{
        return "I(tidak ada nilai)";
    }
}


function predikat($peringkat) {
    switch ($peringkat) {
        case 'A': 
            echo "Sangat Memuaskan";
            break;
        case 'B': 
            echo "Memuaskan";
            break;
        case 'C': 
            echo "Cukup";
            break;
        case 'D': 
            echo "Kurang";
            break;
        case 'E': 
            echo "Sangat Kurang";
            break;
        default:
            echo "(I) Tidak Ada";
    }
}


?>