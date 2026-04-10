<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function create()
    {
        $products = Product::where('is_active', true)->get();
        return view('cotizar', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'product_id' => 'required|exists:products,id',
            'message' => 'required|string',
        ]);

        Quote::create($validated);

        return redirect()->route('cotizar.create')->with('success', '¡Cotización enviada exitosamente! Nuestro equipo industrial se pondrá en contacto pronto.');
    }
}
