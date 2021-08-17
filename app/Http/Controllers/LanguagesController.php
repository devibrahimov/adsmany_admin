<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
     public function languages(){
         return view('pages.languages.dashboard');
     }

     public function create(){
         return view('pages.languages.create');
     }

     public function store(Request $request){


         try {
             $language = new Language();
             $language->code =   $request->code;
             $language->name =   $request->name;
             $language->save();
                return 'basharili';
         }catch (\Exception $exception){
             echo $exception;
         }

     }
}
