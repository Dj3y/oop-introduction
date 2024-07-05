<?php
    abstract class content{
        protected string $title;
        protected string $text;

        public function __construct(string $title, string $text){
            $this->title = $title;
            $this->text = $text;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getText(){
            return $this->text;
        }

        abstract public function getModifiedTitle();
        public function display(){
            echo "<div>";
            echo "<h1>{$this->getModifiedTitle()}</h1>";
            echo "<p>{$this->text}</p>";
            echo "</div>";
        }
    }