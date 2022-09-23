<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Belakang\DashboardController;
use App\Http\Controllers\Belakang\BootController;
use App\Http\Controllers\Depan\UsmController;
use App\Http\Controllers\Belakang\PendaftaranController;
use App\Http\Controllers\Depan\WidyamandalaController;
use App\Http\Controllers\Depan\I3lController;
use App\Http\Controllers\Depan\SoegijapranataController;
use App\Http\Controllers\Depan\UphjakartaController;
use App\Http\Controllers\Depan\BinusController;
use App\Http\Controllers\Depan\TristarController;
use App\Http\Controllers\Depan\AlfalinkController;
use App\Http\Controllers\Depan\IkadoController;
use App\Http\Controllers\Depan\KristenpetraController;
use App\Http\Controllers\Depan\PrasetiyamulyaController;
use App\Http\Controllers\Depan\MnpController;
use App\Http\Controllers\Depan\SagesinstituteController;
use App\Http\Controllers\Depan\XiamenController;
use App\Http\Controllers\Depan\ParahyanganController;
use App\Http\Controllers\Depan\CiputraController;
use App\Http\Controllers\Depan\UkdwController;
use App\Http\Controllers\Depan\CalvinController;
use App\Http\Controllers\Depan\AtmajayaController;
use App\Http\Controllers\Depan\UmnController;
use App\Http\Controllers\Depan\PolinbalController;
use App\Http\Controllers\Depan\KrismaranathaController;
use App\Http\Controllers\Depan\TarumanagaraController;
use App\Http\Controllers\Depan\UkswController;
use App\Http\Controllers\Depan\KarangturiController;
use App\Http\Controllers\Depan\CntController;
use App\Http\Controllers\Depan\SttabdielController;
use App\Http\Controllers\Depan\UntagjakartaController;
use App\Http\Controllers\Depan\VusController;
use App\Http\Controllers\Depan\FebundipController;
use App\Http\Controllers\Depan\SttkaoController;
use App\Http\Controllers\Depan\UdinusController;

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
    return view('welcome');
});
Route::middleware(['auth', 'admin'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
        Route::resource('boot', BootController::class);
        Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('daftar');
        Route::delete('pendaftaranHapus/{id}', [PendaftaranController::class, 'hapus'])->name('hapus');
        Route::get('pendaftaran/pilih/{universitas}/{kelas}', [PendaftaranController::class, 'pilih'])->name('daftarPilih');
        Route::get('pendaftaran/pilihkampus/{universitas}', [PendaftaranController::class, 'pilihKampus'])->name('daftarPilihKampus');
        Route::get('pendaftaran/pilihkelas/{kelas}', [PendaftaranController::class, 'pilihKelas'])->name('daftarPilihKelas');
    });
});

