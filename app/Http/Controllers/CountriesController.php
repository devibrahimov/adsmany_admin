<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountriesController extends Controller
{
    public function countries(){
        $countries = Country::join('country_content','countries.id','=','country_content.country_id')
        ->where('language','az')->get();
        return view('pages.countries.dashboard',compact(['countries']));
    }

    public function create(){
        $languages = Language::all();
        return view('pages.countries.create',compact(['languages']));
    }

    public function store(Request $request){

        try {
            $languages = Language::all();
            $countries = [];

            $country = new Country();
            $country->status = 1;
            $country->save();

            foreach ($languages as $language){
                $country_val = request('country_'.$language->code);
                if ($country_val != null){
                    $data = [
                        'country_id'=> $country->id,
                        'language' => $language->code,
                        'name' => $country_val
                    ];

                    array_push($countries,$data);
                }

            }

            DB::table('country_content')->insert($countries);

            $feedbackdata = ['title' => 'Başarılı !',
                'text' => 'Yeni ölkə uğurla əlavə edildi',
                'icon' => 'success',
                'button' => 'Bağla' ];

            return back()->with('feedback', $feedbackdata);

            }
        catch (\Exception $exception){
            $feedbackdata = ['title' => 'Başarısız !',
                'text' => 'Yeni ölkə məlumatları əlavə edilərkən xəta baş verdi.Xahiş edirik yenidən yoxlayın Xəta:'.$exception,
                'icon' => 'warning',
                'button' => 'Bağla' ];
            return back()->with('feedback', $feedbackdata);
        }
    }




    public function edit($id){
        $languages = Language::all();
        $country = Country::join('country_content','countries.id','=','country_content.country_id')
                   ->where('id',$id)->get();

        return view('pages.countries.edit',compact(['languages','country','id']));
    }

    public function update($id,Request $request){

        try {

            $country_content = DB::table('country_content')->where('country_id', $id)->get();
            $datacontent = [];

            if ($country_content->isEmpty()) {
                foreach (languages() as $lang) {

                    $country = request('country_' . $lang->code);

                    if ($country != null) {

                        $data = [
                            'country_id' => $id,
                            'language' => $lang->code,
                            'name' => $country,
                        ];

                        array_push($datacontent, $data);
                    }
                }
            }
            else{
                foreach (languages() as $lang) {
                    $thisrow = DB::table('country_content')->where('country_id', $id)
                        ->where('language',$lang->code)->first();


                    if ( $thisrow != NULL) {

                        $countryname = request('country_' . $lang->code);

                        if ($countryname != null) {
                            $data = [
                                'country_id' => $id,
                                'language' => $lang->code,
                                'name' => $countryname,
                            ];
                            DB::table('country_content')->where('country_id', $id)->where('language',$lang->code)->update($data);
                        }//end if null

                    }

                    else {//endif language code
                        $countryname = request('country_' . $lang->code);

                        if ($countryname != null) {
                            $data = [
                                'country_id' => $id,
                                'language' => $lang->code,
                                'name' => $countryname,
                            ];
                            array_push($datacontent, $data);
                        }
                    }//else
                }
            }
            DB::table('country_content')->insert($datacontent);

            $feedbackdata = [
                'title' => 'Başarılı !',
                'text' => 'Ölkə məlumatları uğurla redaktə edildi',
                'icon' => 'success',
                'button' => 'Bağla',];
            return back()->with('feedback', $feedbackdata);

        }catch (\Exception $exception){

            $feedbackdata = ['title' => 'Başarısız !',
                'text' => 'Ölkə məlumatları redaktə edilərkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'icon' => 'warning',
                'button' => 'Bağla',];
            return back()->with('feedback', $feedbackdata);
        }
    }

    public function delete($id){
        return DB::table('country_content')->where('country_id',$id)->delete();
    }


}
