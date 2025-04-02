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
      
    $filterByAuthor = function($books, $author){
        $filteredBooks = [];

        foreach($books as $book){
            if($book['author'] === $author){
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    };
    $filteredBooks = $filterByAuthor($books, 'Newton');
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