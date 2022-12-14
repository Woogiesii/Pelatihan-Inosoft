<?php

namespace App\Http\Controllers;

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
        $namaDepan = 'Syifa';
        $namaBelakang = 'Abyananta';
        $data = [
            'nama_depan' => $namaDepan,
            'nama_belakang' => $namaBelakang
        ];
       return view('index', $data);//
    }

    public function index2()
    {
        $itemName = 'Kaos';
        $itemPrice = '2000000';
        $data = [
            'item_name' => $itemName,
            'item_price' => $itemPrice
        ];
       return view('index2', $data);//
    }

    function item($itemName)
    {
        $data = [
            'item_name' => $itemName
        ];
        return view('item', $data);
    }

    function itemForm()
    {
        return view('itemForm', );
    }

    function itemPost(Request $request)
    {
        $data = [
            'item_name' => $request->nama_item,
            'item_price' => $request->harga_item
        ];
        return view('itemPost', $data);
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
    }
}
