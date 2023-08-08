<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sitecontroller;
use App\Http\Controllers\AjoutPpanier;
use App\Http\Controllers\Cookie;
use App\Http\Controllers\PDFController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Group_Dhole.page_principal');
});
Route::get('/shop',[Sitecontroller::class,'shop']);
Route::get('/shop_bois',[Sitecontroller::class,'shop_bois']);
Route::get('/shop/product',[Sitecontroller::class,'shops']);
Route::get('/shop/8/jalkaa',[Sitecontroller::class,'shop_8']);
Route::get('/shop/10/jalkaa',[Sitecontroller::class,'shop_10']);
Route::get('/shop/20/jalkaa',[Sitecontroller::class,'shop_20']);
Route::get('/shop/15/jalkaa',[Sitecontroller::class,'shop_15']);
Route::get('/shop/30/jalkaa',[Sitecontroller::class,'shop_30']);
Route::get('/shop/40/jalkaa',[Sitecontroller::class,'shop_40']);
Route::get('/shop/avoin_yläsäiliö',[Sitecontroller::class,'shop_to']);
Route::get('/shop/säiliökontti',[Sitecontroller::class,'shop_frigorifique']);
Route::get('/shop/säiliön_kontti',[Sitecontroller::class,'shop_cirtene']);
Route::get('/shop/säiliö_flat_rack',[Sitecontroller::class,'shop_fatrack']);

Route::get('/shop/puun',[Sitecontroller::class,'Puun_syyt_70_pussi']);
Route::get('/shop/crepito',[Sitecontroller::class,'crepito']);
Route::get('/shop/havupuu',[Sitecontroller::class,'havupuu']);
Route::get('/shop/88_pussia',[Sitecontroller::class,'pussia']);
Route::get('/shop/paletti',[Sitecontroller::class,'Paletti']);
Route::get('/shop/pyökki',[Sitecontroller::class,'pyökki']);
Route::get('/shop/koko_lava_koivupuuta',[Sitecontroller::class,'koko']);
Route::get('/shop/puolilava_uunikuivattua_koivupolttopuuta',[Sitecontroller::class,'puolilava']);
Route::get('/shop/puolilava_uunikuivattua_tammipolttopuuta',[Sitecontroller::class,'puolilavas']);
Route::get('/shop/kuiva',[Sitecontroller::class,'Kuiva']);
Route::get('/shop/40_pussia',[Sitecontroller::class,'pussias']);
Route::get('/shop/40_pussias',[Sitecontroller::class,'pussiass']);
Route::get('/shop/5_pussia_sytytystä',[Sitecontroller::class,'pussiasss']);

Route::get('/shop/lave',[Sitecontroller::class,'pussiassss']);
Route::get('/shop/nestro_pyökki',[Sitecontroller::class,'pussiasssss']);
Route::get('/shop/kori',[Sitecontroller::class,'panier']);

Route::get('/shop/tammi',[Sitecontroller::class,'pussias1']);
Route::get('/shop/puusta',[Sitecontroller::class,'pussias2']);
Route::get('/shop/lokits',[Sitecontroller::class,'pussias3']);

Route::get('/todistus',[Sitecontroller::class,'testimonial']);
Route::get('/heistä',[Sitecontroller::class,'Meistä']);
Route::get('/ottaa_yhteyttä',[Sitecontroller::class,'ottaa']);
Route::get('/arvio',[Sitecontroller::class,'arvio']);

//ajout
Route::post('/konttikauppae',[AjoutPpanier::class,'ajout'])->name('ajout');

//cookie

Route::get('/cookie/{id}',[Cookie::class,'getcookie']);
Route::get('/cookies/{id}',[Cookie::class,'setcookie']);
Route::get('/cook',[Cookie::class,'del']);

Route::get('/ajout/{id}',[AjoutPpanier::class,'Ajout']);

Route::post('/kori',[AjoutPpanier::class,'Ajoutproduit'])->name('Ajoutp');
Route::get('/kori/{id}',[AjoutPpanier::class,'delete'])->name('Ajoutp1');
Route::get('/koris/{id}',[AjoutPpanier::class,'Ajoutq'])->name('Ajoutp2');
Route::get('/korie/{id}',[AjoutPpanier::class,'Rq'])->name('Ajoutp2');

Route::get('/ostaa',[AjoutPpanier::class,'enregistrements']);
Route::post('/ostaas',[AjoutPpanier::class,'enregistrement'])->name('achats');

Route::get('/lasku',[AjoutPpanier::class,'facture']);

Route::get('/produiits',[AjoutPpanier::class,'aj']);

Route::get('/oppu',[AjoutPpanier::class,'aj2'])->name('fin');
Route::post('/produits',[AjoutPpanier::class,'aj1'])->name('aj1');

Route::controller(PDFController::class)->group(function()
{
    route::get('generate-pdf','generatePDF')->name('download');
});

