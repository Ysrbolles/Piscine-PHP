<?php
    include_once('IFighter.class.php');
    class NightsWatch implements IFighter{
       
        private $nr = array();
        public function recruit($obj){
            if(class_implements($obj)['IFighter'])
                $this->nr[] = $obj;
           
        }
        public function fight(){
            foreach($this->nr as $warrior)
            {
                if(method_exists(get_class($sleeper), 'fight'))
                    $warrior->fight();
            }
        }
    }
?>