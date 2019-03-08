<?php
      header('Location:index.php');
      $xmldoc = new DOMDocument();
      $xmldoc->load('sample.xml');

      $newAct = $_POST['title'];
      $newPrice = $_POST['price'];

      $root = $xmldoc->firstChild;

      $newElement = $xmldoc->createElement('title');
      $root->appendChild($newElement);
      $newText = $xmldoc->createTextNode($newAct);
      $newElement->appendChild($newText);

      $newPriceElement = $xmldoc->createElement('price');
      $root->appendChild($newPriceElement);
      $newPriceText = $xmldoc->createTextNode($newPrice);
      $newPriceElement->appendChild($newPriceText);

      $xmldoc->save('sample.xml');
?>
