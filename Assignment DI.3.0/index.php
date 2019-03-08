<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Assignment DI.3.0</title>
      </head>
      <body>
            <h1>Assignment DI.3.0 | Drilon Braha</h1>

            <hr>
            <h2>Books in store:</h2>
            <?php
                  $xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
                  // var_dump($xml);
                  foreach ($xml->children() as $key) {

                        echo "title: " . $key->title . "<br>";
                        echo "edition: " . $key->edition . "<br>";
                        echo "author: " . $key->authors->author->firstname . " " . $key->authors->author->lastname . "<br>";
                        echo "publisher: " . $key->publisher->name . " " . $key->publisher->year . " " . $key->publisher->place . "<br>";
                        echo "price: €" . $key->price . "<br>";
                        echo "<br>";
                  }
                  // echo $xml->book[0]->title . "<br>";
            ?>

      </body>
</html>
