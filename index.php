<?php 


  $books = [
     [
        'name' => 'Blackhole',
        'author' => 'Stephen Hawking',
     ],
     [
        'name' => 'Relativity',
        'author' => 'Einstein',
     ],
     [
        'name' => 'Force',
        'author' => 'Newton',
     ],
     [
        'name' => 'Gravity',
        'author' => 'Newton',
     ],
     [
        'name' => 'Radiation',
        'author' => 'Madam Curie',
     ]
     ];
      
    function filter($items,$fn){
        $filteredItems = [];

        foreach($items as $item){ 
            if($fn($item)){
                $filteredItems[] = $item;
            } 
        }
        return $filteredItems;
    };
    $filteredBooks = array_filter($books,function($book){
        return $book['author'] === "Newton";
    });

// include "index.view.php";
require "index.view.php";
?>