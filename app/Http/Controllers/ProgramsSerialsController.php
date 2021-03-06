<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\ProgramSerial;
use App\Models\TvChannel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramsSerialsController extends Controller
{
     public function dashborad(){
         $programs = ProgramSerial::join('programs_serials_langcontent','programs_serials.id','=','programs_serials_langcontent.programs_serials_id')
             ->where('lang','az')->get();
         return view('pages.programs.dashboard',compact(['programs']));
     }

     public function create(){
         $languages = Language::all();
         $channels = TvChannel::join('tvchannel_content','tv_channels.id','=','tvchannel_content.channel_id')->where('lang','az')->get();

         return view('pages.programs.create',compact(['channels','languages']));
     }

     public function store(Request $request){
         try {

             $program = new ProgramSerial();
             $program->channel_id = $request->channel;
             $program->type = $request->type;
             $program->rating = $request->rating;
             $program->start_time = $request->start_time;
             $program->finish_time = $request->finish_time;
             $program->broadcasting = json_encode($request->day);
             $image = $request->file('image');
             if ($image) {
                 $request->validate([
                     'image' => 'required',
                 ]);

                 $path = "/programandserials";
                 $imagepath = public_path() . $path;
                 if ($image->isValid()){
                     $newimagename = rand(1, 100) . time() . '.' . $image->getClientOriginalExtension();
                     $imageurl = $path . '/' . $newimagename; //for DB
                     $image->move($imagepath, $newimagename);
                     $imagename = $imageurl;
                 }
             }
             $program->image = $imagename;
             $program->save();
             $languages = Language::all();
             $programsdata = [];

             foreach ($languages as $language){
                 $program_name = request('name_'.$language->code);
                 $program_content = request('about_of_'.$language->code);
                    if ($program_name != null and $program_content != null){
                     $data = [
                         'programs_serials_id'=> $program->id,
                         'lang' => $language->code,
                         'name' => $program_name,
                         'about_of' => $program_content
                     ];

                     array_push($programsdata,$data);
                    }

             }
//
            DB::table('programs_serials_langcontent')->insert($programsdata);

             $feedbackdata = ['title' => 'Ba??ar??l?? !',
                 'text' => 'Yeni Yay??n Program?? u??urla ??lav?? edildi',
                 'icon' => 'success',
                 'button' => 'Ba??la' ];

             return back()->with('feedback', $feedbackdata);

         }
         catch (\Exception $exception){
             echo $exception;
             $feedbackdata = ['title' => 'Ba??ar??s??z !',
                 'text' => 'Yeni Yay??n Program?? ??lav?? edil??rk??n x??ta ba?? verdi.Xahi?? edirik yenid??n yoxlay??n X??ta:'.$exception,
                 'icon' => 'warning',
                 'button' => 'Ba??la' ];
             return back()->with('feedback', $feedbackdata);
         }
     }

     public function edit($id){

     }

     public function update($id,Request $request){

     }
}
