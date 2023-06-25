<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransactionModel extends Model
{
    use HasFactory;

    public static function getTransactionById($id){
        return DB::table('transactions')->where('id', $id)->get();
    }

    public static function insertTransaction($data){
        DB::table('transactions')->insert($data);
    }
}