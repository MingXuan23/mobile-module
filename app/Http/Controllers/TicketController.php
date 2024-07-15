<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $tickets = DB::table('tickets')->get();
        $hostname = $request->getSchemeAndHttpHost();
        foreach($tickets as $t){

            $basename = explode('/',$t->image);
           // dd($basename);
            $basename = $basename[count($basename) -1];
            $t->image = $hostname .'/public/tickets/'. $basename;
        }
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

            $rules = [
                'image' => 'required|mimes:jpeg,png,jpg'
            ];
        
            // Create the validator
            $validator = Validator::make($request->all(), $rules);
        
            // Check if the validation fails
            if ($validator->fails()) {
                return response()->json(['message' => 'Bad Gateway'], Response::HTTP_BAD_GATEWAY);
            }

            
        
            $letters = range('A', 'Z');
            $randomLetter = $letters[array_rand($letters)];
            $randomNumber = rand(0, 9);
            $id = DB::table('tickets')->max('id') + 1; // Assuming `id` is auto-incrementing
        
            $row = intdiv($id, 10) + 1;
            $column = $id % 10;
        
            $seat =  "{$randomLetter}{$randomNumber} Row{$row} Column{$column}";
            $id = DB::table('tickets')
            ->insertGetId([
                'created_at'=>now(),
                'updated_at' =>now(),
                'type' => $request->type,
                'seat' => $seat,
                'name' => $request->name
            ]);

            $extension = $request->image->extension();
            $filename = $id . '.' . $extension;
            $path =$request->file('image')->move(public_path('public/tickets'), $filename);
            
            $hostname = $request->getSchemeAndHttpHost();

            $url = $hostname .'/public/tickets/'. $filename;
            DB::table('tickets') 
            ->where('id',$id)
            ->update([
                'image' => $url
            ]);

           $ticket = DB::table('tickets')->where('id',$id)->first();

            return response()->json(['ticket' => $ticket], Response::HTTP_OK);
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
