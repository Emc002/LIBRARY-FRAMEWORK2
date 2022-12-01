<?php
namespace Staditek\App\Model\member;

use Staditek\App\config\Database;

class dataMember extends Database
{
  public function member(){
    $statement = self::$conn->prepare("select * from member");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findMember($id_member)
  {
  $statement = self::$conn->prepare("select * from member where id_member=$id_member");
  $statement->execute();
  return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveMember($data){
    $statement = self::$conn->prepare("INSERT INTO member(nik,name,phone, address, born_place, born_date, gender, country, nationality, status, created_at, updated_at)
    values
    (
    :nik,
    :name,
    :phone,
    :address,
    :born_place,
    :born_date,
    :gender,
    :country,
    :nationality,
    :status,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateMember($data,$id_member){
    $statement = self::$conn->prepare("UPDATE member
    SET
    nik=:nik,
    name=:name,
    phone=:phone,
    address=:address,
    born_place=:born_place,
    born_date=:born_date,
    gender=:gender,
    country=:country,
    nationality=:nationality,
    status=:status,
    updated_at=:updated_at
    where id_member =$id_member
    ");
    return $statement->execute($data);
  }

  public function deleteMember($id_member)
  {
  $statement = self::$conn->prepare("DELETE FROM member where id_member=$id_member");
  $statement->execute();
  }

}