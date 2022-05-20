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

}


?>