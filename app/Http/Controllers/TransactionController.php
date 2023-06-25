<?php

namespace App\Http\Controllers;

use App\Models\CatModel;
use App\Models\TransactionModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function show($id){
        $cat = CatModel::getCatById($id);

        return view('transaction.show', [
            'cat' => $cat
        ]);
    }

    public function adopt(Request $request){
        CatModel::updateCatById($request['cat_id'], ['is_adopted' => true]);

        TransactionModel::insertTransaction([
            'cat_id' => $request['cat_id'],
            'adoptant_id' => $request['adoptant_id'],
            'owner_id' => $request['owner_id'],
        ]);

        return redirect()->intended('/find');
    }

    public function insertCommitment(Request $request){
        $image = $request->file('image')->store('/file');
        $validatedData['commitment_file'] = $image;

        
    }

    public function download(){
        return Storage::download('word/commitment.docx');
    }
}