<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index()
    {
        return Inertia::render('Inertia/Index');
    }

    public function show($id)
    {
        // dd($id);
        return Inertia::render('Inertia/Show',
        [
            'id' => $id
        ]);
    }

    public function store(Request $request)
    {
        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        // リダイレクト
        return to_route('inertia.index');
    }
}