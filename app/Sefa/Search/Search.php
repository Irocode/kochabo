<?php namespace Sefa\Search;

use News;
use Article;
use Kochabobox;
use Page;
use PhotoGallery;

class Search {

    public function search($search) {

        $newsResult = News::search($search)->get()->toArray();
        $articleResult = Article::search($search)->get()->toArray();
        $kochaboboxResult = Kochabobox::search($search)->get()->toArray();
        $pageResult = Page::search($search)->get()->toArray();    
        $photoGalleryResult = PhotoGallery::search($search)->get()->toArray();
        $result = array_merge($newsResult, $articleResult, $photoGalleryResult, $pageResult, $kochaboboxResult);
        return $result;
    }
}
