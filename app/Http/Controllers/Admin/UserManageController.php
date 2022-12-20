<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserManageController extends Controller
{
    use SoftDeletes;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $action = false;
        $message = "";
        if($request->has('deleted')){
            $action = $request->get('deleted')==="success"?true:false;
            $message = "The user has been successfully deleted.";
        }
        
        if($request->has('updated')){
            $action = $request->get('updated')==="success"?true:false;
            $message = "Changed successfully!";
        }
        
        $users = User::where('role', 0)->paginate(10);
        return view('content.Admin.usermanage.index', [
            'users' =>$users,
            'action' => $action,
            'message' => $message,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::find($id)->delete();
        return redirect()->intended('/admin/users?deleted=success');
    }

    public function userstatuschange($id, $status)
    {
        // dd($status);
        $user = User::find($id);
        $user->status = $status;
        $user->save();
        return redirect()->intended('/admin/users?updated=success');
    }
}
