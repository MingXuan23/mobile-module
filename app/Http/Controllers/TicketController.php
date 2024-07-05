<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tickets = DB::table('tickets')->get();
        return response()->json(['tickets'=>$tickets]);
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
        try{
            if($request->type != 'Opening Ceremony Tickets' && $request->type != 'Closing Ceremony Tickets')
            return response()->json(['message' => 'Bad Gateway'], Response::HTTP_BAD_GATEWAY);

            
            $letters = range('A', 'Z');
            $randomLetter = $letters[array_rand($letters)];
            $randomNumber = rand(0, 9);
            $id = DB::table('tickets')->max('id') + 1; // Assuming `id` is auto-incrementing
        
            $row = intdiv($id, 10) + 1;
            $column = $id % 10;
        
            $seat =  "{$randomLetter}{$randomNumber} Row{$row} Column{$column}";
            DB::table('tickets')
            ->insert([
                'created_at'=>now(),
                'updated_at' =>now(),
                'type' => $request->type,
                'seat' => $seat,
                'name' => $request->name
            ]);
            return response()->json(['message' => 'Success'], Response::HTTP_OK);
        }catch(Exception $e){
            return response()->json(['message' => 'Bad Gateway', 'error' => $e->getMessage()], Response::HTTP_BAD_GATEWAY);

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticker  $ticker
     * @return \Illuminate\Http\Response
     */
    public function show(Ticker $ticker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticker  $ticker
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticker $ticker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticker  $ticker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticker $ticker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticker  $ticker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticker $ticker)
    {
        //
    }
}
