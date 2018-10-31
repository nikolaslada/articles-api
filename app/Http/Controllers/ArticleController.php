<?php

namespace App\Http\Controllers;

use App\Article;
use App\Transformers\ArticleTransformer;

final class ArticleController extends Controller
{
	public function index()
	{
		return $this->response->collection(
			Article::with('author', 'tags')->get(), new ArticleTransformer
		);
	}
    
	public function show(Article $article)
	{
		return $this->response->item($article->load('author', 'tags'), new ArticleTransformer);
	}
    
}
