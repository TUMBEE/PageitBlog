<?php

namespace App\Http\Controllers;
use Statamic\View\View;
use Statamic\Facades\Entry;
use Statamic\Facades\Collection;
use Statamic\Facades\Taxonomy;
use Statamic\Facades\Globals;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
{
    $homeData = $this->home_pages();

    $collection = Collection::findByHandle('blog_post');
    
    if (!$collection) {
        // Handle collection not found error
    }

    $entries = $collection->queryEntries()->get();

    $data = [
        'entries' => $entries,
        'title' => $homeData['title'],
        'featured1Title' => $homeData['featured1Title'],
        'featured1Slug' => $homeData['featured1Slug'],
        'featured1Image' => $homeData['featured1Image'],
        'featured2Title' => $homeData['featured2Title'],
        'featured2Slug' => $homeData['featured2Slug'],
        'featured2Image' => $homeData['featured2Image'],
        'featured3Title' => $homeData['featured3Title'],
        'featured3Slug' => $homeData['featured3Slug'],
        'featured3Image' => $homeData['featured3Image'],
    ];

    return view('pages.home', $data);
}


    public function blogShow($slug)
    {
        $entry = Entry::query()
            ->where('collection', 'blog_post')
            ->where('slug', $slug)
            ->first();

         

        return view('pages.blogPost', ['entry' => $entry]);
    }


   /* public function home_pages()
    {
        $entry = Entry::query()
        ->where('slug', 'home-page')
        ->first(); // Find the entry with the given slug
    
    return (new View)
        ->template('pages.testPages')
        ->layout('default')
        ->with([
            'title' => $entry->get('title'),
            'romeo' => $entry->get('romeo'),
        ]);
    } */
    public function home_pages()
{
    $entry = Entry::query()
        ->where('slug', 'home-page')
        ->first(); // Find the entry with the given slug

    $featured1Id = $entry->get('featured_1');
    $featured2Id = $entry->get('featured_2');
    $featured3Id = $entry->get('featured_3');

    $featured1 = Entry::find($featured1Id);
    $featured2 = Entry::find($featured2Id);
    $featured3 = Entry::find($featured3Id);

    $data = [
        'title' => $entry->get('title'),
        'featured1Title' => $featured1 ? $featured1->get('title') : null,
        'featured1Slug' => $featured1 ? '/p/' . $featured1->slug() : null,
        'featured1Image' => $featured1 ? $featured1->get('blog_featured_image') : null,
        'featured2Title' => $featured2 ? $featured2->get('title') : null,
        'featured2Slug' => $featured2 ? '/p/' .$featured2->slug() : null,
        'featured2Image' => $featured2 ? $featured2->get('blog_home_featured') : null,
        'featured3Title' => $featured3 ? $featured3->get('title') : null,
        'featured3Slug' => $featured3 ? '/p/' .$featured3->slug() : null,
        'featured3Image' => $featured3 ? $featured3->get('blog_home_featured') : null,
    ];

    return $data;
}



    
    
    
    
    

    
    public function catShow($slug)
    {
        $taxonomy = Taxonomy::findByHandle('category');
        $term = $taxonomy->queryTerms()->where('slug', $slug)->first();
    
        if (!$term) {
            abort(404);
        }
    
        $entry = Entry::query()
            ->where('collection', 'blog_post')
            ->where('category', 'like', '%'. $term->slug() . '%')
            ->get();
    
        return view('pages.category', ['entries' => $entry, 'term' => $term]);
    }
    
}
