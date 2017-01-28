<?php
namespace Rabbit\Core;

class Application {

    /** @var  Application */
    private static $_instance;

    /**
     * @return Application
     */
    public static function getInstance(){
        if(self::$_instance != null && self::$_instance instanceof Application)
            return self::$_instance;
        self::$_instance = new Application();
        return self::$_instance;
    }

    public function run(){

    }

}