<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('modules.customer.index');
    }

    public function create()
    {
        return view('modules.customer.create');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        return view('modules.customer.store', compact('name'));
    }

    public function show(Request $request)
    {
        $id = $request->id;
        return view('modules.customer.show', compact('id'));
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        return view('modules.customer.edit', compact('id'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        return view('modules.customer.update', compact('id'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        return view('modules.customer.delete', compact('id'));
    }
}
