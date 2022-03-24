<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $rules = $this->getRules();
        $validated = $request->validate($rules);
    }

    public function getRules()
    {
        return [
            'mailto_name' => ['required'],
            'email' => ['required'],
            'corps_du_message' => ['required'],
        ];
    }
}


