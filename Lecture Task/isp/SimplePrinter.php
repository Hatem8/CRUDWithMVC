<?php 
    require_once './Iprint.php';

    class SimplePrinter implements Iprint
    {   

        public function print(){
            return 'regular print....';
        }

    }
?>