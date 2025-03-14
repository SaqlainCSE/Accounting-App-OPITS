<?php

namespace App\Http\Controllers;

use App\Models\KorjoKhatian as Korjo;
use Illuminate\Http\Request;

class KorjoKhatian extends Controller
{
    public function korjoCreate()
    {
        return view('korjo.create');
    }

    public function korjoStore(Request $request)
    {
        $request->validate([
            'member_no' => 'required|string|max:255',
            'member_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'sanchaya_aday' => 'required|string',
            'asol_aday' => 'required|string',
            'munafa_aday' => 'required|string',
            'service_charge' => 'required|string',
            'total' => 'required|string',
            'comments' => 'nullable|string',
            'user_name' => 'required|string|max:255',
        ]);

        Korjo::create([
            'member_no' => $request->member_no,
            'member_name' => $request->member_name,
            'category' => $request->category,
            'sanchaya_aday' => $request->sanchaya_aday,
            'asol_aday' => $request->asol_aday,
            'munafa_aday' => $request->munafa_aday,
            'service_charge' => $request->service_charge,
            'total' => $request->total,
            'comments' => $request->comments,
            'user_name' => $request->user_name,
        ]);

        return redirect()->back()->with('success', 'Data stored successfully!');
    }
}
