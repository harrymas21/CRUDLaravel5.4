<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients=Client::all();
        return view('view',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|email|max:50',
            'phonenumber' => 'required|max:15',
            'address' => 'required|max:150'
        ]);
        Client::create($request->all());
       // return back()->with('success', 'Client added!');
        return redirect()->route('clients.index')->with('success','Client added successfully');

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
        $client = Client::find($id);
        return view('edit',compact('client'));
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
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|email|max:50',
            'phonenumber' => 'required|max:15',
            'address' => 'required|max:150'
        ]);
        Client::find($id)->update($request->all());
        return redirect()->route('clients.index')->with('success','Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()->route('clients.index')->with('success','Client deleted!');
    }
}
