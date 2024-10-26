<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'edad' => 'required|string|max:3',
            'email' => 'required|email|unique:contacts',
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contacto creado exitosamente.');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }



    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contacto eliminado exitosamente.');
    }

    public function menoresDeEdad()
    {
        $contactosMenores = Contact::where('edad', '<', 18)->get();
        return view('contacts.menor', compact('contactosMenores'));
    }

}
