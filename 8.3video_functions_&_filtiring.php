<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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
     
    function filterbyAuthor($books, $author){
        $filteredBooks = [];

        foreach($books as $book){
            if($book['author'] === $author){
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }
  ?>
<ul>
<?php foreach(filterbyAuthor($books, 'Newton') as $book) : ?>
<li><?= $book['name'] ?> => By <?= $book['author'] ?></li>  
  <?php endforeach ?>  
</ul>
<!-- Add $author or dont add , both are correct and gives same value . you can see in video 8.2 and 2.3
  -->
</body>
</html>