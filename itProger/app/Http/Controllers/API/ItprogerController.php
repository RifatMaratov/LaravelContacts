<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\contactstorerequest;
use App\Http\Resources\contactresource;
use App\Models\Contact;
use App\Services\BlogService;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Response;

class ItprogerController extends Controller
{
//    protected $blogService;
//
//
//    public function __construct(BlogService $blogService) {
//      $this->blogService = $blogService;
//    }


   public function index()
   {
       $contacts = Contact::all();
       return contactresource::collection($contacts);
   }

   public function store(contactstorerequest $request)
   {
        $review = Contact::create($request->validated());
        return new contactresource($review);
   }

   public function show($id)
   {
       return new contactresource(Contact::find($id));
   }

   public function update(contactstorerequest $request, $id)
   {
       $contact = Contact::all()->find($id);
       $contact->update($request->validated());
       return new contactresource($contact);
   }

   public function destroy($id)
   {
       $contact = Contact::all()->find($id);
       $contact->delete();
       return response(null, Response::HTTP_NO_CONTENT);
   }
}
