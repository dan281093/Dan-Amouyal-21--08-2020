#unieq_names

<?php
    class dragonBall{
        private $ballCount;

        public function __construct(){
            $this->ballCount=0;
        }

        public function iFoundaBall(){
            $this->ballCount++;
            if($this->ballCount===7){
                //I count to 7. When I am at 7 we ask the question.
                echo "You can ask for your wish.";
                $this->ballCount=0;
                // I start from 0 now
            }
        }
    }
?>