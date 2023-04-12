<?php
namespace App\Controler;
class controlUrl{
    public function getUrl($url){
        $arrayUrl=explode('?', $url);
    return $arrayUrl[0];
    }
}