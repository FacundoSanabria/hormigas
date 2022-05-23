<?php
    $matrix = getInputMatrix();
    $rows = count($matrix);
    $cols = count($matrix[0]);
    echo PHP_EOL."Entrada:".PHP_EOL;
    printMatrix($matrix, $rows, $cols);


    echo PHP_EOL.PHP_EOL."Salida".PHP_EOL;
    printMatrix($matrix, $rows, $cols);


    function getInputMatrix(){
        $inputFile = fopen("TestInputs/matrix1.json", "r") or die("Unable to open file!");
        $matrix = json_decode(fread($inputFile,filesize("TestInputs/matrix1.json")));
        fclose($inputFile);
        return $matrix;
    }

    function printMatrix($matrix, $rows, $cols){
        for($i=0; $i<$rows; $i++){
            for($j=0; $j<$cols; $j++){
                echo $matrix[$i][$j]." ";
            } 
            echo PHP_EOL;      
        }   
    }
?>