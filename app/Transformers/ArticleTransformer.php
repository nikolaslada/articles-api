<?php

namespace App\Transformers;

use App\Article;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource;

final class ArticleTransformer extends TransformerAbstract
{

	public $defaultIncludes = [
		'author',
		'tags',
	];
    
	public function transform(Article $article): array
	{
		return [
			'id' => $article->id,
			'content' => $article->content,
			'publish_at' => $article->publish_at->toDateTimeString()
		];
	}
    
	public function includeUser(Article $article): Resource\Item
	{
		return $this->item($article->author, (new AuthorTransformer)->hideEmail());
	}
    
	public function includeTags(Article $article): Resource\Collection
	{
		return $this->collection($article->tags, new TagTransformer);
	}

}
