<?php 
namespace Staditek\App\Controller\librarian;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\librarian\dataLibrarian;

class LibrarianController
{

  private static $model;
  public function __construct()
  {
    self::$model= new dataLibrarian();
  }
  public function librarian(){
    $tampilDataLibrarian = self::$model->librarian();
    View::renderLibrarian('Librarian', $tampilDataLibrarian);
  }

  public function viewOneLibrarian($id_librarians){
    $OneLibrarian = self::$model->findLibrarian($id_librarians);
    View::renderOneLibrarianDisplay('editLibrarian', $OneLibrarian);
  }

  public function addLibrarianDisplay(){
    View::renderAddLibrarianDisplay('addLibrarian');
  }


  public function saveAddLibrarian(){
    $saveLibrarian = [
      'username'=> $_POST['username'],
      'email'=> $_POST['email'],
      'password'=> password_hash($_POST['password'], PASSWORD_DEFAULT),
      'created_at'=> $_POST['created_at'],
      'updated_at'=> null
    ];
    var_dump($saveLibrarian);
    self::$model->saveLibrarian($saveLibrarian);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/librarian');
  }

  public function updateAddLibrarian($id_librarians){
    $updateLibrarian = [
      'username'=> $_POST['username'],
      'email'=> $_POST['email'],
      'password'=> password_hash($_POST['password'], PASSWORD_DEFAULT),
      'updated_at'=> $_POST['updated_at']
    ];
    self::$model->updateLibrarian($updateLibrarian,$id_librarians);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/librarian');

  }

  public function deleteLibrarian($id_user){
    self::$model->deleteLibrarian($id_user);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/librarian');

  }



}
