<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                //Eloquent
                $values = Store::all();

                //件数取得
                $count = Store::count();
                
                //指定した番号で検索
        
                $first = Store::findOrFail(1);
        
                $whereChar = store::where('price', '=', '1000')->get();
                
                dd($values, $count, $first, $whereChar);
                //$$$$$$$$データベースへの接続確認の仕方　　DB::connection()->enableQueryLog();
                //ここでデータベースへの問い合わせ
                //$queries = DB::getQueryLog();
        
                //dd($queries);
                //クエリビルダ
                //$queryBuilder = DB::table('stores')->where('name', '=', 'すだく')
                //->select('id', 'name')
                //->get();
        
                //dd($values, $count, $first, $queryBuilder);
                
                //viewに渡す
                return view('stores.store', compact('values'));
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
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
