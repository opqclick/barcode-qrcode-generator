<?php

use Illuminate\Support\Facades\Route;
use Milon\Barcode\DNS1D;

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

//    echo DNS1D::getBarcodeSVG('4445645656', 'C39');
//    echo DNS2D::getBarcodeHTML('4445645656', 'QRCODE');
//    echo DNS2D::getBarcodePNGPath('4445645656', 'PDF417');
//    echo DNS2D::getBarcodeSVG('4445645656', 'DATAMATRIX');
    echo '<img style="width:400px; height:50px;" src="data:image/png;base64,' . DNS2D::getBarcodePNG('আমি বাংলায় গান গাই এমই banglay হাসই banglay কাঁদি ', 'PDF417') . '" alt="barcode"   />';

    // return view('welcome');
});
