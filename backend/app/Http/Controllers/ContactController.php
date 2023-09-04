<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    protected $contact;
    public function __construct(){
        $this->contact = new Contact();
        
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->contact->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = $this->contact->find($id);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = $this->contact->find($id);
        $contact->update($request->all());
        return $contact;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = $this->student->find($id);
        return $student->delete();   
    }
}
