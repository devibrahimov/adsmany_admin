<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Language;
use App\Models\TvChannel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TvCannelController extends Controller
{

    public function dashborad(){
        $channels = TvChannel::join('tvchannel_content','tv_channels.id','=','tvchannel_content.channel_id')
            ->where('lang','az')->get();

        return view('pages.tvchannel.dashboard',compact(['channels']));
    }


    public function create(){
        $languages = Language::all();
        $countries = Country::join('country_content','countries.id','=','country_content.country_id')->where('language','az')->get();

        return view('pages.tvchannel.create',compact(['languages','countries']));
    }


    public function store(Request $request){
        try {
            $languages = Language::all();


            $channel = new TvChannel();
            $channel->country_id = $request->country;
            $logo = $request->file('logo');
            $logoname = null ;

            if ($logo) {
                $request->validate([
                    'logo' => 'required|mimes:png',
                ]);

                $path = "/photos";
                $imagepath = public_path() . $path;
                if ($logo->isValid()){
                    $newimagename = rand(1, 100) . time() . '.' . $logo->getClientOriginalExtension();
                    $imageurl = $path . '/' . $newimagename; //for DB
                    $logo->move($imagepath, $newimagename);
                    $logoname = $imageurl;
                }
            }
            $channel->logo = $logoname;
            $channel->save();
            $channels = [];

            foreach ($languages as $language){
                $channel_val = request('channel_'.$language->code);
                if ($channel_val != null){
                    $data = [
                        'channel_id'=> $channel->id,
                        'lang' => $language->code,
                        'name' => $channel_val
                    ];

                    array_push($channels,$data);
                }
            }

            DB::table('tvchannel_content')->insert($channels);

            $feedbackdata = [
                'title' => 'Başarılı !',
                'text' => 'Yeni Tv Kanal uğurla əlavə edildi',
                'icon' => 'success',
                'button' => 'Bağla' ];

             return back()->with('feedback', $feedbackdata);

        }
        catch (\Exception $exception){

            $feedbackdata = ['title' => 'Başarısız !',
                'text' => 'Yeni Tv Kanal məlumatları əlavə edilərkən xəta baş verdi.Xahiş edirik yenidən yoxlayın Xəta:'.$exception,
                'icon' => 'warning',
                'button' => 'Bağla' ];
            return back()->with('feedback', $feedbackdata);
        }
    }

    public function edit($id){
        $languages = Language::all();
        $countries = Country::join('country_content','countries.id','=','country_content.country_id')->where('language','az')->get();

        $channel = TvChannel::find($id);
        $channel_contents = TvChannel::join('tvchannel_content','tv_channels.id','=','tvchannel_content.channel_id')
            ->where('id',$id)->get();

        return view('pages.tvchannel.edit',compact(['languages','countries','id','channel','channel_contents']));
    }

    public function update($id ,Request $request){

        try {
            $Channel =TvChannel::find($id);

            $Channel->country_id = $request->country;

            if ( $logo = $request->file('logo')) {
                $request->validate([
                    'logo' => 'required|mimes:png',
                ]);

                $path = "/photos";
                $imagepath = public_path() . $path;
                if ($logo->isValid()){
                    $newimagename = rand(1, 100) . time() . '.' . $logo->getClientOriginalExtension();
                    $imageurl = $path . '/' . $newimagename; //for DB
                    $logo->move($imagepath, $newimagename);
                    $logoname = $imageurl;
                }
                $Channel->logo = $logoname;
            }
            $Channel->save();

            $channel_contents = DB::table('tvchannel_content')->where('channel_id', $id)->get();
            $datacontent = [];

            if ($channel_contents->isEmpty()) {
                foreach (languages() as $lang) {

                    $channel = request('channel_' . $lang->code);

                    if ($channel != null) {

                        $data = [
                            'channel_id' => $id,
                            'lang' => $lang->code,
                            'name' => $channel,
                        ];

                        array_push($datacontent, $data);
                    }
                }
            }
            else{
                foreach (languages() as $lang) {
                    $thisrow = DB::table('tvchannel_content')->where('channel_id', $id)
                        ->where('lang',$lang->code)->first();


                    if ( $thisrow != NULL) {

                        $channelname = request('channel_' . $lang->code);

                        if ($channelname != null) {
                            $data = [
                                'channel_id' => $id,
                                'lang' => $lang->code,
                                'name' => $channelname,
                            ];
                            DB::table('tvchannel_content')->where('channel_id', $id)->where('lang',$lang->code)->update($data);
                        }//end if null

                    }

                    else {//endif language code
                        $channelname = request('channel_' . $lang->code);

                        if ($channelname != null) {
                            $data = [
                                'channel_id' => $id,
                                'lang' => $lang->code,
                                'name' => $channelname,
                            ];
                            array_push($datacontent, $data);
                        }
                    }//else
                }
            }
            DB::table('tvchannel_content')->insert($datacontent);

            $feedbackdata = [
                'title' => 'Başarılı !',
                'text' => 'Tv Kanal məlumatları uğurla redaktə edildi',
                'icon' => 'success',
                'button' => 'Bağla',];
            return back()->with('feedback', $feedbackdata);

        }catch (\Exception $exception){

            $feedbackdata = ['title' => 'Başarısız !',
                'text' => 'Tv Kanal məlumatları redaktə edilərkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'icon' => 'warning',
                'button' => 'Bağla',];
            return back()->with('feedback', $feedbackdata);
        }
    }

}
