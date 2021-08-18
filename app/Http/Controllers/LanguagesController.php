<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
     public function languages(){
         $languages= Language::all();
         return view('pages.languages.dashboard',compact(['languages']));
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

             $feedbackdata = ['title' => 'Başarılı !',
                 'text' => 'Yeni Dil Əlavə Edildi',
                 'icon' => 'success',
                 'button' => 'Bağla' ];

             return back()->with('feedback', $feedbackdata);

         }catch (\Exception $exception){

             $feedbackdata = ['title' => 'Başarısız !',
                 'text' => 'Yeni Dil Əlavə Edilərkən xəta baş verdi xahiş edirik yeniden yoxlayın Xəta:'.$exception,
                 'icon' => 'warning',
                 'button' => 'Bağla' ];

             return back()->with('feedback', $feedbackdata);
         }

     }

     public function edit($id){
         $lang = Language::find($id);
         return view('pages.languages.edit',compact(['lang']));
     }

     public function update($id,Request $request){
         try {
             $language = Language::find($id);
             $language->code =   $request->code;
             $language->name =   $request->name;
             $language->save();

             $feedbackdata = ['title' => 'Başarılı !',
                 'text' => 'Dil məlumatları redaktə edildi',
                 'icon' => 'success',
                 'button' => 'Bağla' ];

             return back()->with('feedback', $feedbackdata);

         }catch (\Exception $exception){

             $feedbackdata = ['title' => 'Başarısız !',
                 'text' => 'Dil Məlumatları Redaktə Edilərkən xəta baş verdi.Xahiş edirik yenidən yoxlayın Xəta:'.$exception,
                 'icon' => 'warning',
                 'button' => 'Bağla' ];

             return back()->with('feedback', $feedbackdata);
         }

     }




}
