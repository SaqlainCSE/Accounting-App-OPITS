<?php

namespace App\Http\Controllers;

use App\Models\ShareKhatian as Share;
use Illuminate\Http\Request;

class ShareKhatian extends Controller
{
    public function shareCreate()
    {
        return view('share.create');
    }

    public function shareStore(Request $request)
    {
        $request->validate([
            'member_no' => 'required|string|max:255',
            'member_name' => 'required|string|max:255',
            'share_number' => 'required|string|max:255',
            'share_total_price' => 'required|string',
            'share_kisti_aday_amount' => 'required|string',
            'share_kisti_aday_date' => 'required|date',
            'share_return_amount' => 'required|string',
            'share_return_date' => 'required|date',
            'baki' => 'required|string',
            'comments' => 'nullable|string',
            'user_name' => 'required|string|max:255',
        ]);

        Share::create([
            'member_no' => $request->member_no,
            'member_name' => $request->member_name,
            'share_number' => $request->share_number,
            'share_total_price' => $request->share_total_price,
            'share_kisti_aday_amount' => $request->share_kisti_aday_amount,
            'share_kisti_aday_date' => $request->share_kisti_aday_date,
            'share_return_amount' => $request->share_return_amount,
            'share_return_date' => $request->share_return_date,
            'baki' => $request->baki,
            'comments' => $request->comments,
            'user_name' => $request->user_name,
        ]);

        return redirect()->back()->with('success', 'Data stored successfully!');
    }
}
