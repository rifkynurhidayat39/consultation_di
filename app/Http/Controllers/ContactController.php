<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // tampilkan semua contact
    public function index()
    {
        $contacts = Contact::orderBy('is_primary', 'desc')->get();
        return view('backend.contact.index', compact('contacts'));
    }

    // form edit contact
    public function edit(Contact $contact)
    {
        return view('backend.contact.edit', compact('contact'));
    }

    // update contact
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'address' => 'required',
            'google_maps_link' => 'nullable|url',
        ]);

        // kalau dijadikan primary, matikan yang lain
        if ($request->is_primary) {
            Contact::where('is_primary', true)
                ->where('id', '!=', $contact->id)
                ->update(['is_primary' => false]);
        }

        $contact->update($request->all());

        return redirect()
            ->route('contact.index')
            ->with('success', 'Contact berhasil diperbarui');
    }

    // hapus contact (opsional)
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()
            ->route('contact.index')
            ->with('success', 'Contact berhasil dihapus');
    }
}
