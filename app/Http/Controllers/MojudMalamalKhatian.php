<?php

namespace App\Http\Controllers;

use App\Models\MojudMalamalKhatian as MojudMalamal;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class MojudMalamalKhatian extends Controller
{
    public function mojudMalamalCreate()
    {
        return view('mojudMalamal.create');
    }

    public function mojudMalamalStore(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'product_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'present_stock' => 'required|string|max:255',
            'product_count' => 'required|string|max:255',
            'product_price' => 'required|string|max:255',
            'total_amount' => 'required|string|max:255',
            'comments' => 'nullable|string',
            'user_name' => 'required|string|max:255',
        ]);

        MojudMalamal::create([
            'date' => $request->date,
            'product_name' => $request->product_name,
            'category' => $request->category,
            'present_stock' => $request->present_stock,
            'product_count' => $request->product_count,
            'product_price' => $request->product_price,
            'total_amount' => $request->total_amount,
            'comments' => $request->comments,
            'user_name' => $request->user_name,
        ]);

        return redirect()->back()->with('success', 'Data stored successfully!');
    }
}
