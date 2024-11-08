<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CatalogueController extends Controller
{
    // Index method to filter and sort items
    public function index(Request $request)
    {
        $query = Item::query();

        // Filter by category
        if ($request->has('category') && $request->category !== '') {
            $query->where('category', $request->category);
        }

        // Sort by title
        if ($request->has('sort')) {
            $query->orderBy('title', $request->sort);
        }

        // Get the filtered and sorted items
        $items = $query->get();

        // Return the view with the items
        return view('catalogue.index', compact('items'));
    }

    // Show method to display detailed information of a single item
    public function show($id)
    {
        $item = Item::findOrFail($id);

        // Return the view with the item details
        return view('catalogue.show', compact('item'));
    }
}
