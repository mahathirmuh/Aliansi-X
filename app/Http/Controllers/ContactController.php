<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

    public function update($id, Request $request){
        $contact = Contact::find($id);

        $contact->kontak = $request->kontak;
        $contact->save();
        return redirect('admin');
    }

}
