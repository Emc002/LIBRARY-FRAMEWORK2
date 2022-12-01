<?php 
namespace Staditek\App\Core;
class View{

  // LIBRARIAN
  public static function renderLibrarian(string $view, $data)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/librarian/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }

  public static function renderAddLibrarianDisplay(string $view)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/librarian/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }

  public static function renderOneLibrarianDisplay(string $view, $data)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/librarian/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }


// MEMBER
  public static function renderMember(string $view, $data)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/member/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }

  public static function renderAddMemberDisplay(string $view)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/member/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  } 

  public static function renderOneMemberDisplay(string $view, $data)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/member/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }

  // MEMBER TRX
  public static function renderMemberTrx(string $view, $data)
  {
   
    require_once __DIR__. '/../View/template/header.php';

    require_once __DIR__. '/../View/template/sidebarleft.php';
   
    require_once __DIR__. '/../View/membertrx/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }

  public static function renderAddMemberTrxDisplay(string $view)
  {
 
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/membertrx/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  } 

  public static function renderOneMemberTrxDisplay(string $view, $data)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/membertrx/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }




// BOOK

  public static function renderBook(string $view, $data)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/book/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }

  public static function renderAddBookDisplay(string $view)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/book/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }

  public static function renderOnebookDisplay(string $view, $data)
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/book/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }




    // SUBSCRIPTION
    public static function renderSubscription(string $view, $data)
    {
      require_once __DIR__. '/../View/template/header.php';
      require_once __DIR__. '/../View/template/sidebarleft.php';
      require_once __DIR__. '/../View/subscription/'.$view.'.php';
      require_once __DIR__. '/../View/template/footer.php';
    }
  
    public static function renderAddSubscriptionDisplay(string $view)
    {
      require_once __DIR__. '/../View/template/header.php';
      require_once __DIR__. '/../View/template/sidebarleft.php';
      require_once __DIR__. '/../View/subscription/'.$view.'.php';
      require_once __DIR__. '/../View/template/footer.php';
    }
  
    public static function renderOneSubscriptionDisplay(string $view, $data)
    {
      require_once __DIR__. '/../View/template/header.php';
      require_once __DIR__. '/../View/template/sidebarleft.php';
      require_once __DIR__. '/../View/subscription/'.$view.'.php';
      require_once __DIR__. '/../View/template/footer.php';
    }







  public static function renderRegistration(string $view, $data)
  {
    // die(var_dump($data));
    require_once __DIR__. '/../View/header.php';
    require_once __DIR__. '/../View/'.$view.'.php';
    require_once __DIR__. '/../View/footer.php';
  }

  public static function renderLogin(string $view)
  {
    // die(var_dump($data));
    require_once __DIR__. '/../View/template/headerLogin.php';
    require_once __DIR__. '/../View/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  } 

  
}