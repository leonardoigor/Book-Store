<?php

require_once("db.php");
require_once("component.php");

$con = CreateDb();
// craeteButtonClick

if (isset($_POST["create"])) {
  createData();
}



if (isset($_POST["update"])) {
  echo "update";
}

if (isset($_POST["delete"])) {
  echo "delete";
}

function createData()
{
  $bookname = TextBoxValue("book_name");
  $bookpublisher = TextBoxValue("book_publisher");
  $bookpublisher = TextBoxValue("book_publisher");
  $bookpricer = TextBoxValue("book_price");

  if ($bookname && $bookpublisher && $bookpricer) {
    $sql = "INSERT INTO books(book_name,book_publisher,book_price)
        VALUES('$bookname','$bookpublisher','$bookpricer')";

    if (mysqli_query($GLOBALS['con'], $sql)) {
      echo "";
      TextNode("success", "RECORD SUCCESSFULLY inserted");
    }
  } else {
    TextNode("error", "Provide Data in the TextBox");
  }
}

function TextBoxValue($value)
{
  $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
  if (empty($textbox)) {
    return false;
  } else {
    return $textbox;
  }
}
function TextNode($className, $msg)
{
  $element = "<h6 class='$className'>$msg</h6>";
  echo $element;
}
// Get data from mysqli database

function getData()
{
  $sql = "SELECT * FROM books";
  $result = mysqli_query($GLOBALS['con'], $sql);
  if (mysqli_num_rows($result) > 0) {
    return $result;
  }
}
