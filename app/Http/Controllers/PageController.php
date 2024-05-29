<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Item;

class PageController extends Controller
{

    public function rumahAdat(Request $request)
    {
        $provinceId = $request->input('province_id');
        $provinces = Province::all();

        if ($provinceId) {
            $items = Item::where('province_id', $provinceId)
                ->where('category_id', 1)
                ->get();
        } else {
            $items = Item::where('category_id', 1)->paginate(5);
        }

        return view('pages.rumah_adat', compact('items', 'provinces', 'provinceId'));
    }

    public function pakaianAdat(Request $request)
    {
        $provinceId = $request->input('province_id');
        $provinces = Province::all();

        if ($provinceId) {
            $items = Item::where('province_id', $provinceId)
                ->where('category_id', 2)
                ->get();
        } else {
            $items = Item::where('category_id', 2)->paginate(5);
        }
        return view('pages.pakaian_adat', compact('items', 'provinces', 'provinceId'));
    }

    public function tarianAdat(Request $request)
    {
        $provinceId = $request->input('province_id');
        $provinces = Province::all();

        if ($provinceId) {
            $items = Item::where('province_id', $provinceId)
                ->where('category_id', 3)
                ->get();
        } else {
            $items = Item::where('category_id', 3)->paginate(5);
        }
        return view('pages.tarian_adat', compact('items', 'provinces', 'provinceId'));
    }

    public function alatMusik(Request $request)
    {
        $provinceId = $request->input('province_id');
        $provinces = Province::all();

        if ($provinceId) {
            $items = Item::where('province_id', $provinceId)
                ->where('category_id', 4)
                ->get();
        } else {
            $items = Item::where('category_id', 4)->paginate(5);
        }
        return view('pages.alat_musik', compact('items', 'provinces', 'provinceId'));
    }

    public function makananTradisional(Request $request)
    {
        $provinceId = $request->input('province_id');
        $provinces = Province::all();

        if ($provinceId) {
            $items = Item::where('province_id', $provinceId)
                ->where('category_id', 6)
                ->get();
        } else {
            $items = Item::where('category_id', 6)->paginate(5);
        }
        return view('pages.makanan_tradisional', compact('items', 'provinces', 'provinceId'));
    }

    public function senjataTradisional(Request $request)
    {
        $provinceId = $request->input('province_id');
        $provinces = Province::all();

        if ($provinceId) {
            $items = Item::where('province_id', $provinceId)
                ->where('category_id', 5)
                ->get();
        } else {
            $items = Item::where('category_id', 5)->paginate(5);
        }
        return view('pages.senjata_tradisional', compact('items', 'provinces', 'provinceId'));
    }
}
