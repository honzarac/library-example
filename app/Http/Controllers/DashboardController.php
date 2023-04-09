<?php

namespace App\Http\Controllers;

use App\Models\LibraryItem;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $libraryItems = LibraryItem::with('author');

        $query = $request->query('query');
        if ($query && $query !== '') {
            $libraryItems = $libraryItems->whereFullText('name', $query);
        }

        return Inertia::render('Dashboard', [
            'libraryItems' => $libraryItems->paginate(20),
            'query' => $query
        ]);
    }
}
