<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestimonialModel extends Model
{
    use HasFactory;

    public static function insertTestimonial($data){
        DB::table('testimonials')->insert($data);
    }
}