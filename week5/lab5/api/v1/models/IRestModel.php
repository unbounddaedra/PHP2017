<?php


interface IRestModel 
{

    
    function getAll();

    function get($id);

    function post($serverData);

    function delete($id);

    function put($id, $serverData);
}
