<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Transaction::with(['details', 'travel_packages', 'users'])->paginate(8);

        return view('pages.admin.transaction.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Transaction::create($data);
        return redirect()->route('Admintransaction.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Transaction::with([
            'details',
            'travel_packages',
            'users'
        ])->findOrFail($id);

        return view('pages.admin.transaction.detail', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Transaction::findOrFail($id);

        return view('pages.admin.transaction.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = Transaction::findOrFail($id);

        $item->update($data);

        return redirect()->route('Admintransaction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $items = Transaction::findOrFail($id);
        $items->delete();

        return redirect()->route('Admintransaction.index');
    }
}
