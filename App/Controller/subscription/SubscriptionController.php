<?php 
namespace Staditek\App\Controller\subscription;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\subscription\dataSubscription;

class SubscriptionController
{

  private static $model;
  public function __construct()
  {
    self::$model= new dataSubscription();
  }
  public function subscription(){
    $tampilDataSubscription = self::$model->subscription();
    View::renderSubscription('Subscription', $tampilDataSubscription);
  }

  public function viewOneSubscription($id_subscription){
    $OneSubscription = self::$model->findSubscription($id_subscription);
    View::renderOneSubscriptionDisplay('editSubscription', $OneSubscription);
  }

  public function addSubscriptionDisplay(){
    View::renderAddSubscriptionDisplay('addSubscription');
  }


  public function saveAddSubscription(){
    $saveSubscription = [
      'title'=> $_POST['title'],
      'month'=> $_POST['month'],
      'price'=> $_POST['price'],
      'status'=> $_POST['status'],
      'created_at'=> $_POST['created_at'],
      'updated_at'=> null
    ];
    var_dump($saveSubscription);
    self::$model->saveSubscription($saveSubscription);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/subscription');
  }

  public function updateAddSubscription($id_subscription){
    $updateSubscription = [
      'title'=> $_POST['title'],
      'month'=> $_POST['month'],
      'price'=> $_POST['price'],
      'status'=> $_POST['status'],
      'updated_at'=> $_POST['updated_at']
    ];
    self::$model->updateSubscription($updateSubscription,$id_subscription);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/subscription');

  }

  public function deleteSubscription($id_subscription){
    self::$model->deleteSubscription($id_subscription);
    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/subscription');

  }



}
