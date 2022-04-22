<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index()
    {
        $books = Book::all();

        return view('Books.index', compact('books'));
    }

    public function Create()
    {
        return view('Books.Create');
    }

    public function CreatePost(Request $request)
    {
        $book = new Book([
            'book_isbn' => $_POST['isbn'],
            'book_title' => $_POST['title'],
            'book_author' => $_POST['author'],
            'book_image' => $_POST['image'],
            'book_descr' => $_POST['descr'],
            'book_price' => $_POST['price'],
            'supplier_id' => $_POST['supplier_id']
        ]);
        $book->save();
        return redirect('Books');
    }

    public function cart()
    {
        return view('Books.cart');
    }

    public function addToCart($id)
    {
        $book = Book::find($id);

        if (!$book) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first book
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $book->book_title,
                    "quantity" => 1,
                    "price" => $book->book_price,
                    "photo" => $book->book_image
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Book added to cart successfully!');
        }

        // if cart not empty then check if this book exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Book added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $book->book_title,
            "quantity" => 1,
            "price" => $book->book_price,
            "photo" => $book->book_image
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Book added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}
