<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

Route::get('/', function () {
    $reviewsController = new ReviewController();
    $reviews = $reviewsController->getFilteredReviews();
    $reviews = array_reverse($reviews); 
    return view('welcome', compact('reviews'));
});

Route::get('/contactanos', function () {
    return view('contactanos');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    
    $reviewsController = new ReviewController();
    $reviews = $reviewsController->getFilteredReviews();
    $reviews = array_reverse($reviews); 
    return view('servicios', compact('reviews'));
});

Route::get('/productos', function () {

    $models = require __DIR__ . '/../app/data/gallery_models.php';
    $modelsCollection = new Collection($models);
    $perPage = 6;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $offset = ($currentPage * $perPage) - $perPage;
    $galleryModels = new LengthAwarePaginator(
        $modelsCollection->slice($offset, $perPage)->values(),
        $modelsCollection->count(),
        $perPage,
        $currentPage,
        ['path' => LengthAwarePaginator::resolveCurrentPath()]
    );
    return view('productos',['galleryModels' => $galleryModels,]);
}) ->name('gallery');

/* ruta para que el formulario envie los datos */
Route::post('/submit-review', [ReviewController::class, 'store'])->name('reviews.store');