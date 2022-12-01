<?php
namespace Staditek\App\Model\book;

use Staditek\App\config\Database;

class dataBook extends Database
{
  public function book(){
    $statement = self::$conn->prepare("select * from books");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findBook($id_book)
  {
  $statement = self::$conn->prepare("select * from books where id_book=$id_book");
  $statement->execute();
  return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveBook($data){
    $statement = self::$conn->prepare("INSERT INTO books(isbn,title,synopsis, author, publisher, category, languages, created_at, updated_at)
    values
    (
    :isbn,
    :title,
    :synopsis,
    :author,
    :publisher,
    :category,
    :languages,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateBook($data,$id_book){
    $statement = self::$conn->prepare("UPDATE books
    SET
    isbn=:isbn,
    title=:title,
    synopsis=:synopsis,
    author=:author,
    publisher=:publisher,
    category=:category,
    languages=:languages,
    updated_at=:updated_at
    where id_book =$id_book
    ");
    return $statement->execute($data);
  }

  public function deleteBook($id_book)
  {
  $statement = self::$conn->prepare("DELETE FROM books where id_book=$id_book");
  $statement->execute();
  }

}