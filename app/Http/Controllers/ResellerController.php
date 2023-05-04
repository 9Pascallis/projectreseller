<?php

namespace App\Http\Controllers;
use App\Models\Reseller;
use Illuminate\Http\Request;

class ResellerController extends Controller
{
    public function index()
    {
        $reseller = Reseller::all();
        return response()->json(
            [
                'status' => 'success',
                'data' => $reseller
            ]
            );
    }
}
