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
        'name' => 'Radiation',
     'author' => 'Madam Curie',
     ]
  ]
  ?>

  <?php foreach ($books as $book) : ?>
    <li><?= $book['name']; ?></li>
    <li><?= $book['author']; ?></li>
  <?php endforeach;  ?>



    
</body>
</html>