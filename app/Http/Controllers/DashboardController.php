<?php

namespace App\Http\Controllers;

use App\Models\LibraryItem;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Dashboard', [
            'libraryItems' => LibraryItem::with('author')->paginate(20),
        ]);
    }
}
