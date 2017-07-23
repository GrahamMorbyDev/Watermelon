<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 23/07/2017
 * Time: 19:31
 */

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showArticleList()
    {
        $blogs = new Blogs();
        $blogs = $blogs->where('publish', '=', 1)->paginate(10, ['id', 'title', 'featuredimage']);
        return view('/blogList', compact('blogs'));
    }

    public function showBlog($id)
    {
        $blog = new Blogs();
        $blog = $blog->where('id', $id)->first();
        return view('blog', compact('blog'));
    }

    public function createBlog(Request $request)
    {
        $blog = new Blogs();

        $imagePath = $request->file('featuredimage')->store('blogimages');

        $blogAttributes = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'featuredimage' => $imagePath,
            'body' => $request->get('body'),
            'publish' => $request->get('publish'),
            'author' => $request->get('author'),
            'tags' => $request->get('tags'),
        ];

        $blog->create($blogAttributes);

        return redirect()->back()->with('alert-success', 'Saved successfully');
    }

    public function updateBlog(Request $request)
    {
        $blog = new Blogs();
        $blog = $blog->find($request->get('id'));

        if ($request->file('featuredimage'))
        {
            $imagePath = $request->file('featuredimage')->store('blogimages');
        } else
        {
            $imagePath = $blog->featuredimage;
        }

        $blogAttributes = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'featuredimage' => $imagePath,
            'body' => $request->get('body'),
            'publish' => $request->get('publish'),
            'author' => $request->get('author'),
            'tags' => $request->get('tags'),
        ];

        $blog->update($blogAttributes);

        return redirect()->back()->with('alert-success', 'Saved successfully');
    }
}