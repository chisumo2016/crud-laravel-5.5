<?php

namespace App\Http\Controllers;

use App\Item;
use Session;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();

        return view('items.index',['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate data item before goes in database
        $this->validate($request,[
            'title' =>'required|max:255' ,
            'description'=>'required:max:5000'
        ]);

        //Insert the item into database
        $item = new item();
        $item->title = $request->title;
        $item->description = $request->description;

        $item->save();

        Session::flash('success','Item has been created successfully.');
        return redirect()->route("items.index");
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
        $item = Item::find($id);
        return view ('items.show',['item'=>$item]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Update the Items  in the database
        $item = Item::find($id);
        return view('items.update', ['item'=>$item]);
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
        //Update the Items

        $item = Item::find($id);

        //Validate data item before goes in database
        $this->validate($request,[
            'title' =>'required|max:255' ,
            'description'=>'required|max:5000'
        ]);

        //Update the field
        $item->title = $request->title;
        $item->description = $request->description;


        $item->update();
        Session::flash('success','Item has been Updated successfully.');
        return redirect()->route('items.index');
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
        Item::find($id)->delete();
        Session::flash('success','Item has been deleted successfully.');
        return redirect()->route('items.index');
    }
}
