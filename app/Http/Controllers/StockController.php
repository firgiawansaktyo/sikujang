<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stock;
use DB;


class StockController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $stocks = Stock::orderBy('stock_id')->paginate(5);
        return view('stock.index',compact('stocks'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock.create');
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
            'products_id' => 'required',
            'stock_increase' => 'required',
            'stock_decrease' => 'required',
            'stage' => 'required'
        ]);

        Stock::create($request->all());
        return redirect()->route('stock.index')
                        ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($stock_id)
    {
        $stock = Stock::find($stock_id);
        return view('stock.show',compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($stock_id)
    {
        $stock = Stock::find($stock_id);
        return view('stock.edit',compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $stock_id)
    {
        $this->validate($request, [
          'products_id' => 'required',
          'stock_increase' => 'required',
          'stock_decrease' => 'required',
          'stage' => 'required'
        ]);

        Product::find($stock_id)->update($request->all());
        return redirect()->route('stock.index')
                        ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($stock_id)
    {
        Stock::find($stock_id)->delete();
        return redirect()->route('stock.index')
                        ->with('success','Product deleted successfully');
    }
}
