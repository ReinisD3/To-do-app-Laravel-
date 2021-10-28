<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TasksController extends Controller
{
   public function show()
   {
       return view('tasks.tasks',['tasks'=> Task::latest()->get()]);
   }
   public function create()
   {
       return view('tasks.create',['categories'=>Category::all()]);
   }
   public function store()
   {
       $attributes = request()->validate([
           'title'=>['required'],
           'category_id'=>['required',Rule::exists('categories','id')]
       ]);
       Task::create($attributes,['user_id'=>Auth::id()]);

       redirect('/tasks')->with(['success','Task Added!']);
   }
}
