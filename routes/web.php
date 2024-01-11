<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminFunController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\DgController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SpottlightController;
use App\Http\Controllers\WcController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dg-msg', [HomeController::class, 'msg'])->name('dg-msg');
Route::get('/tender-show', [HomeController::class, 'tender'])->name('tender-show');
Route::get('/tender-show1', [HomeController::class, 'tender1'])->name('tender-show1');
Route::get('/tender-show2', [HomeController::class, 'tender2'])->name('tender-show2');
Route::get('/peace-keeping', [HomeController::class, 'peaceKeeping'])->name('peace-keeping');

Route::get('/notice', [HomeController::class, 'notice'])->name('notice');

Route::get('/photo-gallery', [PhotoGalleryController::class, 'gallery'])->name('photo-gallery');

Route::get('/history', [AboutController::class, 'history'])->name('history');
Route::get('/martyres', [AboutController::class, 'martyres'])->name('martyres');
Route::get('/function', [AboutController::class, 'function'])->name('function');
Route::get('/citizen-charter', [AboutController::class, 'charter'])->name('charter');
Route::get('/mission', [AboutController::class, 'mission'])->name('mission');

Route::get('/admin-branch', [BranchesController::class, 'admin'])->name('admin-branch');
Route::get('/training-branch', [BranchesController::class, 'training'])->name('training-branch');
Route::get('/health-branch', [BranchesController::class, 'health'])->name('health-branch');
Route::get('/medical-branch', [BranchesController::class, 'medical'])->name('medical-branch');

