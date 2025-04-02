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
        "Science",
        "math",
        "English",
        "Grammar",
    ]
    ?>

                            <!-- 1st Method -->
                             <!-- Either -->
    <ul>
    <?php foreach ($books as $book){
            echo "<li>$book</li>";
    }
    ?>
    </ul>
                                        <!-- Better do 2nd Mehtod -->

                            <!-- 2nd Method -->
                             <!-- OR -->
     <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>    
     </ul>

    
</body>
</html>