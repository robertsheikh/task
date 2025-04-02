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
    function filterbyAuthor(){
        return "gebrrish";
    }
  ?>

    <?= filterbyAuthor(); ?>
</body>
</html>