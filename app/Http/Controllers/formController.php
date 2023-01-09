<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class formController extends Controller
{
    public function form(): Response
    {
        return response()->view('inputForm');
    }

    public function submitForm(Request $request): Response
    {
        $name = $request->input('name');
        return Response()->view('hello', ['name' => $name]);
    }
}