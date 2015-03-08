<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;
use App\Articles;
use Carbon\Carbon;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return ResponseC
	 */
	public function index()
	{
		$articles = Articles::latest('published_at')->get();

		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('articles.create');
	}

	/**
	 * @param CreateArticleRequest $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(CreateArticleRequest $request)
	{
		// from call Request on top
		// Remember to change method on create form

		Articles::create($request->all());

		return redirect('articles');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$article = Articles::where('slug', $slug )->firstOrFail();

		return view('articles.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Articles::where('slug', '=', $id)->firstOrFail();

		return view('articles.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
