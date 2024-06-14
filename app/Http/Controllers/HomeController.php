<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::with(['galleries'])->paginate(4);
        return view('pages.home', [
            'items' => $items
        ]);
    }
}
