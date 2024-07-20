<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = new Contact();

        $data->full_name = $request->input('full_name');
        $data->email = $request->input('email');
        $data->description = $request->input('description');
        $data->save();

        return response()->json([
            'status' => 200,
            'message' => 'Registration Sent'
        ]);
    }
}
