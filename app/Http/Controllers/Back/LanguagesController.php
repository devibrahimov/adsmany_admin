<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;
class LanguagesController extends Controller
{
    public function index(){
         $languages= Language::all();
         return view('back.languages.index',compact(['languages']));
     }

     public function store()
     {
         return view('back.languages.create');
     }

     public function create(Request $request)
     {
          try {
             $language = new Language();
             $language->code =   $request->code;
             $language->name =   $request->name;
             $language->save();

             $feedbackdata = ['title' => 'Başarılı !',
                 'text' => 'Yeni Dil Əlavə Edildi',
                 'icon' => 'success',
                 'button' => 'Bağla' ];

             return back()->with('success', $feedbackdata);

         }catch (\Exception $exception){

             $feedbackdata = ['title' => 'Başarısız !',
                 'text' => 'Yeni Dil Əlavə Edilərkən xəta baş verdi xahiş edirik yeniden yoxlayın Xəta:'.$exception,
                 'icon' => 'warning',
                 'button' => 'Bağla' ];

             return back()->with('danger', $feedbackdata);
         }
     }

     public function edit($id)
     {
         $language = Language::find($id);
         return view('back.languages.edit',compact(['language']));
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
