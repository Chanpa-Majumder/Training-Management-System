<?php

namespace App\Http\Controllers;

use App\File;
use App\Issue;
use App\Journal;
use App\Volume;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class publicJournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals=Journal::all();
        return view('public_journal.index',compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Volumes($id)
    {
        $volumes=Volume::wherejournals_id($id)->get();
        return view('public_journal.volumes',compact('volumes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function issues($id)
    {
        $issues=Issue::wherevolume_id($id)->get();
        return view('public_journal.issues',compact('issues'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function file($id)
    {
        $files=File::whereissue_id($id)->get();
        return view('public_journal.file',compact('files'));
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
