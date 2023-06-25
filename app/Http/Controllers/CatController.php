<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = CatModel::getAllUnadoptedCat();

        return view('dashboard.index', [
            'cats' => $cats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'address' => 'required|min:3',
            'contact' => 'required|min:11',
            'color' => 'required|min:3',
            'breed' => 'required|min:3',
            'description' => 'required|max:256',
        ]);

        $validatedData['image'] = $request->file('image')->store('/cats');
        $validatedData['user_id'] = Auth::id();
        $validatedData['created_at'] = now();
        $validatedData['updated_at'] = now();
        
        CatModel::insertCat($validatedData);

        return redirect()->intended('/dashboard')->with('success', 'Cat has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = CatModel::getCatById($id);
        $user = UserModel::getUserById(Auth::user()->id);

        return view('dashboard.show', [
            'cat' => $cat,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = CatModel::getCatById($id);

        return view('dashboard.edit', [
            'cat' => $cat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'address' => 'required|min:8',
            'contact' => 'required|min:11',
            'color' => 'required|min:3',
            'breed' => 'required|min:3',
            'description' => 'required|max:256',
        ]);

        if($request->file('image')){
            CatModel::deleteImageById($id);
            $validatedData['image'] = $request->file('image')->store('/cats');
        }

        $validatedData['updated_at'] = now();

        CatModel::updateCatById($id, $validatedData);

        return redirect()->intended('/dashboard')->with('success', 'Cat has been updated successfully!');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CatModel::deleteImageById($id);
        CatModel::deleteCatById($id);

        return redirect()->intended('/dashboard')->with('success', 'Cat has been deleted successfully!');   
    }
}