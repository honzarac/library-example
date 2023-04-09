<?php

namespace App\Http\Controllers;

use App\Models\LibraryItem;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function dashboard()
    {
        dd(LibraryItem::with('author')->paginate(20));
        return Inertia::render('Dashboard', [
            'libraryItems' => LibraryItem::with('author')->paginate(20)
        ]);
    }
}
