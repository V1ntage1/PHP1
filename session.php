<?php
    session_start();
    
    if(empty( $_SESSION['rand'])){
        $_SESSION['rand']  = random_int(1,20);
    }
        
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
             if(isset($_POST['singin'])){
                
                
                $m = trim(($_POST['m']));
                if($m == $_SESSION['rand']){
                    $_SESSION['m'] =  true;

                }else{
                    $_SESSION['m'] =  false;
                }
            }

            if(isset($_POST['logout'])){

                session_destroy();
            }
            header('Location: ' . $_SERVER['SCRIPT_NAME']);
            exit;
         }
        

    ?>