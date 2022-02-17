<!-- Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina
 ci saranno tutti i dischi. -->

<?php
$database = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- header -->
    <header class="container-fluid">
        <div class="row">
        <div  class="d-flex align-items-center col-12">
            <div class="logo p-2">
                <img src="Logo.png" alt="">
            </div>
        </div>
        </div>
    </header>
    <!-- main -->
    <main class="container m-auto mt-5 mb-5">
        <div class="row">
            <div class="col">
                <section class="container">
                    <div class="d-flex flex-wrap" >
                        <div class="soundtrack text-center col-2 m-3">
                            <?php 
                            foreach ($database as $element){
                            
                            echo'<div class="containerImg m-auto p-3">
                                    <img src='.$element["poster"].'>   
                                </div>'; 
                            echo '<h4 class="p-2 text-uppercase text-white">'
                                .$element["title"].'</h4>';
                            echo '<div class="author">'
                            .$element["author"].'</div>';
                            echo '<div class="year">'
                                 .$element["year"].'</div>';
                            }
                            ?>
                        </div>
                    </div>
                </section>   
            </div>
        </div>
    </main>
</body>
</html>