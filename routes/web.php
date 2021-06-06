    <?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

// за маршрут / ответственный index controller метод index
Route::get('/', [IndexController::class, 'index']);
// за маршрут /services ответственный index controller метод services
Route::get('/services', [IndexController::class, 'services']);
// за маршрут /contacts ответственный index controller метод contacts (далее по аналогии)
Route::get('/contacts', [IndexController::class, 'contacts']);
Route::get('/blog', [BlogController::class, 'list']);
Route::get('/blog/{slug}', [BlogController::class, 'item']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
// за маршрут home ответственный home controoler метод index
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
