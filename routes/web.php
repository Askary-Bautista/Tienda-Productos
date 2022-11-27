 <?php

use App\Models\caballero;
use App\Models\dama;
use App\Models\nino;
use App\Models\tienda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tiendaController;

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

Route::get('/', function () {
    $datosC = caballero::orderBy('idCaballero', 'asc')->paginate(20);
    $datosD = dama::orderBy('idDama', 'asc')->paginate(20);
    $datosN = nino::orderBy('idNino', 'asc')->paginate(20);
    //dd($datos);
    return view('tienda',compact('datosC','datosD','datosN'));
});

Route::post('agregar', [tiendaController::class, 'agregar'])->name('tienda.agregar');
