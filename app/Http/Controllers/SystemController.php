<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Redirect,Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SystemController extends Controller
{
    public function user(Request $request){
         if ($request->ajax()) {
            $user = collect(DB::select('CALL sp_crud_user(?)',['read|'.Auth::user()->name])); 
            return Datatables::of($user)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $p="readbycode_";
                    $editBtn = view('components.button-edit',
                                    ['dataId' => $p.$row->id,
                                        'url' => 'javascript:void(0)',
                                        'show' => true
                                    ]
                                )->render();
                    $viewBtn = view('components.button-view',
                                    ['dataId' => $p.$row->id,
                                        'url' => 'javascript:void(0)',
                                        'show' => true
                                    ]
                                )->render();
                    return $editBtn .$viewBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        [$menu,$role,$datasystem] = DB::selectResultSets('CALL sp_get_role_menu(?)', ["getmenusystem|" . Auth::user()->name . "|User"]);
        if (count($role)==0){
            abort(404);
        }else{
           return view('system/user',['datasystem' => $datasystem,'menu' => $menu,'role' => $role]);
        }
    }
    public function user_execbycode($code)
    {   
        
        $code2= str_replace("_","|",$code);
        $params = explode("_", $code);
        $query='CALL sp_crud_user(?)';

        if ($params[0]=='readbycode') {
            try {
                    $report = DB::select($query, [$code2]);
                    return Response::json($report);
                } catch(\Illuminate\Database\QueryException $ex) {
                    $report=$ex;
                    return Response::json($report);
                } 
        } else {
            try {
                $id_ = explode("_", $code);
                $report = User::find($id_[1]);
                $report->delete();
                return Response::json($report);
            }catch(\Exception $e){
                    return Response::json($e);
            }
        }
        
    }
    public function user_crud(Request $request)
    { 
       try{
           if ($request->input('txt_mode')=='new-data') {
                $base64 = null;
                $base64_2 = null;
                if ($request->hasFile('txt_photo')) {  
                    $path = $request->file('txt_photo')->getRealPath();
                    $ext = $request->file('txt_photo')->extension();
                    $doc = file_get_contents($path);
                    $base64 = base64_encode($doc);
                    $mime = $request->file('txt_photo')->getClientMimeType();
                }
                if ($request->hasFile('txt_signature')) {  
                    $path = $request->file('txt_signature')->getRealPath();
                    $ext = $request->file('txt_signature')->extension();
                    $doc = file_get_contents($path);
                    $base64_2 = base64_encode($doc);
                    $mime = $request->file('txt_signature')->getClientMimeType();
                }
                $report =User::create([
                    'name' =>  $request->input('txt_username'),
                    'fullname' =>  $request->input('txt_fullname'),
                    'email' => $request->input('txt_email'),
                    'password'=> $request->input('txt_password'),
                    'role_code'=> $request->input('sel_role'),
                    'photo'=> $base64,
                    'signature'=> $base64_2,
                ]);
                //return Response::json($report);
                return back()->with('success', "Insert user \"" . $request->input('txt_username') . "\" success");
           }else{
                $report = User::find($request->input('txt_code'));
                $report->name = $request->input('txt_username');
                $report->fullname = $request->input('txt_fullname');
                $report->email = $request->input('txt_email');
                $report->password = $request->input('txt_password');

                if ($request->hasFile('txt_photo')) {  
                $path = $request->file('txt_photo')->getRealPath();
                $ext = $request->file('txt_photo')->extension();
                $doc = file_get_contents($path);
                $base64 = base64_encode($doc);
                $mime = $request->file('txt_photo')->getClientMimeType();
                $report->photo = $base64;
                }

                if ($request->input('cb_reset')=='Y'){
                    $report->photo = null;
                }

                if ($request->hasFile('txt_signature')) {  
                    $path = $request->file('txt_signature')->getRealPath();
                    $ext = $request->file('txt_signature')->extension();
                    $doc = file_get_contents($path);
                    $base64 = base64_encode($doc);
                    $mime = $request->file('txt_signature')->getClientMimeType();
                    $report->signature = $base64;
                }

                if ($request->input('cb_reset2')=='Y'){
                    $report->signature   = null;
                }

                $report->save();
                //return Response::json($report);
                //return redirect()->route('system.user2');
                return back()->with('success', "Update user \"" . $request->input('txt_username') . "\" success");
           }
            
       }catch(\Exception $e){
            //return Response::json($e);
            return redirect()->back()->with('error', $e->getMessage());
       }
    }

    public function userprofile(Request $request){
         if ($request->ajax()) {
            $user = collect(DB::select('CALL sp_crud_user(?)',['read2|'.Auth::user()->name])); //DB::table('m_product_category')->get(); 
            return Datatables::of($user)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $p="readbycode_";
                    $editBtn = view('components.button-edit',
                                    ['dataId' => $p.$row->id,
                                        'url' => 'javascript:void(0)',
                                        'show' => true
                                    ]
                                )->render();
                    $viewBtn = view('components.button-view',
                                    ['dataId' => $p.$row->id,
                                        'url' => 'javascript:void(0)',
                                        'show' => true
                                    ]
                                )->render();
                    return $editBtn .$viewBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        [$menu,$role,$datasystem] = DB::selectResultSets('CALL sp_get_role_menu(?)', ["getmenusystem|" . Auth::user()->name . "|UserProfile"]);
        if (count($role)==0){
            abort(404);
        }else{
           return view('system/userprofile',['datasystem' => $datasystem,'menu' => $menu,'role' => $role]);
        }
    }
}
