<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('student.cart.index', [
            'cart_items' => Cart::content()
        ]);
    }


    public function addToCart($id)
    {
        $book = Book::find($id);
        Cart::add([
            'id' => $id,
            'name' => $book->name,
            'qty' => 1,
            'price' => 9.99,
            'options' => [
                'image' => $book->image,
                'author' => $book->author->name
            ]]);

        return redirect('/cart/index');
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return back()->with('delete-message', 'Cart Delete Successfully.');
    }
}
