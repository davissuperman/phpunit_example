<?php
namespace phpUnitTutorial;
class URL{
    public function strMd5($str){
        $str = str_replace('a','b',$str);
        return $str;
    }
}