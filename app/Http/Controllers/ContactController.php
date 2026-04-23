<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validation
            $validated = $request->validate([
                'nom' => 'required|string|max:255',
                'email' => 'required|email',
                'sujet' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            // Création du message
            $message = ContactMessage::create($validated);
            
            // Vérification si l'enregistrement a réussi
            if ($message && $message->id) {
                // Retour au portfolio avec message de succès
                return redirect()->route('portfolio.index')->with('success', '✅ Message enregistré avec succès dans la base de données (ID: ' . $message->id . ')');
            } else {
                return redirect()->route('portfolio.index')->with('error', '❌ Erreur: Le message n\'a pas pu être enregistré')->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->route('portfolio.index')->with('error', '❌ Erreur lors de l\'enregistrement: ' . $e->getMessage())->withInput();
        }
    }

    public function index()
    {
        $messages = ContactMessage::latest()->get();
        return view('messages.index', compact('messages'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message = ContactMessage::findOrFail($id);
        $message->update($request->all());
        return redirect()->route('messages.index')->with('success', 'Message mis à jour avec succès');
    }

    public function destroy($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Message supprimé avec succès');
    }
}
