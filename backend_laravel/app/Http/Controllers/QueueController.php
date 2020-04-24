<?php

namespace App\Http\Controllers;

use DB;
use App\Queue;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function GetList($shopId) {
        $queue = DB::select(
            'SELECT users.firstname, queue.number 
            FROM queue JOIN users ON queue.user_id = users.id 
            JOIN shops ON queue.shop_id = shops.id 
            WHERE shops.id = '.$shopId.' ORDER BY number'
        );
        return $queue;
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
     * @param  \App\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function show(Queue $queue)
    {
        return $queue;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue $queue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queue $queue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Queue $queue)
    {
        //
    }
}
