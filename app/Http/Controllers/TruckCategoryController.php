<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TruckCategory;

class TruckCategoryController extends Controller
{
    public function index()
    {
        $categories = TruckCategory::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
        ]);

        TruckCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category added successfully.');
    }
}

