<?php


class DBSpring extends DB {

    

    function __construct() {

        $this->setDns('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017');
        $this->setPassword('');
        $this->setUser('root');
    }

}
