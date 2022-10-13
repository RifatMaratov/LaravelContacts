<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller{

    public function index(){
        $allcontacts = Contact::all();
        return view('reviews.index', ['mycontacts' => $allcontacts]);
    }

    public function create(){
        return view('reviews.create');
    }

    public function review(){
        return view('reviews.about');
    }

    public function store(Request $request){
        Contact::create([
            'email' => $request->email,
            'subject' =>$request->subject,
            'message' => $request->message
        ]);

        return redirect()->route('reviews.index');
    }

    public function show(Contact $review){
        return view('reviews.show', ['contact' => $review]);
    }

    public function edit(Contact $review){
        return view('reviews.edit', ['contact' => $review]);
    }

    public function update(Request $request, Contact $review){
        $review->update([
            'email' => $request->email,
            'subject' =>$request->subject,
            'message' => $request->message
        ]);

        return redirect()->route('reviews.index');
    }

    public function destroy(Contact $review){
        $review->delete();

        return redirect()->route('reviews.index');
    }
}
