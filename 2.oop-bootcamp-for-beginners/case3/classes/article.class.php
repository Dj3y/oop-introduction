<?php 
    require_once("classes/content.class.php");

    class article extends content{
        private bool $isBreakingNews;

        public function __construct(string $title, string $text, bool $isBreakingNews = false) {
            parent::__construct($title, $text);
            $this->isBreakingNews = $isBreakingNews;
        }

        public function getModifiedTitle(){
            if ($this->isBreakingNews) {
                return "BREAKING: " . $this->title;
            }
            return $this->title;
        }
    }