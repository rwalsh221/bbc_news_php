<?php 

declare(strict_types=1);

class GetMeat {

    private const MEAT_URL = 'https://baconipsum.com/api/?type=meat-and-filler';

    public function requestMeat (string $url = self::MEAT_URL)
    {
       return file_get_contents($url);
        // return file_get_contents($url);
    }

}


?>