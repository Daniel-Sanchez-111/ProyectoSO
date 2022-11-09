<?php

    	$user_agent = getenv("HTTP_USER_AGENT");
        if (!defined('BASE_PATH')) {
            if(strpos($user_agent, "Win") !== FALSE){
                define('BASE_PATH','http://localhost/ProyectoSO/');
            }else if(strpos($user_agent, "Mac") !== FALSE){
                define('BASE_PATH','http://localhost/ProyectoSO/');
            }
    
        }


?>