<?php
namespace Staditek\App\Model\subscription;

use Staditek\App\config\Database;

class dataSubscription extends Database
{
  public function subscription(){
    $statement = self::$conn->prepare("select * from subscription");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findSubscription($id_subscription)
  {
  $statement = self::$conn->prepare("select * from subscription where id_subscription=$id_subscription");
  $statement->execute();
  return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveSubscription($data){
    $statement = self::$conn->prepare("INSERT INTO subscription(title,month,price, status, created_at, updated_at)
    values
    (
    :title,
    :month,
    :price,
    :status,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateSubscription($data,$id_subscription){
    $statement = self::$conn->prepare("UPDATE subscription
    SET
    title=:title,
    month=:month,
    price=:price,
    status=:status,
    updated_at=:updated_at
    where id_subscription =$id_subscription
    ");
    return $statement->execute($data);
  }

  public function deleteSubscription($id_subscription)
  {
  $statement = self::$conn->prepare("DELETE FROM subscription where id_subscription=$id_subscription");
  $statement->execute();
  }
}