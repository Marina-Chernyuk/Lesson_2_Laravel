<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\OneCategoryNewsController;
use App\Http\Controllers\OneNewsController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategoryNewsController::class, 'category']);
Route::get('/{nameCategory}', [OneCategoryNewsController::class, 'oneCategory']);
Route::get('/{nameCategory}/{idNews}', [OneNewsController::class, 'oneNews']);


/* КОД С УРОКА*/

// Привязка контроллера к роуту (где в массиве прописываем название класса контроллера, второй аргумент - метод,
//к которому этот роут привязан)
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])
    ->name("news::catalog"); // name - это алиас, то сеть псевдоним роута, которое может быть любым,
                                   // двойное двоеточие необязательно
Route::get('/news/card/{id}', [App\Http\Controllers\NewsController::class, 'card'])
    ->where('id', '[0-9]+') //правило ограничения
    ->name("news::сard");

Route::resource('admin/category', \App\Http\Controllers\Admin\CategoryController::class);


// объединение роутов (передаются два параметра : в массив общие аргументы и анонимная функция)

// это не объединенные роуты
Route::get('/admin/news/', [App\Http\Controllers\Admin\NewsController::class, 'index']) ->name("admin::news::index");
Route::get('/admin/news/create', [App\Http\Controllers\Admin\NewsController::class, 'create']) ->name("admin::news::create");
Route::get('/admin/news/update', [App\Http\Controllers\Admin\NewsController::class, 'update']) ->name("admin::news::update");
Route::get('/admin/news/delete', [App\Http\Controllers\Admin\NewsController::class, 'delete']) ->name("admin::news::delete");
 /*
  * Админка новостей (объединеный роут). Можно делать несколько вложенностей
  */

Route::group([
    'prefix' => '/admin/news',
    'as' =>  'admin::news::'
], function () {
    Route::get('', [AdminNewsController::class, 'index'])
        ->name("index");

    Route::get('create', [AdminNewsController::class, 'create'])
        ->name("create");

    Route::get('update', [AdminNewsController::class, 'update'])
        ->name("update");

    Route::get('delete', [AdminNewsController::class, 'delete'])
        ->name("delete");

});

/* Методы фасада Route
Route::get(' ', function () { });
Route::post(' ', function () { });
Route::put(' ', function () { });
Route::patch(' ', function () { });
Route::delete(' ', function () { });
Route::options(' ', function () { });
*/
Route::get('/', function () { // вызов анонимки
    return view('welcome');  // возвращаем результат рендеринга шаблона
});
/*
короткая запись
Route::view('/', 'welcome');
 */

// для вывода в браузер используется метод get (указание в документации), метод post приведет к ошибке
Route::get('/test', function () {
    return 'Всем привет!';
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/shopping cart', function () {
    return view('shopping cart');
});

Route::get('/single page', function () {
    return view('single page');
});

/* Можно применить метод match и массиве указать методы, которые могут применяться
Route::match(['get', 'post'], '/test', function () {
    return 'Всем привет!';
});

Можно применить метод any, чтобы можно было использовать любой метод
Route::any('/test', function () {
    return 'Всем привет!';
});
*/

/* можно сделать редирект с одного роута на другой. Данный приём не рекомендуется делать на стороне фреймворка.
Лучше делать на стороне веб-сервера
Route::redirect('/test', '/test1', 301);  где 301 - это код
*/
