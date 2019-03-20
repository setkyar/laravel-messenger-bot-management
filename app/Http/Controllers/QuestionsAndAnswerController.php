<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Http\Requests;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class QuestionsAndAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Answers = Answer::all();
        return view('qna.index', compact('Answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('qna.create');
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
            'command' => 'required|max:255',
            'answer' => 'required|max:255',
         ]);

        try {
             Answer::create($request->all());
            return back()->with('flash_success', 'QNA Saved Successfully');
        } catch (Exception $e) {
            return back()->with('flash_error', 'QNA Not Found');
        }
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
        try {
            Answer::find($id)->delete();
            return back()->with('message', 'QNA deleted successfully');
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', 'QNA Not Found');
        } catch (Exception $e) {
            return back()->with('flash_error', 'QNA Not Found');
        }
    }
}
