<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    //

    /* public function index()
    {
        $sales = Sale::with('product')->get();
        return view('sales.index', compact('sales'));
    } */
    public function index()
    {
        $sales = Sale::all();

        // Calcul du total des ventes
        // $totalSales = $sales->sum('amount'); // Assurez-vous que la colonne `amount` existe dans la table `sales`
        $totalSales = $sales->sum(function($sale) {
            return $sale->quantity * $sale->price;
        });
        return view('sales.index', compact('sales', 'totalSales'));
    }

    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Sale::create($request->all());

        return redirect()->route('sales.index')->with('success', 'Sale created successfully.');
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $products = Product::all();
        return view('sales.edit', compact('sale', 'products'));
    }

    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $sale->update($request->all());

        return redirect()->route('sales.index')->with('success', 'Sale updated successfully.');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();

        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully.');
    }
}
