<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoes;

class ShoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Bring data from table
        $shoe= shoes::all();
        return $shoe;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create a new shoe
        $shoe= new Shoes();
        $shoe->description=$request->description;
        $shoe->size=$request->size;
        $shoe->price=$request->price;
        $shoe->stock=$request->stock;

        $shoe->save();

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
        //Update the table
        $shoe = Shoes::findOrFail($request->id);
        $shoe->description=$request->description;
        $shoe->size=$request->size;
        $shoe->price=$request->price;
        $shoe->stock=$request->stock;

        $shoe->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //Delete from table
        $shoe= Shoes::destroy($request->id);
        return $shoe;
    }
}
