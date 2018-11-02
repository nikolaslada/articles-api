<?php

namespace App\Http\Controllers;

use App\Category;
use App\Transformers\CategoryTransformer;

final class CategoryController extends Controller
{
	public function index()
	{
		return $this->response->collection(
            Category::all('id', 'uid', 'title')->whereInStrict('status', 'category')->get(), new CategoryTransformer
		);
	}

}
