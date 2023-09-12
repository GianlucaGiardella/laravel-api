<?php

namespace App\Http\Controllers\Api;

use App\Models\Technology;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $types = Technology::all();

        return response()
            ->json([
                'success' => true,
                'results' => $types,
            ]);
    }
}