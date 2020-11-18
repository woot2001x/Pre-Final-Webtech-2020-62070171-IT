<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php

            $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
            $response = file_get_contents($url);
            $result = json_decode($response);


            for ($i = 0; $i <= 19; $i++) {
                $countcountry = sizeof($result->tracks->items[$i]->album->available_markets);
                echo '<div class="col-4">';
                echo '<div class="card">';
                echo '<img class="card-img-top" src=" ' . $result->tracks->items[$i]->album->images[0]->url . '">';
                echo '<div class="card-body">';
                echo '<h4 class="card-title">' . $result->tracks->items[$i]->album->name . '</h4>';
                echo '<p class="card-text">Artist: ' . $result->tracks->items[$i]->album->artists[0]->name . '';
                echo '<p class="card-text">Release Date: ' . $result->tracks->items[$i]->album->release_date . '';
                echo '<p class="card-text">Avaliable: ' . $countcountry . ' Countries';
                echo "</div></div></div>";
            }
            echo "</div>";

            ?>
        </div>
    </div>
</body>

</html>