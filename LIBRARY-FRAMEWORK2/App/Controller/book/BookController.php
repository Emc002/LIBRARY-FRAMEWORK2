<?php 
namespace Staditek\App\Controller\book;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\book\dataBook;

class BookController
{

  private static $model;
  public function __construct() 
  {
    self::$model= new dataBook();
  }
  public function book(){
    $tampilDataBook = self::$model->book();
    View::renderBook('Book', $tampilDataBook);
  }

  public function viewOneBook($id_book){
    $OneBook = self::$model->findBook($id_book);
    View::renderOneBookDisplay('editBook', $OneBook);
  }

  public function addBookDisplay(){
    View::renderAddBookDisplay('addBook');
  }


  public function saveAddBook(){
    $saveBook = [
      'isbn'=> $_POST['isbn'],
      'title'=> $_POST['title'],
      'synopsis'=> $_POST['synopsis'],
      'author'=> $_POST['author'],
      'publisher'=> $_POST['publisher'],
      'category'=> $_POST['category'],
      'languages'=> $_POST['languages'],
      'created_at'=> $_POST['created_at'],
      'updated_at'=> null
    ];
    self::$model->saveBook($saveBook);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/book');
  }

  public function updateAddBook($id_book){
    $updateBook = [
      'isbn'=> $_POST['isbn'],
      'title'=> $_POST['title'],
      'synopsis'=> $_POST['synopsis'],
      'author'=> $_POST['author'],
      'publisher'=> $_POST['publisher'],
      'category'=> $_POST['category'],
      'languages'=> $_POST['languages'],
      'updated_at'=> null
    ];
    self::$model->updateBook($updateBook,$id_book);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/book');

  }

  public function deleteBook($id_book){
    self::$model->deleteBook($id_book);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/book');

  }



}
