<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;
use App\Article;
use App\Tag;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Session;

class ArticlesController extends Controller {

	/**
	 *
	 */
	public function __construct(){

		$this->middleware('auth',
			['except' => ['index', 'show']]
		);
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$articles = Article::latest('published_at')->get();
		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tags = Tag::lists('name', 'id');
		return view('articles.create', compact('tags'));
	}


	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(Request $request)
	{
		// from call Request on top
		// Remember to change method on create form

		$articles = new Article($request->all());

		Auth::user()->articles()->save($articles);

		$articles->tags()->attach($request->input('tag_list'));

		flash()->overlay('your article has been create', 'Good job');

		return redirect('articles');

	}

	/**
	 * @param $slug
	 * @return \Illuminate\View\View
	 */
	public function show($slug)
	{
		$article = Article::where('slug', '=', $slug )->firstOrFail();
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
		$articles = Article::findOrFail($id);
		$tags = Tag::lists('name', 'id');
		return view('articles.edit', compact('articles', 'tags'));
	}

	/**
	 * @param $id
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function update($id, Request $request)
	{
		$articles = Article::where('id', '=', $id)->firstOrFail();

		$articles->update($request->all());

		$articles->tags()->sync($request->input('tag_list'));

		return redirect('articles');
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
