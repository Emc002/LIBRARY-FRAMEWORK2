<?php
namespace Staditek\App\Model\membertrx;

use Staditek\App\config\Database;

class dataMemberTrx extends Database
{
  public function membertrx(){
    $statement = self::$conn->prepare("select member.name, member.phone, member.address, subscription.title, subscription.month, subscription.price, subscription.status, member_trx.date_trx, member_trx.total_order, member_trx.created_at, member_trx.updated_at from member inner join subscription on member.id_member = subscription.id_subscription inner join member_trx on subscription.id_subscription = member_trx.id_member_trx");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findMemberTrx($id_member_trx)
  {
  $statement = self::$conn->prepare("select * from member_trx where id_member_trx=$id_member_trx");
  $statement->execute();
  return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveMemberTrx($data){
    $statement = self::$conn->prepare("INSERT INTO member_trx(id_member,id_subscription,date_trx, active_at,expire_at,status,total_order,note, created_at, updated_at)
    values
    (
    :id_member,
    :id_subscription,
    :date_trx,
    :active_at,
    :expire_at,
    :status,
    :total_order,
    :note,
    :created_at,
    :updated_at,
    :status)
    ");
    return $statement->execute($data);
  }

  public function updateMemberTrx($data,$id_member_trx){
    $statement = self::$conn->prepare("UPDATE member_trx
    SET
    id_member=:id_member,
    id_subscription=:id_subscription,
    date_trx=:date_trx,
    active_at=:active_at,
    expire_at=:expire_at,
    status=:status,
    total_order=:total_order,
    note=:note,
    updated_at=:updated_at
    where id_member_trx =$id_member_trx
    ");
    return $statement->execute($data);
  }

  public function deleteMemberTrx($id_member_trx)
  {
  $statement = self::$conn->prepare("DELETE FROM member_trx where id_member_trx=$id_member_trx");
  $statement->execute();
  }
}