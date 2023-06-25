<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CatModel extends Model
{
    use HasFactory;

    public static function getAllUnadoptedCat(){
        $query = DB::table('cats')->where('id', '!=', Auth::user()->id);
        $query->where('is_adopted', false);
        return $query->get();
    }

    public static function getCatAndOwner($id){
        return DB::table('cats')->where('cats.user_id', Auth::user()->id)->where('cats.id', $id)->where('is_adopted', false)->join('users', 'users.id', '=', 'cats.user_id')->first();
    }

    public static function getOwnCat(){
        return DB::table('cats')->where('id', Auth::user()->id)->get();
    }

    public static function getCatById($id){
        return DB::table('cats')->where('id', $id)->first();
    }

    public static function getCatByRace($race){
        return DB::table('cats')->where('race', $race)->get();
    }

    public static function getImageNameById($id){
        return DB::table('cats')->where('id', $id)->first()->image;
    }

    public static function insertCat($data){
        DB::table('cats')->insert($data);
    }

    public static function deleteCatById($id){
        CatModel::deleteImageById($id);

        DB::table('cats')->delete($id);
    }

    public static function deleteImageById($id){
        $imageName = self::getImageNameById($id);

        Storage::delete($imageName);
    }

    public static function updateCatById($id, $data){
        DB::table('cats')->where('id', $id)->update($data);
    }

    public static function searchCat($search){
        return DB::table('cats')->where('is_adopted', false)->where('name', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%')
            ->orWhere('breed', 'like', '%'.$search.'%')
            ->orWhere('color', 'like', '%'.$search.'%')
            ->orWhere('address', 'like', '%'.$search.'%')->get();
    }
}