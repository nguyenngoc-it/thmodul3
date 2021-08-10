<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgencyRequest;
use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencys= Agency::all();
        return view('list',compact('agencys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agencys= Agency::all();
        return view('create',compact('agencys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgencyRequest $request)
    {
        $agency= new Agency();
        $agency->name= $request->name;
        $agency->phone= $request->phone;
        $agency->email= $request->email;
        $agency->address= $request->address;
        $agency->manager= $request->manager;
        $agency->status= $request->status;
        $agency->save();
        return redirect()->route('agency.index');
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
        $agencys= Agency::findOrFail($id);
        return view('edit',compact('agencys'));
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
        $agency= Agency::findOrFail($id);
        $agency->name= $request->name;
        $agency->phone= $request->phone;
        $agency->email= $request->email;
        $agency->address= $request->address;
        $agency->manager= $request->manager;
        $agency->status= $request->status;
        $agency->save();
        return redirect()->route('agency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agency= Agency::findOrFail($id);
        $agency->delete($id);
        return redirect()->route('agency.index');

    }

    public function search(Request $request)
    {
        $search= $request->search;
        if(!$search){
            return redirect()->route('agency.index');
        }
        $agencys= Agency::where('name', 'LIKE', '%'.$search.'%')->get();
        return view('list', compact('agencys'));

    }
}
