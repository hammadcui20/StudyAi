<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Blog;
use App\Models\Quiz;

class CategoriesController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('Admin.category.index', compact('category'));
    }
    public function add()
    {
        return view('Admin.category.add');
    }
    public function insert(Request $request )
    {
        $category = new Category();
        $category->name = $request->input('title');
        $category->slug = $request->input('course');
        $category->description = $request->input('description');
        $category->save();
        return redirect('/classroom')->with('status',"ClassRoom Added Successfully");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('Admin.category.edit',compact('category'));
    }

    public function update(Request $request ,  $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('title');
        $category->slug = $request->input('course');
        $category->description = $request->input('description');
        $category->update();
        return redirect('/classroom')->with('status',"Shopkeepers Updated Successfully");
    }

    public function delete($id )
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/classroom')->with('status',"Shopkeepers deleted Successfully");
    }
    public function blogsindex()
    {
        $category = Blog::all();
        return view('Admin.blogs.index', compact('category'));
    }
    public function blogsadd()
    {
        return view('Admin.blogs.add');
    }
    public function blogsinsert(Request $request )
    {
        $category = new Blog();
        if($request->hasFile('image'))
        {
            $file =  $request->File('file');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('upload/category',$fileName);
            $category->file = $fileName;
        }
        $category->title = $request->input('title');
        $category->description = $request->input('description');    
        $category->privacy = $request->input('privacy')   == True ? '1' : '0';
        $category->save();
        return redirect('/blogsindex')->with('status',"Data Added Successfully");
    }

    public function blogsedit($id)
    {
        $category = Blog::find($id);
        return view('Admin.blogs.edit',compact('category'));
    }

    public function blogsupdate(Request $request ,  $id)
    {
        $category = Blog::find($id);
        if($request->hasFile('image'))
        {
            $file =  $request->File('file');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('upload/category',$fileName);
            $category->file = $fileName;
        }
        $category->title = $request->input('title');
        $category->description = $request->input('description');    
        $category->privacy = $request->input('privacy')   == True ? '1' : '0';
        $category->update();
        return redirect('/blogsindex')->with('status',"Data Added Successfully");
    }

    public function blogsdelete($id )
    {
        $category = Blog::find($id);
        
        $category->delete();
        return redirect('/blogs')->with('status',"Shopkeepers deleted Successfully");
    }
    public function quizindex()
    {
        $category = Quiz::all();
        return view('Admin.quiz.index', compact('category'));
    }
    public function quizadd()
    {
        return view('Admin.quiz.add');
    }
    public function quizinsert(Request $request )
    {
        $category = new Quiz();
        $category->class= $request->input('class');
        $category->course = $request->input('course');
        $category->description = $request->input('description');
        $category->save();
        return redirect('/quiz')->with('status',"ClassRoom Added Successfully");

    }

    public function quizedit($id)
    {
        $category = Quiz::find($id);
        return view('Admin.quiz.edit',compact('category'));
    }

    public function quizupdate(Request $request ,  $id)
    {
        $category = Quiz::find($id);
        $category->class= $request->input('class');
        $category->course = $request->input('course');
        $category->description = $request->input('description');
        $category->update();
        return redirect('/quiz')->with('status',"ClassRoom Added Successfully");
    }

    public function quizdelete($id )
    {
        $category = Category::find($id);
        if($category->image)
        {
            $path  = 'upload/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('/quiz')->with('status',"Shopkeepers deleted Successfully");
    }
}
