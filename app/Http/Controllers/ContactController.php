<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validación (Importante para la seguridad)
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // 2. Envío del Correo
        try {
            // El correo de destino (tu correo, donde recibirás los mensajes)
            $recipientEmail = 'davidcastrejoncastrejon65@gmail.com'; // **ACTUALIZA ESTO**

            // Se usa la clase Mail que crearemos en el paso 3
            Mail::to($recipientEmail)->send(new ContactMessageMail($validatedData));

            return back()->with('success', '¡Gracias! Tu mensaje ha sido enviado correctamente.');
            
        } catch (\Exception $e) {
            // Manejo de errores si el servidor de correo falla
            return back()->with('error', 'Hubo un error al enviar el mensaje. Inténtalo de nuevo más tarde.');
        }
    }
}