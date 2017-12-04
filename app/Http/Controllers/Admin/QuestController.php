<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\admin\quest;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quests = quest::all();
        return view('admin.quest.view', compact('quests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quest.create');
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
            'question' => 'required|string',
            'opsi_a' => 'required|string',
            'opsi_b' => 'required|string',
            'opsi_c' => 'required|string',
            'opsi_d' => 'required|string',
            'answer' => 'required|string',
        ]);

        $quest = new quest;
        $quest->question = $request->question;
        $quest->opsi_a = $request->opsi_a;
        $quest->opsi_b = $request->opsi_b;
        $quest->opsi_c = $request->opsi_c;
        $quest->opsi_d = $request->opsi_d;
        $quest->answer = $request->answer;
        $quest->save();

        return redirect(route('quest.index'));
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
        $quest = quest::where('id', $id)->first();
        return view('admin.quest.edit', compact('quest'));
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
        $this->validate($request, [
            'question' => 'required|string',
            'opsi_a' => 'required|string',
            'opsi_b' => 'required|string',
            'opsi_c' => 'required|string',
            'opsi_d' => 'required|string',
            'answer' => 'required|string',
        ]);

        $quest = quest::find($id);
        $quest->question = $request->question;
        $quest->opsi_a = $request->opsi_a;
        $quest->opsi_b = $request->opsi_b;
        $quest->opsi_c = $request->opsi_c;
        $quest->opsi_d = $request->opsi_d;
        $quest->answer = $request->answer;
        $quest->save();

        return redirect(route('quest.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        quest::where('id', $id)->delete();
        return redirect()->back();
    }
}
