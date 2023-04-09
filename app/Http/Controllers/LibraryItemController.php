<?php

namespace App\Http\Controllers;

use App\Models\LibraryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class LibraryItemController extends Controller
{
    public function detail(Request $request)
    {
        $validated = Validator::make(
            $request->route()->parameters(),
            ['id' => 'required|exists:library_items,id']
        )->valid();

        $libraryItem = LibraryItem::with(['author', 'borrowable'])->where('id', $validated['id'])->first();

        return Inertia::render('LibraryItem', [
            'libraryItem' => $libraryItem,
        ]);
    }

    public function update(int $id, Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string',
        ]);

        $libraryItem = LibraryItem::where('id', $id)->first();
        $libraryItem->fill($validated);
        $libraryItem->save();

        return back(303);
    }

    public function delete(Request $request)
    {
        $validated = Validator::make(
            $request->route()->parameters(),
            ['id' => 'required|exists:library_items,id']
        )->valid();

        LibraryItem::where('id', $validated['id'])->delete();
        return to_route('dashboard');
    }
}
