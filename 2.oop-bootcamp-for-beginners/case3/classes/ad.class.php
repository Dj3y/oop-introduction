<?php 
    require_once("classes/content.class.php");

    class ad extends content{
        public function getModifiedTitle(){
            return strtoupper($this->title);
        }
    }