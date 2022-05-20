<?php

declare(strict_types=1);

namespace App;

class PrimaryArticle extends GetLorem {

    function myfunction($v1,$v2)
    {
    return $v1 . " " . $v2;
    }

    public function formatHeading() 
    {

        

        $test = $this->getLorem();

        $randomNumber = rand(6, 10);

        $testArray = str_word_count($test,1);

        $testArray2 = array_slice($testArray, 0, $randomNumber);

        // echo 
        // var_dump(array_reduce($testArray2, array($this,'myfunction')));
        // var_dump($testArray2);

        if (substr($test, $randomNumber, 1) === ' ') {
            // echo $randomNumber;
            $randomNumber +=1;
        }

        return array_reduce($testArray2, array($this,'myfunction'));
    }
}
?>