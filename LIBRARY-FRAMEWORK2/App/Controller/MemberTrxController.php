<?php 
namespace Staditek\App\Controller;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\membertrx\dataMemberTrx;

class MemberTrxController
{

  private static $model;
  public function __construct()
  {
    self::$model= new dataMemberTrx();
  }
  public function membertrx(){
    $tampilDataMemberTrx = self::$model->membertrx();
    View::renderMemberTrx ('MemberTrx ', $tampilDataMemberTrx );
  }

  public function viewOneMemberTrx($id_MemberTrx){
    $OneMemberTrx = self::$model->findMemberTrx ($id_MemberTrx);
    View::renderOneMemberTrxDisplay('editMemberTrx ', $OneMemberTrx );
  }

  public function addMemberTrxDisplay(){
    View::renderAddMemberTrxDisplay('addMemberTrx ');
  }


  public function saveAddMemberTrx(){
    $saveMemberTrx  = [
      'id_member'=> $_POST['id_member'],
      'id_subscription'=> $_POST['id_subscription'],
      'date_trx'=> $_POST['date_trx'],
      'active_at'=> $_POST['active_at'],
      'expire_at'=> $_POST['expire_at'],
      'status'=> $_POST['status'],
      'total_order'=> $_POST['total_order'],
      'note'=> $_POST['note'],
      'created_at'=> $_POST['created_at'],
      'updated_at'=> null
    ];
    var_dump($saveMemberTrx );
    self::$model->saveMemberTrx ($saveMemberTrx );
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/MemberTrx ');
  }

  public function updateAddMemberTrx($id_MemberTrx){
    $updateMemberTrx  = [
      'id_member'=> $_POST['id_member'],
      'id_subscription'=> $_POST['id_subscription'],
      'date_trx'=> $_POST['date_trx'],
      'active_at'=> $_POST['active_at'],
      'expire_at'=> $_POST['expire_at'],
      'status'=> $_POST['status'],
      'total_order'=> $_POST['total_order'],
      'note'=> $_POST['note'],
      'updated_at'=> $_POST['updated_at']
    ];
    self::$model->updateMemberTrx ($updateMemberTrx ,$id_MemberTrx);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/MemberTrx ');

  }

  public function deleteMemberTrx($id_user){
    self::$model->deleteMemberTrx($id_user);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/MemberTrx ');

  }



}
