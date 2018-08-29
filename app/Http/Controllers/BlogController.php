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
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showArticleList()
    {
        $blogs = new Blogs();
        $blogs = $blogs->where('publish', '=', 1)->latest()->paginate(7, ['id', 'title', 'featuredimage', 'description','slug', 'body']);
        return view('/blogList', compact('blogs'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showBlog($slug)
    {
        $blog = new Blogs();
        $blog = $blog->where('slug', $slug)->first();
        return view('blog', compact('blog'));
    }

    /**
     * @param null $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAddBlog($id = null)
    {
        $blog = new Blogs();
        if ($id)
        {
            $blog = $blog->where('id', $id)->first();
        }
        return view('admin/addBlog', compact('blog'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createBlog(Request $request)
    {

        // if the id is present then we ar working with an existing blog
        if ($request->get('id'))
        {
            if($this->updateBlog($request))
            {
                return redirect()->back()->with('alert-success', 'Updated successfully');
            } else {
                return redirect()->back()->with('alert-warning', 'Updated not Successful');
            }

        } else
        {
            $this->validateBlog($request, true);

            $blog = new Blogs();

            //Store Image
            $imagePath = $request->file('featuredimage')->store('blogimages');

            //Create Slug
            $str = strtolower($request->get('title'));

            //Store Post
            $blog->title = $request->get('title');
            $blog->description = $request->get('description');
            $blog->featuredimage = $imagePath;
            $blog->body = $request->get('body');
            $blog->publish = $request->get('publish');
            $blog->author = $request->get('author');
            $blog->tags = $request->get('tags');
            $blog->slug = preg_replace('/\s+/', '-', $str);

            //Save
            $blog->save();
            return redirect()->route('editBlog', ['id' => $blog->id]);
        }
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function updateBlog(Request $request)
    {
        $this->validateBlog($request, false);

        $blog = new Blogs();
        $blog = $blog->find($request->get('id'));
        if ($request->file('featuredimage'))
        {
            $imagePath = $request->file('featuredimage')->store('blogimages');
        } else
        {
            $imagePath = $blog->featuredimage;
        }

            $blog->title = $request->get('title');
            $blog->description = $request->get('description');
            $blog->featuredimage = $imagePath;
            $blog->body = $request->get('body');
            $blog->publish = $request->get('publish');
            $blog->author = $request->get('author');
            $blog->tags = $request->get('tags');

        return $blog->save();
    }

    /**
     * @param Request $request
     * @param bool $new
     */
    public function validateBlog(Request $request, $new = true)
    {

        if ($new)
        {
            $this->validate($request, [
                'title' => 'required|unique:blogs|max:191',
                'featuredimage' => 'required|max:1000000'
            ]);
        }

        $this->validate($request, [
            'description' => 'required|max:191',

            'body' => 'required',
            'publish' => 'required',
            'author' => 'required|max:191',
        ]);

    }
}