Route::resource('usm', UsmController::class);
Route::get('widyamandala', [WidyamandalaController::class, 'index'])->name('widyamandala');
Route::post('widyamandala/daftar', [WidyamandalaController::class, 'store'])->name('widyamandalaDaftar');
Route::get('i3L', [I3lController::class, 'index'])->name('i3l');
Route::post('i3L/daftar', [I3lController::class, 'store'])->name('i3lDaftar');
Route::get('soegijapranata', [SoegijapranataController::class, 'index'])->name('soegijapranata');
Route::post('soegijapranata/daftar', [SoegijapranataController::class, 'store'])->name('soegijapranataDaftar');
Route::get('uphjakarta', [UphjakartaController::class, 'index'])->name('uphjakarta');
Route::post('uphjakarta/daftar', [UphjakartaController::class, 'store'])->name('uphjakartaDaftar');
Route::get('binus', [BinusController::class, 'index'])->name('binus');
Route::post('binus/daftar', [BinusController::class, 'store'])->name('binusDaftar');
Route::get('tristar', [TristarController::class, 'index'])->name('tristar');
Route::post('tristar/daftar', [TristarController::class, 'store'])->name('tristarDaftar');
Route::get('alfalink', [AlfalinkController::class, 'index'])->name('alfalink');
Route::post('alfalink/daftar', [AlfalinkController::class, 'store'])->name('alfalinkDaftar');
Route::get('ikado', [IkadoController::class, 'index'])->name('ikado');
Route::post('ikado/daftar', [IkadoController::class, 'store'])->name('ikadoDaftar');
Route::get('kristenpetra', [KristenpetraController::class, 'index'])->name('kristenpetra');
Route::post('kristenpetra/daftar', [KristenpetraController::class, 'store'])->name('kristenpetraDaftar');
Route::get('prasetiyamulya', [PrasetiyamulyaController::class, 'index'])->name('prasetiyamulya');
Route::post('prasetiyamulya/daftar', [PrasetiyamulyaController::class, 'store'])->name('prasetiyamulyaDaftar');
Route::get('mnp', [MnpController::class, 'index'])->name('mnp');
Route::post('mnp/daftar', [MnpController::class, 'store'])->name('mnpDaftar');
Route::get('sagesinstitute', [SagesinstituteController::class, 'index'])->name('sagesinstitute');
Route::post('sagesinstitute/daftar', [SagesinstituteController::class, 'store'])->name('sagesinstituteDaftar');
Route::get('xiamen', [XiamenController::class, 'index'])->name('xiamen');
Route::post('xiamen/daftar', [XiamenController::class, 'store'])->name('xiamenDaftar');
Route::get('parahyangan', [ParahyanganController::class, 'index'])->name('parahyangan');
Route::post('parahyangan/daftar', [ParahyanganController::class, 'store'])->name('parahyanganDaftar');
Route::get('ciputra', [CiputraController::class, 'index'])->name('ciputra');
Route::post('ciputra/daftar', [CiputraController::class, 'store'])->name('ciputraDaftar');
Route::get('ukdw', [UkdwController::class, 'index'])->name('ukdw');
Route::post('ukdw/daftar', [UkdwController::class, 'store'])->name('ukdwDaftar');
Route::get('calvin', [CalvinController::class, 'index'])->name('calvin');
Route::post('calvin/daftar', [CalvinController::class, 'store'])->name('calvinDaftar');
Route::get('atmajaya', [AtmajayaController::class, 'index'])->name('atmajaya');
Route::post('atmajaya/daftar', [AtmajayaController::class, 'store'])->name('atmajayaDaftar');
Route::get('umn', [UmnController::class, 'index'])->name('umn');
Route::post('umn/daftar', [UmnController::class, 'store'])->name('umnDaftar');
Route::get('polinbal', [PolinbalController::class, 'index'])->name('polinbal');
Route::post('polinbal/daftar', [PolinbalController::class, 'store'])->name('polinbalDaftar');
Route::get('krismaranatha', [KrismaranathaController::class, 'index'])->name('krismaranatha');
Route::post('krismaranatha/daftar', [KrismaranathaController::class, 'store'])->name('krismaranathaDaftar');
Route::get('tarumanagara', [TarumanagaraController::class, 'index'])->name('tarumanagara');
Route::post('tarumanagara/daftar', [TarumanagaraController::class, 'store'])->name('tarumanagaraDaftar');
Route::get('uksw', [UkswController::class, 'index'])->name('uksw');
Route::post('uksw/daftar', [UkswController::class, 'store'])->name('ukswDaftar');
Route::get('karangturi', [KarangturiController::class, 'index'])->name('karangturi');
Route::post('karangturi/daftar', [KarangturiController::class, 'store'])->name('karangturiDaftar');
Route::get('cnt', [CntController::class, 'index'])->name('cnt');
Route::post('cnt/daftar', [CntController::class, 'store'])->name('cntDaftar');
Route::get('sttabdiel', [SttabdielController::class, 'index'])->name('sttabdiel');
Route::post('sttabdiel/daftar', [SttabdielController::class, 'store'])->name('sttabdielDaftar');
Route::get('untagjakarta', [UntagjakartaController::class, 'index'])->name('untagjakarta');
Route::post('untagjakarta/daftar', [UntagjakartaController::class, 'store'])->name('untagjakartaDaftar');
Route::get('vus', [VusController::class, 'index'])->name('vus');
Route::post('vus/daftar', [VusController::class, 'store'])->name('vusDaftar');
Route::get('febundip', [FebundipController::class, 'index'])->name('febundip');
Route::post('febundip/daftar', [FebundipController::class, 'store'])->name('febundipDaftar');
Route::get('sttkao', [SttkaoController::class, 'index'])->name('sttkao');
Route::post('sttkao/daftar', [SttkaoController::class, 'store'])->name('sttkaoDaftar');
Route::get('udinus', [UdinusController::class, 'index'])->name('udinus');
Route::post('udinus/daftar', [UdinusController::class, 'store'])->name('udinusDaftar');

Route::get('pendaftaran/sukses', [PendaftaranController::class, 'sukses'])->name('daftarSukses');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
