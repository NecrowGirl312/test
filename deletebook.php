<?php
include "header.php";
// echo $_GET['id'];
$id=$_GET['id'];

//deleteRow("books" , $id);

// connect to db
$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');


// query
$query = "DELETE FROM catbook where idbook=:myId";
// query prepare with PDO 
$statement = $pdo->prepare($query);
// definie ":myid"
$statement->bindValue(':myId', $id, \PDO::PARAM_INT);
// execute
$statement->execute();


// query
$query = "DELETE FROM books where idbook=:myId";
// query prepare with PDO 
$statement = $pdo->prepare($query);
// definie ":myid"
$statement->bindValue(':myId', $id, \PDO::PARAM_INT);
// execute
$statement->execute();

//redirect to books.php
header('location:books.php?message=success');