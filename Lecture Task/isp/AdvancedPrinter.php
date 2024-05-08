<?php 
 require_once './Iprint.php';
 require_once './Iscan.php';
 require_once './Ixerox.php';
    class AdvancedPrinter implements Iprint , Iscan , Ixerox 
    {
        
        public function print(){
            return 'regular print....';
        }
        public function scan(){
            return 'scanning a document....';
        }
        public function xerox(){
            return 'xerox print....';
        }

    }
?>