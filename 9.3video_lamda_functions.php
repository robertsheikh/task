<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
  ?>

  
    <ul>
        <?php foreach($filteredBooks as $book) : ?> 
        <li><?= $book['name'] ?> => By <?= $book['author'] ?></li>  
        <?php endforeach ?>  
    </ul>

</body>
</html>
<!-- If there is many data so we should not filter one by one, we have to use this method of filtration
 to create a short-cut mehtod. -->