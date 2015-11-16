<?php

namespace App\Http\Controllers;

use App\User_Content;
use Illuminate\Support\Facades\View;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class user_content_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Notes
        $query = DB::table('user_content')
            ->select(DB::raw('notes'))
            ->get();
        $array = get_object_vars($query[0]);

        // Websites
        $webQuery = DB::table('user_content')
            ->select(DB::raw('websites'))
            ->get();
        $websites = get_object_vars($webQuery[0]);
        $websites = explode(" ",implode(" ",$websites));

        return view('home', ['notes' => $array, 'websites' => $websites]);
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
        $notes    = Request::get('notes');
        $webArray = Request::get('websites');
//        dd($webArray);
        $websites = implode(" ", array_filter($webArray));
        $images   = 0;
        $tbd      = Request::get('tbd');

        $result = $notes    . "<br>" .
                  $websites . "<br>" .
                  $images   . "<br>" .
                  $tbd;

        DB::table('user_content')
            ->where('id', $id)
            ->update(['notes' => $notes]);

        DB::table('user_content')
            ->where('id', $id)
            ->update(['websites' => $websites]);

        return redirect('/');

//        return $result;
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
