<?php
    $inputMatrix = getInputMatrix();
    $rows = count($inputMatrix);
    $cols = count($inputMatrix[0]);

    $outputMatrix = [];
    for($i=0; $i<$rows; $i++){
        $outputMatrix[$i] = [];
        for($j=0; $j<$cols; $j++){
            $neighbours = calculatNeighbours($inputMatrix, $rows, $cols, $i, $j);
            if($neighbours == 3 || ($neighbours == 2 && $inputMatrix[$i][$j] == 1)){
                $outputMatrix[$i][$j] = 1;
            }
            else{
                $outputMatrix[$i][$j] = 0;
            }  
        }     
    }  

    printMatrix($outputMatrix, $rows, $cols);

    function calculatNeighbours($inputMatrix, $rows, $cols, $i, $j){
        $neighbours = 0;
        if($i!=0){
            $neighbours += $inputMatrix[($i-1)][$j]; 
            if($j!=0){
                $neighbours += $inputMatrix[($i-1)][($j-1)]; 
            }
            if($j<$cols-1){
                $neighbours += $inputMatrix[($i-1)][($j+1)];
            }
        }
        if($j != 0){
            $neighbours += $inputMatrix[($i)][$j-1]; 
            if($i<$rows-1){
                $neighbours += $inputMatrix[($i+1)][($j-1)]; 
            }
        }
        if($i<$rows-1){
            $neighbours += $inputMatrix[($i+1)][($j)];
            if($j<$cols-1){
                $neighbours += $inputMatrix[($i+1)][($j+1)]; 
            }
        }
        if($j<$cols-1){
            $neighbours += $inputMatrix[($i)][($j+1)];
        }
        return $neighbours;
    }

    function getInputMatrix(){
        $inputFile = fopen("TestInputs/test6.json", "r") or die("Unable to open file!");
        $matrix = json_decode(fread($inputFile,filesize("TestInputs/test6.json")));
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