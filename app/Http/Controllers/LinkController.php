<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Auth;

class LinkController extends Controller
{
    public function index() {
        
        // User has multiple links
        $links = auth()->user()->links()->get();
        return view('links.index', [
            'links' => $links
        ]);
    }

    public function create() {
        return view('links.create');
    }

    public function store(Request $request) {
        $link = Auth::user()->links()
            ->create($request->only(['name', 'link']));

        if($link) {
            return redirect()->to('/dashboard/links');
        }

        return redirect()->back();
    }

    public function edit(Link $link) {

    }

    public function update(Request $request, Link $link) {

    }

    public function destory(Request $request, Link $link) {

    }
}
