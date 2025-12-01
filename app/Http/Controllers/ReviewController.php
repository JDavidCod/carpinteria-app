<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Storage;
use Illuminate\Http\Request;


class ReviewController extends Controller
{
    private $filePath = 'reviews.json';
    private $maxReviews = 4;
    private $minRating = 4; // para mostrar 4 a 5 estrellas 

    /* lee todos los comentarios en el archivo json */

    private function getReviews()
    {
        if (!Storage::exists($this->filePath)) {
            return [];
        }

        $json = Storage::get($this->filePath);
        return json_decode($json, true) ?? [];
    }

    /* guara el rray de comentarios en el archivo json */
    private function saveReviews(array $reviews)
    {
        Storage::put($this->filePath, json_encode($reviews, JSON_PRETTY_PRINT));
    }
    /* procesa y guarda un nuevo comentario */
    public function store(Request $request)
    {
        /* valida la solicitud (minimo) */
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:500',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        /* crea el nuevo comentario */

        $newReview = [
            'name' => $request->name,
            'comment' => $request->comment,
            'rating' => $request->rating,
            'date' => now()->toDateTimeString(),
        ];
        /* obtener y agregar los comentarios */
        $reviews = $this->getReviews();
        $reviews[] = $newReview;

        /* implementar la regla de maximo 4 comentarios */
        if (count($reviews) > $this->maxReviews) {
            array_shift($reviews); // elimina el comentario mas antiguo
        }
        /* guardar los comentarios actualizados */
        $this->saveReviews($reviews);

        /* redireccionar con exito el mensaje que fue agregado todo */
        return back()->with('success', '¡Gracias por tu comentario!');
    }

    /* obtiene los comentarios filtrados para mostrarlos en la vista  */

    Public function getFilteredReviews()
    {
        $allReviews = $this->getReviews();

        /* filtra los comentarios por longitud minima */
        $filteredReviews = array_filter($allReviews, function ($review) {
            return $review['rating'] >= $this->minRating;
        });

        return $filteredReviews;
    }
    
}
