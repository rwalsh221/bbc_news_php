<?php 

declare(strict_types=1);

namespace App;

class GetLorem {

    private const LOREM_URL = 'https://baconipsum.com/api/?type=meat-and-filler';


    private function requestLorem (string $url = self::LOREM_URL): string
    {
       return file_get_contents($url);
    }

    private function formatLorem (string $lorem): string {
        return substr($lorem, 2, strlen($lorem) - 4);
    }

    public function getLorem ():string {
        $lorem = $this->requestLorem();

        $formatLorem = $this->formatLorem($lorem);

        return $formatLorem;
    }

    private function myfunction($v1,$v2)
    {
    return $v1 . " " . $v2;
    }

    protected function formatHtml($randMin, $randMax) 
    {

        

        $test = $this->getLorem();

        $randomNumber = rand($randMin, $randMax);

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