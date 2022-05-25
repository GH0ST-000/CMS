<?php

namespace App\Http\Controllers;

use App\Models\Marketplace;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{

    public function index()
    {
        return view('Backend.pages.marketplace');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Marketplace $marketplace)
    {
        //
    }

    public function edit(Marketplace $marketplace)
    {
        //
    }


    public function update(Request $request, Marketplace $marketplace)
    {
        //
    }

    public function destroy(Marketplace $marketplace)
    {
        //
    }
}
