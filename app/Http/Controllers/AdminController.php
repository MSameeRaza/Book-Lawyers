<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use App\Models\Appointment;
use App\Models\User;

class AdminController extends Controller
{
    public function addview(){

    	return view('admin.add_lawyer');
    }



      public function upload(Request $request){

       

        // ensure the request has a file before we attempt anything else.
          
            $lawyer = new lawyer;
              $image=$request->file;
              $imagename=time().'.'.$image->getClientoriginalExtension();
              $request->file->move('lawyerimage',$imagename);
              $lawyer->image=$imagename; 
                
                $lawyer->name=$request->name;
                    $lawyer->phone=$request->number;

                $lawyer->speciality=$request->speciality;

                $lawyer->room=$request->room;
               $lawyer->image=$request->file;


              
              

            $lawyer->save(); // Finally, save the record.
            return redirect()->back()->with('message','Lawyer Added Sucessfully');



    }

     public function showappointment(){

     	$file=appointment::all();

     	return view('admin.showappointment',compact('file'));
}

   public function showuser(){

       $account=user::all();

        return view('admin.showuser',compact('account'));
}



   public function deleteuser($id){

$account=user::find($id);
$account->delete();

        return redirect()->back();
}


     public function approved($id){
$file=appointment::find($id);
$file->status='approved';
$file->save();
return redirect()->back();


        }


     public function canceled($id){
$file=appointment::find($id);
$file->status='cancelled';
$file->save();
return redirect()->back();


        }
    public function showlawyer(){
$data=lawyer::all();


     	return view('admin.showlawyer',compact('data'));
}
   public function removelawyer($id){
$data=lawyer::find($id);
$data->delete();

return redirect()->back();

        }


public function editlawyer($id){

$data=lawyer::find($id);

return view('admin.editlawyer',compact('data'));

        }


 public function updatelawyer(Request $request , $id){
           $this->validate($request,[
          
      
             
        ]);


$update=lawyer::find($id);
$update->name=$request->name;
$update->phone=$request->phone;
$update->speciality=$request->speciality;
$update->room=$request->room;
$update->save();


return redirect()->back();

        }

public function edituser($id){

$data1=user::find($id);

return view('admin.edituser',compact('data1'));
    
        }
        public function updateuser(Request $request , $id){
           

$edit=user::find($id);
$edit->name=$request->name;
$edit->email=$request->phone;
$edit->id_admin=$request->speciality;

$edit->save();


return redirect()->back()->with('messageuser','Lawyer Added Sucessfully');
        }
 
}   