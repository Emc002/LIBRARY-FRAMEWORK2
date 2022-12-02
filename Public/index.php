<?php
use Staditek\App\Controller\librarian\LibrarianController;
use Staditek\App\Controller\member\MemberController;
use Staditek\App\Controller\MemberTrxController;
use Staditek\App\Controller\book\BookController;
use Staditek\App\Controller\subscription\SubscriptionController;
use Staditek\App\Controller\login\LibrarianLoginController;
use Staditek\App\Core\Router;
use Staditek\App\Middleware\Auth;
use Staditek\App\Middleware\Guest; 
require_once __DIR__ . '/../vendor/autoload.php';
session_start();

Router::addRoute('GET', '/', LibrarianLoginController::class,'login',[Guest::class]);
Router::addRoute('GET', '/login', LibrarianLoginController::class,'login',[Guest::class]);
Router::addRoute('POST', '/postLogin', LibrarianLoginController::class,'postLogin',[Guest::class]);
Router::addRoute('GET', '/logout', LibrarianLoginController::class,'logout',[]);

// LIBRARIAN
Router::addRoute('GET', '/librarian', LibrarianController::class,'librarian',[Auth::class]);
Router::addRoute('GET', '/addLibrarianDisplay', LibrarianController::class,'addLibrarianDisplay',[Auth::class]);
Router::addRoute('POST', '/saveAddLibrarian', LibrarianController::class,'saveAddLibrarian',[Auth::class]);
Router::addRoute('GET', '/viewOneLibrarian/:id', LibrarianController::class,'viewOneLibrarian',[Auth::class]);
Router::addRoute('POST', '/updateLibrarian/:id', LibrarianController::class,'updateAddLibrarian',[Auth::class]);
Router::addRoute('GET', '/deleteLibrarian/:id', LibrarianController::class,'deleteLibrarian',[Auth::class]);

// MEMBER
Router::addRoute('GET', '/member', MemberController::class,'member',[Auth::class]);
Router::addRoute('GET', '/addMemberDisplay', MemberController::class,'addMemberDisplay',[Auth::class]);
Router::addRoute('POST', '/saveAddMember', MemberController::class,'saveAddMember',[Auth::class]);
Router::addRoute('GET', '/viewOneMember/:id', MemberController::class,'viewOneMember',[Auth::class]);
Router::addRoute('POST', '/updateMember/:id', MemberController::class,'updateAddMember',[Auth::class]);
Router::addRoute('GET', '/deleteMember/:id', MemberController::class,'deleteMember',[Auth::class]);

// MEMBER TRX
Router::addRoute('GET', '/membertrx', MemberTrxController::class,'membertrx',[Auth::class]);
Router::addRoute('GET', '/addMemberTrxDisplay', MemberTrxController::class,'addMemberTrxDisplay',[Auth::class]);
Router::addRoute('POST', '/saveAddMemberTrx', MemberTrxController::class,'saveAddMemberTrx',[Auth::class]);
Router::addRoute('GET', '/viewOneMemberTrx/:id', MemberTrxController::class,'viewOneMemberTrx',[Auth::class]);
Router::addRoute('POST', '/updateMemberTrx/:id', MemberTrxController::class,'updateAddMemberTrx',[Auth::class]);
Router::addRoute('GET', '/deleteMemberTrx/:id', MemberTrxController::class,'deleteMemberTrx',[Auth::class]);

// BOOK
Router::addRoute('GET', '/book', BookController::class,'book',[Auth::class]);
Router::addRoute('GET', '/addBookDisplay', BookController::class,'addBookDisplay',[Auth::class]);
Router::addRoute('POST', '/saveAddBook', BookController::class,'saveAddBook',[Auth::class]);
Router::addRoute('GET', '/viewOneBook/:id', BookController::class,'viewOneBook',[Auth::class]);
Router::addRoute('POST', '/updateBook/:id', BookController::class,'updateAddBook',[Auth::class]);
Router::addRoute('GET', '/deleteBook/:id', BookController::class,'deleteBook',[Auth::class]);

// SUBSCRIPTION
Router::addRoute('GET', '/subscription', SubscriptionController::class,'subscription',[Auth::class]);
Router::addRoute('GET', '/addSubscriptionDisplay', SubscriptionController::class,'addSubscriptionDisplay',[Auth::class]);
Router::addRoute('POST', '/saveAddSubscription', SubscriptionController::class,'saveAddSubscription',[Auth::class]);
Router::addRoute('GET', '/viewOneSubscription/:id', SubscriptionController::class,'viewOneSubscription',[Auth::class]);
Router::addRoute('POST', '/updateSubscription/:id', SubscriptionController::class,'updateAddSubscription',[Auth::class]);
Router::addRoute('GET', '/deleteSubscription/:id', SubscriptionController::class,'deleteSubscription',[Auth::class]);










Router::run();
