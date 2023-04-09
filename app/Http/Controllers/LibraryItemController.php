<?php

namespace App\Http\Controllers;

use App\Models\Author;
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
            'authors' => Author::orderBy('full_name')->get()->pluck('full_name', 'id'),
        ]);
    }

    public function update(int $id, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'author_id' => 'required|exists:authors,id',
        ]);

        $borroawableRawData = array_filter($request->all(), fn($key) => str_starts_with($key, 'borrowable.'), ARRAY_FILTER_USE_KEY);
        $borroawableRawData = array_combine(
            array_map(fn($key) => str_replace('borrowable.', '', $key),
                array_keys($borroawableRawData)), array_values($borroawableRawData)
        );
        $validatedBorrowable = Validator::make(
            $borroawableRawData,
            [
                'isbn' => 'string',
                'publisher_name' => 'string'
            ]
        )->validate();

        $libraryItem = LibraryItem::where('id', $id)->first();
        $libraryItem->fill($validated);
        $libraryItem->borrowable->fill($validatedBorrowable);
        $libraryItem->borrowable->save();
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
