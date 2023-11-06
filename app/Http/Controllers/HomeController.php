<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Lawyer;
use App\Models\Appointment;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
public function redirect(){

if ((Auth::id()) )
{
    if(Auth::user()->id_admin=='0')
    {

            $data = lawyer::all();
        return view('user.home',compact('data'));


    }  
       if(Auth::user()->id_admin=='2')
    {

 
      
        return view('lawyer.lawyerpanel');

        
    } 
    else
    {
        return view('admin.home');
    }
  }

else{
    return redirect()->back();
}
}


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  


      public function adminhome()
    {
        return view('admin.home');
    }
public function appointment(Request $request)
    {
     

        // ensure the request has a file before we attempt anything else.
        
            $file = new appointment;
               $file->name=$request->name1;
                              

               $file->email=$request->email1;
               $file->doctor=$request->lawyer;

               $file->phone=$request->phone1;

               

               $file->message=$request->message;

               $file->status='In Progress';
               if (Auth::id()) {
                                   $file->user_id=Auth::user()->id;

               }
                  if (Auth::id()) {
                                   $file->lawyer_id=Auth::user()->id;

               }
            
              

            $file->save(); // Finally, save the record.
            return redirect()->back()->with('message1','Your Appointment Request Sucessfull . We Will Contact You Soon ');
        }

        public function myappointment(){
            if (Auth::id()) {
                $userid=Auth::user()->id;
              $file= appointment::where('user_id' ,$userid)->get();
              return view('user.myappointment',compact('file'));

            }
            else{
return redirect()->back();

            }




        }
        public function cancel_appoint($id){
$file=appointment::find($id);
$file->delete();
return redirect()->back();


        }

       
    public function divorcelawyer(){
$data1=lawyer::all();
        return view('user.divorce',compact('data1'));
    }


      public function kidnappinglawyer(){
$data2=lawyer::all();
        return view('user.kidnapping',compact('data2'));
    }


      public function criminallawyer(){
$data3=lawyer::all();
        return view('user.criminal',compact('data3'));
    }


      public function rapecaselawyer(){
$data4=lawyer::all();
        return view('user.rape',compact('data4'));
    }



    
   public function Add_yourself(){

$add=lawyer::all();

        return view('lawyer.addyourself',compact('add'));
    }



      public function contactus(){



        return view('user.contactus');
    }



  public function Your_appointments(){

$file=appointment::all();
return view('lawyer.Yourappointment',compact('file'));


        }

}