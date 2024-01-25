<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function queryData(){
        DB::enableQueryLog();
        
        User::get();

        User::whereId(1)->first()->posts;

        Post::whereId(1)->first()->tags;
        
        $query = DB::getQueryLog();

        dd($query);
    }
}
