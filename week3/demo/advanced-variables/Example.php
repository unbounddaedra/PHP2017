<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Example
 *
 * @author 001325415
 */
class Example 
{
   public $var = 'Example class test';
    
   public function sample($param)
   {
       echo 'this is the sample function';
   }
}

$egString = 'Example';

$eg = new $egString();

$eg->sample('');

echo '<br />';

echo "$egString - this is a test <br />";
echo '$egString - this is a test <br />';