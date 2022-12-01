<?php
namespace Staditek\App\Model\librarian;

use Staditek\App\config\Database;

class dataLibrarian extends Database
{
  public function librarian(){
    $statement = self::$conn->prepare("select * from librarians");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findLibrarian($id_librarians)
  {
  $statement = self::$conn->prepare("select * from librarians where id_librarians=$id_librarians");
  $statement->execute();
  return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveLibrarian($data){
    $statement = self::$conn->prepare("INSERT INTO librarians(username,email,password, created_at, updated_at)
    values
    (
    :username,
    :email,
    :password,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateLibrarian($data,$id_librarians){
    $statement = self::$conn->prepare("UPDATE librarians
    SET
    username=:username,
    email=:email,
    password=:password,
    updated_at=:updated_at
    where id_librarians =$id_librarians
    ");
    return $statement->execute($data);
  }

  public function deleteLibrarian($id_librarians)
  {
  $statement = self::$conn->prepare("DELETE FROM librarians where id_librarians=$id_librarians");
  $statement->execute();
  }

  public function findEmail($data){
    $statement = self::$conn->prepare("SELECT * FROM librarians WHERE email=:email");
    $statement->execute(['email'=>$data]);
  return $statement->fetch(\PDO::FETCH_OBJ);
  }
}