Route::get('/afip-institution', [InstitutionController::class, 'afip'])->name('afip-institution');
Route::get('/afmi-institution', [InstitutionController::class, 'afmi'])->name('afmi-institution');
Route::get('/afmsd-institution', [InstitutionController::class, 'afmsd'])->name('afmsd-institution');
Route::get('/affdl-institution', [InstitutionController::class, 'affdl'])->name('affdl-institution');
Route::get('/cmhs-institution', [InstitutionController::class, 'cmhs'])->name('cmhs-institution');
Route::get('/ambulance-institution', [InstitutionController::class, 'ambulance'])->name('ambulance-institution');


Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Main Slider 

    Route::get('/add-slider', [SliderController::class, 'addSlider'])->name('add-slider');
    Route::post('/slide-create', [SliderController::class, 'sliderStore'])->name('slide-create');
    Route::get('/main-slider', [SliderController::class, 'mainSlider'])->name('main-slider');
    Route::get('/edit-slider/{id}', [SliderController::class, 'editSlider'])->name('edit-slider');
    Route::post('/update-slider/{id}', [SliderController::class, 'updateSlider'])->name('update-slider');

    //DG Manage
    Route::get('/dg-manage', [DgController::class, 'index'])->name('dg-manage');
    Route::get('/dg-add', [DgController::class, 'add'])->name('dg-add');
    Route::post('/dg-store', [DgController::class, 'store'])->name('dg-store');
    Route::get('/dg-edit', [DgController::class, 'edit'])->name('dg-edit');
    Route::post('/dg-update', [DgController::class, 'update'])->name('dg-update');

    //WC Msg
    Route::get('/wc-edit', [WcController::class, 'edit'])->name('wc-edit');
    Route::post('/wc-update', [WcController::class, 'update'])->name('wc-update');

    //News Announcment

    Route::get('/news-edit', [WcController::class, 'newsEdit'])->name('news-edit');
    Route::post('/news-update', [WcController::class, 'newsUpdate'])->name('news-update');

    //Medical College Manage
    Route::get('/mc-manage', [WcController::class, 'mcIndex'])->name('mc-manage');
    Route::get('/mc-edit/{id}', [WcController::class, 'mcEdit'])->name('mc-edit');
    Route::post('/mc-update/{id}', [WcController::class, 'mcUpdate'])->name('mc-update');

    // Spottlight

    Route::get('/spottlight', [SpottlightController::class, 'index'])->name('spottlight');
    Route::get('/spottlight-add', [SpottlightController::class, 'add'])->name('add-spottlight');
    Route::post('/spottlight-create', [SpottlightController::class, 'Store'])->name('create-spottlight');
    Route::get('/spottlight-edit/{id}', [SpottlightController::class, 'edit'])->name('edit-spottlight');
    Route::post('/spottlight-update/{id}', [SpottlightController::class, 'update'])->name('update-spottlight');
    Route::get('/spottlight-delete/{id}', [SpottlightController::class, 'destroy'])->name('delete-spottlight');

    //History
    Route::get('/history-add', [AdminController::class, 'historyAdd'])->name('add-history');
    Route::post('/history-create', [AdminController::class, 'historyStore'])->name('create-history');
    Route::get('/history-edit', [AdminController::class, 'historyEdit'])->name('edit-history');
    Route::post('/history-update', [AdminController::class, 'historyUpdate'])->name('update-history');
    // Liberation War
    Route::get('/lw-edit', [AdminController::class, 'lwEdit'])->name('edit-lw');
    Route::post('/lw-update', [AdminController::class, 'lwUpdate'])->name('update-lw');

    //Function 
    Route::get('/fun-manage', [AdminFunController::class, 'index'])->name('fun-manage');
    Route::get('/msg-edit', [AdminFunController::class, 'msgEdit'])->name('msg-edit');
    Route::post('/msg-update', [AdminFunController::class, 'msgUpdate'])->name('msg-update');
    Route::get('/ex-dg-add', [AdminFunController::class, 'exDGadd'])->name('ex-dg-add');
    Route::post('/ex-dg-store', [AdminFunController::class, 'exDGstore'])->name('ex-dg-store');
    Route::get('/ex-dg-edit/{id}', [AdminFunController::class, 'exDGedit'])->name('ex-dg-edit');
    Route::post('/ex-dg-update/{id}', [AdminFunController::class, 'exDGupdate'])->name('ex-dg-update');

    Route::get('/cs-gen-add', [AdminFunController::class, 'csGENadd'])->name('cs-gen-add');
    Route::post('/cs-gen-store', [AdminFunController::class, 'csGENstore'])->name('cs-gen-store');
    Route::get('/cs-gen-edit/{id}', [AdminFunController::class, 'csGENedit'])->name('cs-gen-edit');
    Route::post('/cs-gen-update/{id}', [AdminFunController::class, 'csGENupdate'])->name('cs-gen-update');

    Route::get('/cp-gen-add', [AdminFunController::class, 'cpGENadd'])->name('cp-gen-add');
    Route::post('/cp-gen-store', [AdminFunController::class, 'cpGENstore'])->name('cp-gen-store');
    Route::get('/cp-gen-edit/{id}', [AdminFunController::class, 'cpGENedit'])->name('cp-gen-edit');
    Route::post('/cp-gen-update/{id}', [AdminFunController::class, 'cpGENupdate'])->name('cp-gen-update');

    Route::get('/cds-gen-add', [AdminFunController::class, 'cdsGENadd'])->name('cds-gen-add');
    Route::post('/cds-gen-store', [AdminFunController::class, 'cdsGENstore'])->name('cds-gen-store');
    Route::get('/cds-gen-edit/{id}', [AdminFunController::class, 'cdsGENedit'])->name('cds-gen-edit');
    Route::post('/cds-gen-update/{id}', [AdminFunController::class, 'cdsGENupdate'])->name('cds-gen-update');

    Route::get('/dy-dg-add', [AdminFunController::class, 'dyDGadd'])->name('dy-dg-add');
    Route::post('/dy-dg-store', [AdminFunController::class, 'dyDGstore'])->name('dy-dg-store');
    Route::get('/dy-dg-edit/{id}', [AdminFunController::class, 'dyDGedit'])->name('dy-dg-edit');
    Route::post('/dy-dg-update/{id}', [AdminFunController::class, 'dyDGupdate'])->name('dy-dg-update');

    //Citizen Charter
    Route::get('/ch-add', [AdminController::class, 'chAdd'])->name('ch-add');
    Route::post('/ch-create', [AdminController::class, 'chStore'])->name('ch-create');
    Route::get('/ch-edit', [AdminController::class, 'chEdit'])->name('ch-edit');
    Route::post('/ch-update', [AdminController::class, 'chUpdate'])->name('ch-update');

    //Mission/Role
    Route::get('/mission-edit', [AdminController::class, 'missionEdit'])->name('mission-edit');
    Route::post('/mission-update', [AdminController::class, 'missionUpdate'])->name('mission-update');

    // Branches 

    Route::get('/admin-branch-edit', [BranchesController::class, 'adminEdit'])->name('admin-branch-edit');
    Route::post('/admin-branch-update', [BranchesController::class, 'adminUpdate'])->name('admin-branch-update');

    Route::get('/training-branch-edit', [BranchesController::class, 'trainingEdit'])->name('training-branch-edit');
    Route::post('/training-branch-update', [BranchesController::class, 'trainingUpdate'])->name('training-branch-update');

    Route::get('/health-branch-edit', [BranchesController::class, 'healthEdit'])->name('health-branch-edit');
    Route::post('/health-branch-update', [BranchesController::class, 'healthUpdate'])->name('health-branch-update');

    Route::get('/medical-branch-edit', [BranchesController::class, 'medicalEdit'])->name('medical-branch-edit');
    Route::post('/medical-branch-update', [BranchesController::class, 'medicalUpdate'])->name('medical-branch-update');

    // Peace Keeping 

    Route::get('/pk-edit', [OthersController::class, 'pkEdit'])->name('pk-edit');
    Route::post('/pk-update', [OthersController::class, 'pkUpdate'])->name('pk-update');

    Route::get('/contact-edit', [OthersController::class, 'contactEdit'])->name('contact-edit');
    Route::post('/contact-update', [OthersController::class, 'contactUpdate'])->name('contact-update');

    Route::get('/imp-link-manage', [OthersController::class, 'linkIndex'])->name('imp-link-manage');
    Route::get('/imp-link-edit/{id}', [OthersController::class, 'linkEdit'])->name('imp-link-edit');
    Route::post('/imp-link-update/{id}', [OthersController::class, 'linkUpdate'])->name('imp-link-update');
    // Institution

    Route::get('/afip-edit', [InstitutionController::class, 'afipEdit'])->name('afip-edit');
    Route::post('/afip-update', [InstitutionController::class, 'afipUpdate'])->name('afip-update');

    Route::get('/afmi-edit', [InstitutionController::class, 'afmiEdit'])->name('afmi-edit');
    Route::post('/afmi-update', [InstitutionController::class, 'afmiUpdate'])->name('afmi-update');

    Route::get('/afmsd-edit', [InstitutionController::class, 'afmsdEdit'])->name('afmsd-edit');
    Route::post('/afmsd-update', [InstitutionController::class, 'afmsdUpdate'])->name('afmsd-update');

    Route::get('/affdl-edit', [InstitutionController::class, 'affdlEdit'])->name('affdl-edit');
    Route::post('/affdl-update', [InstitutionController::class, 'affdlUpdate'])->name('affdl-update');

    Route::get('/cmhs-edit', [InstitutionController::class, 'cmhsEdit'])->name('cmhs-edit');
    Route::post('/cmhs-update', [InstitutionController::class, 'cmhsUpdate'])->name('cmhs-update');

    Route::get('/ambulance-edit', [InstitutionController::class, 'ambulanceEdit'])->name('ambulance-edit');
    Route::post('/ambulance-update', [InstitutionController::class, 'ambulanceUpdate'])->name('ambulance-update');

    // Photo Gallery

    Route::get('/photo-manage', [PhotoGalleryController::class, 'index'])->name('photo-manage');
    Route::get('/photo-add', [PhotoGalleryController::class, 'add'])->name('photo-add');
    Route::post('/photo-create', [PhotoGalleryController::class, 'Store'])->name('photo-store');
    Route::get('/photo-edit/{id}', [PhotoGalleryController::class, 'edit'])->name('photo-edit');
    Route::post('/photo-update/{id}', [PhotoGalleryController::class, 'update'])->name('photo-update');
    Route::get('/photo-delete/{id}', [PhotoGalleryController::class, 'destroy'])->name('photo-delete');
});


require __DIR__ . '/auth.php';
