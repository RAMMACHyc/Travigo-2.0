<?php 
        $loginUser = new admincontroller();
        $loginUser->logout();
        Redirect::to('login');
        

?>