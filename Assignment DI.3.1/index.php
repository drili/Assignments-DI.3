<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Assignment DI.3.1</title>
      </head>
      <body>
            <h1>Assignment DI.3.1 | Drilon Braha</h1>
            <hr>

            <h2>Books</h2>
            <?php
            $xmldoc = new DOMDocument();
            $xmldoc->load("sample.xml", LIBXML_NOBLANKS);
            
            $books = $xmldoc->firstChild->firstChild;
            if($books!=null){
                  while($books!=null){
                        echo $books->textContent . "<br/>" ;
                        $books = $books->nextSibling;
                  }
            }
            ?>

            <br>
            <form name="input" action="insert.php" method="post">
                  Add new books:
                  <br>
                  <label for="title">Title:</label>
                  <input type="text" name="title" required/>
                  <label for="price">Price:</label>
                  <input type="text" name="price" required>
                  <input type="submit" value="Add"/>
            </form>
      </body>
</html>
