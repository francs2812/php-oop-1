<?php
    class Movie {
        public $title;
        public $years;
        public $duration;
        public $author;
        public $description;

        

        // COSTRUTTORE
        function  __construct($title, $years, $duration, $author, $description) {
            $this->title = $title;
            $this->years = $years;
            $this->duration = $duration;
            $this->author = $author;
            $this->description = $description;
        }
        //METODI

        public function cover_costruct() {
            return $this->title .".jpg" ;
        }
    }