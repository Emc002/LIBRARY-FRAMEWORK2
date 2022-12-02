<?php 
namespace Staditek\App\Controller\member;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\member\dataMember;

class MemberController
{

  private static $model;
  public function __construct()
  {
    self::$model= new dataMember();
  }
  public function member(){
    $tampilDataMember = self::$model->member();
    View::render('member/Member', $tampilDataMember);
  }

  public function viewOneMember($id_member){
    $OneMember = self::$model->findMember($id_member);
    View::render('member/editMember', $OneMember);
  }

  public function addMemberDisplay(){
    View::render('member/addMember');
  }


  public function saveAddMember(){
    $saveMember = [
      'nik'=> $_POST['nik'],
      'name'=> $_POST['name'],
      'phone'=> $_POST['phone'],
      'address'=> $_POST['address'],
      'born_place'=> $_POST['born_place'],
      'born_date'=> $_POST['born_date'],
      'gender'=> $_POST['gender'],
      'country'=> $_POST['country'],
      'nationality'=> $_POST['nationality'],
      'status'=> $_POST['status'],
      'created_at'=> $_POST['created_at'],
      'updated_at'=> null
    ];
    self::$model->saveMember($saveMember);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/member');
  }

  public function updateAddMember($id_member){
    $updateMember = [
      'nik'=> $_POST['nik'],
      'name'=> $_POST['name'],
      'phone'=> $_POST['phone'],
      'address'=> $_POST['address'],
      'born_place'=> $_POST['born_place'],
      'born_date'=> $_POST['born_date'],
      'gender'=> $_POST['gender'],
      'country'=> $_POST['country'],
      'nationality'=> $_POST['nationality'],
      'status'=> $_POST['status'],
      'updated_at'=> null
    ];
    self::$model->updateMember($updateMember,$id_member);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/member');

  }

  public function deleteMember($id_member){
    self::$model->deleteMember($id_member);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/member');

  }



}
