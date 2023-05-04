<?php

namespace App\Http\Controllers;
use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index()
    {
        $konten = Konten::all();
        return response()->json(
            [
                'status' => 'success',
                'data' => $konten
            ]
            );
    }
}
