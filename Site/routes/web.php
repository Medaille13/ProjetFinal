<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\AdminUser;
use App\Models\Questions;
use App\Models\Reponses;
use App\Models\Type;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//page d'accueil du site
Route::get('/', function () {
    return view("Utilisateurs\Accueil");
});

//page enquête
Route::get('/formulaire', function(){
    return view("Utilisateurs\FormulaireSatisfaction");
})->name('FormulaireSatisfaction');

//page résultat

//insertion des questions avec le controller
Route::post('/insertquestion',"App\Http\Controllers\UserController@insertion")->name("questioninsertion");
//lien sur le rertour
Route::get('/fsdgl!j',"App\Http\Controllers\UserController@fin")->name("fin");


//page sondage test
Route::get('/tesst', function(){
    return view ("Utilisateurs\Sondage");
});


//inscription partie admin
Route::post('/admin/inscription',"App\Http\Controllers\AdminController@inscription")->name("admininscription");

Route::get('/admin/inscription', function()  {
    return view("Admin\InscriptionAdmin");   
    })->name("inscriptionadminpage");

Route::post('/inscription', function(){        
    request()->validate([
        'username' => ['required','text'],
        'password' => ['required'],
    ]);
    
    $admin = new App\Models\AdminUser();
    $admin -> username = request ('username');
    $admin -> password = sha1(request ('password'));
    //insert bdr
    $admin -> save();    
    return redirect()->route("ConnexionAdm");
});     


//connexion partie admin
Route::get('/admin/connexion', function () {
    return view("Admin\ConnexionAdmin");
    })->name('ConnexionAdm');

    Route::post('/admin/connexion',"App\Http\Controllers\AdminController@read")->name("adminlogin");    


//page d'accueil partie admin
Route::get('/admin/accueil', function () {
    return view("Admin\AccueilAdmin");
    })->name('AccueilAdm');

//question admin
Route::get('/admin/question', function () {
    return view("Admin\QuestionAdmin");
    })->name('QuestionAdm');

//reponse admin
Route::get('/admin/reponse', function () {
    return view("Admin\ReponseAdmin");
    })->name('ReponseAdm');

//déconnexion partie admin
Route::get('/admin/logout',"App\Http\Controllers\AdminController@logout")->name("LogoutAdm");















/*
// User
Route::group(['as' => 'client.', 'middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@redirect');
    Route::get('dashboard', 'HomeController@index')->name('home');
    Route::get('change-password', 'ChangePasswordController@create')->name('password.create');
    Route::post('change-password', 'ChangePasswordController@update')->name('password.update');
    Route::get('test', 'TestsController@index')->name('test');
    Route::post('test', 'TestsController@store')->name('test.store');
    Route::get('results/{result_id}', 'ResultsController@show')->name('results.show');
    Route::get('send/{result_id}', 'ResultsController@send')->name('results.send');
});

Auth::routes();
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth.admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');
    
    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');
    
    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    
    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');
    
    // Questions
    Route::delete('questions/destroy', 'QuestionsController@massDestroy')->name('questions.massDestroy');
    Route::resource('questions', 'QuestionsController');
    
    // Options
    Route::delete('options/destroy', 'OptionsController@massDestroy')->name('options.massDestroy');
    Route::resource('options', 'OptionsController');
    
    // Results
    Route::delete('results/destroy', 'ResultsController@massDestroy')->name('results.massDestroy');
    Route::resource('results', 'ResultsController');
});*/

