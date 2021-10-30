<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Category;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $users = User::with(['books' => function ($q) {
            $q->with('categories');
        }])->whereHas('books', function ($q) {
            $q->whereHas('categories', function ($query) {
                $query->where('category_books.category_id', 1);
            });
        })->get();
        return view('index', ['users' => $users]);
    }

    public function books()
    {

        $books = Book::with('categories')->get();
    }

    public function categories()
    {
        $categories = Category::with('books')->get();
    }
}
