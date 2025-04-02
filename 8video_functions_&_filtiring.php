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
  ]
  ?>
<!-- Remember use 3 equal to to show filter data for only newton author, if we use single equal 
 to then it will show all data -->

  <?php foreach ($books as $book) : ?> 
    <?php if($book['author'] === 'Newton') : ?> 
    <li><?= $book['name']; ?></li>
    <li><?= $book['author']; ?></li>
    <?php endif ?>
  <?php endforeach;  ?>



    
</body>
</html>