<?php

namespace App\Http\Controllers\Api;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(Request $req)
    {
        $data = new Book();
        $data->fill($req->all());
        $data->save();

        return response()->json([
            'code'    => 200,
            'message' => 'OK',
            'data'    => $data,
        ]);
    }

    public function get(Request $req)
    {
        $data = Book::with('author')->get();

        return response()->json([
            'code'    => 200,
            'message' => 'OK',
            'data'    => $data,
        ]);
    }

    public function update(Request $req, $id)
    {
        $data = Book::find($id);
        $data->fill($req->all());
        $data->save();

        return response()->json([
            'code'    => 200,
            'message' => 'OK',
            'data'    => $data,
        ]);
    }

    public function remove(Request $req, $id)
    {
        $data = Book::find($id);
        $data->delete();

        return response()->json([
            'code'    => 200,
            'message' => 'OK',
            'data'    => $data,
        ]);
    }
}
