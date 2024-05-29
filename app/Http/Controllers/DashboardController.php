<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Province;
use App\Models\Category;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('dashboard.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all();
        $categories = Category::all();
        return view('dashboard.create', compact('provinces', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('dashboard.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $provinces = Province::all();
        $categories = Category::all();
        return view('dashboard.edit', compact('item', 'provinces', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateItemRequest $request, Item $item)
    {
        // Validasi dan update item
        $validatedData = $request->validated();

        $item->name = $validatedData['name'];
        $item->category_id = $validatedData['category'];
        $item->province_id = $validatedData['province'];

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            $item->photo = $path;
        }

        $item->save();

        return redirect()->route('dashboard.index')->with('success', 'Item updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
