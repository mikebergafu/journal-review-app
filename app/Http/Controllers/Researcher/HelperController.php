<?php

namespace App\Http\Controllers\Researcher;

use App\Article;
use App\Http\Controllers\Controller;
use App\Paper;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editions()
    {
        $title = 'Editions';
        $papers = Paper::where('published_at', '!=', null)->with('edition')->get();
        $articles = Article::where('published_at', '!=', null)->get();
        return view('pages.admin.settings.articles.create', compact('title','papers','articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createEdition()
    {
        $title = 'Editions';
        $papers = Paper::where('published_at', '!=', null)->with('edition')->get();
        $articles = Article::where('published_at', '!=', null)->get();
        return view('pages.admin.settings.articles.create', compact('title','papers','articles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEdition(Request $request)
    {
        $data = array_merge($request->all(), [
            'user_id' => \Auth::id(),
            'last_user_id' => \Auth::id(),
            'status' => true,
        ]);
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
