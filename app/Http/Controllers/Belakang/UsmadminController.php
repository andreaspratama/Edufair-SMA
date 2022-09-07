<?php

namespace App\Http\Controllers\Belakang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usm;

class UsmadminController extends Controller
{
    public function index()
    {
        $items = Usm::all();
        return view('pages.admin.indexusm', compact('items'));
    }
}
