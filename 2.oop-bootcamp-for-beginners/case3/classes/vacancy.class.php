<?php
    require_once("classes/content.class.php");
    
    class vacancy extends content {
        public function getModifiedTitle(){
            return $this->title . " - apply now!";
        }
    }