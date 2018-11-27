<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\notebooktable;
use Illuminate\Support\Facades\Auth;

class testcontrol extends Controller
{
    //
    public function  index(){
      // $notebooks=notebooktable::all();
      //  return $notebooks;


        $user=Auth::user();
         $notebooks= $user->notebooks();

        return view('notebookview.index',compact('notebooks'));
    }
    public  function create(){
        return view('notebookview.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public  function store(Request $request){

        $this->validate($request,[
            'name'=>'required|max:25|min:6|unique:notebooktables'
        ]);
        $datainput=$request->all();
        ///notebooktable::create($datainput);
      $user=Auth::user();
      $user->notebooks()->create( $datainput);
       return redirect('/notebooks');



      // $newrequest=new notebooktable();
        //$newrequest->name=$request->input('name');
         //$newrequest->user_id=$request->input('user_id');
       //$newrequest->save();
     //return redirect('/notebooks');


    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function edit(Request $request, $id){
        if($request-> isMethod('post')){
            $this->validate($request,[
                'name'=>'required|max:25|min:6|unique:notebooktables'
            ]);

            $user=Auth::user();
            $notebooks= $user->notebooks()->find($id);

          //  $notebook=notebooktable::where ('id',$id)->first();
            $notebooks->update($request::all());
            return redirect('/notebooks');


            // $newrequest= notebooktable::find($id);
           // $newrequest->name=$request->input('name');
           /// $newrequest->user_id=$request->input('user_id');
           // $newrequest->save();
           // return redirect('/notebooks');
        }
        else{
            $user=Auth::user();
           $notebooks= $user->notebooks()->find($id);
            //$notebook=notebooktable::where ('id',$id)->first();
            return view("notebookview.edit")->with('notebook',$notebooks);



            //$notebook=notebooktable::find($id);
            /** @var TYPE_NAME $product */
            //  $arr= array('notebook'=>$notebook);
            //  return view("notebookview.edit",$arr);



        }


    }
    public function destroy($id){


        $user=Auth::user();
        $notebooks= $user->notebooks()->find($id);

        //  $notebook=notebooktable::where ('id',$id)->first();
        $notebooks->delete();
        return redirect('/notebooks');

       // $notebook=notebooktable::find($id);
        //$notebook->delete();
        //return redirect('/notebooks');

    }
}
