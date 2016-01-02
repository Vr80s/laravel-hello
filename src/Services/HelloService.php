<?php
namespace Vr80s\LaravelHello\Services;

class HelloService {

    protected $num = 1;

    public function hello(){
        return 'hi LaravelHello v1.0.2>, num = '.$this->num;
    }

    public function getNum(){
        return $this->num;
    }

    public function setNum($int){
        $this->num = $int;
    }

}
