<?php
namespace coldstarstudios\framework;

/**
 * This class is used to create the application path tag inside the template.
 *
 * @author Marcos Sigueros Fernández
 * @license MIT
 */
class Path {
    function __construct() {
        
    }
    
    function __toString() {        
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
            $path = '';
            
            if(isset($_SERVER["HTTPS"]))
                $path .= 'https://';
            else
                $path .= 'http://';
            
            $path .= $_SERVER['HTTP_HOST'];
            $clean = preg_split("/\?/", $_SERVER['REQUEST_URI']);
            $path .= str_replace($page, '', $clean[0]);
           
            $path = str_replace($_SERVER['QUERY_STRING'], '', $path);
            
            return $path;
        } else
            return '';
    }
}