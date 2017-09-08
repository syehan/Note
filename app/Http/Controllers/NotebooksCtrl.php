<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;
use App\Http\Requests;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
class NotebooksCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $notebooks=Notebook::all();
      $user=Auth::user();
      $notebooks=$user->notebooks;
      return view('notebooks.index',compact('notebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notebooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $dataInput= $request->all();
         $user=Auth::user();
         $user->notebooks()->create($dataInput);

        //  Notebook::create($dataInput);
         return redirect('/notebooks');

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
      $user=Auth::user();
    $notebooks=$user->notebooks()->find($id);
        // $notebooks=Notebook::where('id',$id)->first();
        return view('notebooks.edit')->with('notebook',$notebooks);


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
      $user=Auth::user();
      $notebooks=$user->notebooks()->find($id);
      // $notebooks=Notebook::where('id',$id)->first();
      $notebooks->update($request->all());

      return redirect('/notebooks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user=Auth::user();
      $notebooks=$user->notebooks()->find($id);
      // $notebooks=Notebook::where('id',$id)->first();
      $notebooks->delete();
      return redirect('/notebooks');

    }
}
