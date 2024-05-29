<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Province;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

        DB::beginTransaction();

        try {
            $request->validated();

            $filename = null;
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $filename = $request->name . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images/'), $filename);
            }

            Item::create([
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'province_id' => $request->province_id,
                'photo' => $filename,
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // handle the exception here, maybe return with an error message
        }
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
        DB::beginTransaction();

        try {
            $request->validated();

            $filename = null;
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $filename = $request->name . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images/'), $filename);
            }

            $item->update([
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'province_id' => $request->province_id,
                'photo' => $filename,
            ]);

            DB::commit();

            return redirect()->route('dashboard.index');
        } catch (\Exception $e) {
            DB::rollback();
            // handle the exception here, maybe return with an error message
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        DB::beginTransaction();
        try {
            if ($item->image && file_exists(public_path('assets/images/' . $item->image))) {
                unlink(public_path('assets/images/' . $item->image));
            }
            $item->delete();
            DB::commit();

            return redirect()->route('dashboard.index');
        } catch (\Exception $e) {
            DB::rollback();
            // handle the exception here, maybe return with an error message
        }
    }
}
