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
                     $program->image = $imagename;
                 }
             }

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

             $feedbackdata = ['title' => 'Başarılı !',
                 'text' => 'Yeni Yayın Programı uğurla əlavə edildi',
                 'icon' => 'success',
                 'button' => 'Bağla' ];

             return back()->with('feedback', $feedbackdata);

         }
         catch (\Exception $exception){
             echo $exception;
             exit;
             $feedbackdata = ['title' => 'Başarısız !',
                 'text' => 'Yeni Yayın Programı əlavə edilərkən xəta baş verdi.Xahiş edirik yenidən yoxlayın Xəta:'.$exception,
                 'icon' => 'warning',
                 'button' => 'Bağla' ];
             return back()->with('feedback', $feedbackdata);
         }
     }

     public function edit($id){
         $languages = Language::all();
         $channels = TvChannel::join('tvchannel_content','tv_channels.id','=','tvchannel_content.channel_id')->where('lang','az')->get();

         $program = ProgramSerial::find($id);
         $program_contents = ProgramSerial::join('programs_serials_langcontent','programs_serials.id','=','programs_serials_langcontent.programs_serials_id')
             ->where('id',$id)
             ->get();

         return view('pages.programs.edit',compact(['channels','languages','program','program_contents']));
     }

     public function update($id,Request $request){


         try {
             $program =ProgramSerial::find($id);

             $program->channel_id = $request->channel;
             $program->type = $request->type;
             $program->rating = $request->rating;
             $program->start_time = $request->start_time;
             $program->finish_time = $request->finish_time;
             $program->broadcasting = json_encode($request->day);
             $image = $request->file('image');
             if ($request->image != NULL) {
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
                     $program->image = $imagename;
                 }
             }

             $program->save();

             $program_contents = DB::table('programs_serials_langcontent')->where('programs_serials_id', $id)->get();
             $datacontent = [];

             if ($program_contents->isEmpty()) {

                 foreach (languages()  as $language){
                     $program_name = request('name_'.$language->code);
                     $program_content = request('about_of_'.$language->code);
                     if ($program_name != null and $program_content != null){
                         $data = [
                             'programs_serials_id'=> $program->id,
                             'lang' => $language->code,
                             'name' => $program_name,
                             'about_of' => $program_content
                         ];

                         array_push($datacontent,$data);
                     }

                 }//end foreach
             }//end if
             else{
                 foreach (languages() as $lang){
                     $thisrow = DB::table('programs_serials_langcontent')->where('programs_serials_id', $id)
                         ->where('lang',$lang->code)->first();

                     if ( $thisrow != NULL){
                         $program_name = request('name_'.$lang->code);
                         $program_content = request('about_of_'.$lang->code);
                         if ($program_name != null and $program_content != null){
                             $data = [
                                 'programs_serials_id'=> $program->id,
                                 'lang' => $lang->code,
                                 'name' => $program_name,
                                 'about_of' => $program_content
                             ];
                             // array_push($datacontent,$data);
                             DB::table('programs_serials_langcontent')->where('programs_serials_id', $id)
                                 ->where('lang',$lang->code)->update($data);
                         }
                         //end if null
                     }
                     else {//endif language code

                         $program_name = request('name_'.$lang->code);
                         $program_content = request('about_of_'.$lang->code);

                         if ($program_name != null and $program_content != null){
                             $data = [
                                 'programs_serials_id'=> $program->id,
                                 'lang' => $lang->code,
                                 'name' => $program_name,
                                 'about_of' => $program_content
                             ];
                             array_push($datacontent,$data);
                         }// end if
                     }//else
                 }//end foreach
             }//end else

             DB::table('programs_serials_langcontent')->insert($datacontent);

             $feedbackdata = [
                 'title' => 'Başarılı !',
                 'text' => 'Tv Kanal Programı məlumatları uğurla redaktə edildi',
                 'icon' => 'success',
                 'button' => 'Bağla'];
             return back()->with('feedback', $feedbackdata);

         }catch (\Exception $exception){

             $feedbackdata = ['title' => 'Başarısız !',
                 'text' => 'Tv Kanal Programı məlumatları redaktə edilərkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                 'icon' => 'warning',
                 'button' => 'Bağla'];
             return back()->with('feedback', $feedbackdata);
         }


     }
}
