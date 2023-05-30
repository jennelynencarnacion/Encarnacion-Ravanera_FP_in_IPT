<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Create an XML document
  $xml = new DOMDocument('1.0', 'UTF-8');
  $root = $xml->createElement('contact');
  $xml->appendChild($root);

  $nameElement = $xml->createElement('name', $name);
  $root->appendChild($nameElement);

  $emailElement = $xml->createElement('email', $email);
  $root->appendChild($emailElement);

  $messageElement = $xml->createElement('message', $message);
  $root->appendChild($messageElement);

  // Save the XML document to a file
  $xml->save('submit.xml');

  echo 'Thank you for messaging us!';
}
?>