<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DetailsComponent;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\View\Components\PanierComponent;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\View\Components\BoutiqueComponent;
use App\View\Components\DetailsComponents;
use App\View\Components\PaiementComponent;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\Admin\ProduitsController;
use App\View\Components\user\UserProfileComponent;
use App\Http\Controllers\Admin\CategorieController;
use App\View\Components\user\UserEditProfilComponent;
use App\View\Components\user\UserProfilEditComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});

Route::get('/dashboard', function () {return view('dashboard');});
//Route::get('/boutique', function () {return view('boutique');});

Route::get('/produit', function () {return view('produit');});

//Route::get('/panier', function () {return view('panier');});
Route::get('produits', [ProduitsController::class,'index']);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/redirection', [App\Http\Controllers\HomeController::class, 'redirection']);
Route::middleware(['auth','isAdmin'])->group(function (){
    Route::get('/dashboard', 'Admin\FrontendController@index');   
    Route::get('categories', 'Admin\CategorieController@index');
    Route::get('ajoutCategorie', 'Admin\CategorieController@ajout'); 
    Route::post('insertCategorie', 'Admin\CategorieController@insert'); 
    Route::get('modifierCategorie/{id}', [CategorieController::class,'modifier']);
    Route::put('updateCategorie/{id}',[CategorieController::class,'update']);
    Route::get('suprrimerCategorie/{id}',[CategorieController::class,'supprimer']);
    Route::get('produits', [ProduitsController::class,'index']);
    Route::get('ajoutProduit', [ProduitsController::class,'ajout']);
    Route::post('insertProduit', [ProduitsController::class,'insert']);
    Route::get('modifierProduit/{id}', [ProduitsController::class,'modifier']);
    Route::put('updateProduit/{id}',[ProduitsController::class,'update']);
    Route::get('suprrimerProduit/{id}',[ProduitsController::class,'supprimer']); 

});

Route::group(['middleware' => ['auth']], function ()
{
    Route::get('/paiement',[PaiementController::class,'index'])->name('paiement.index');  
    Route::get('/user/profile',[UserProfileComponent::class,'render']) ->name('user.profile');
    Route::get('/user/profile/edit',[UserEditProfilComponent::class,'render']) ->name('user.editprofile');
    Route::get('/produit/{id}',[ProduitsController::class,'show']) ->name('produit.detail');
    Route::get('/boutique',[BoutiqueComponent::class,'render'])->name('boutique.index');
    Route::get('/panier',[PanierComponent::class,'render'])->name('produit.panier'); 
});

Route::group(['middleware' => ['auth']], function ()
{
    Route::post('/panier/ajouter',[CartController::class,'store'])->name('ajout.panier');
    Route::delete('/panier/{rowId}',[CartController::class,'destroy'])->name('supprimer.panier');
    Route::get('/videpanier',function ()
    {
        Cart::destroy();
    });
});