<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function create(Request $req)
    {
        $data = new Author();
        $data->fill($req->all());
        $data->save();

        return response()->json([
            'code'    => 200,
            'message' => 'OK',
            'data'    => $data,
        ]);
    }

    public function get(Request $req) {
        $data = Author::all();

        return response()->json([
            'code'    => 200,
            'message' => 'OK',
            'data'    => $data,
        ]);
    }

    public function update(Request $req, $id)
    {
        $data = Author::find($id);
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
        $data = Author::find($id);
        $data->delete();

        return response()->json([
            'code'    => 200,
            'message' => 'OK',
            'data'    => $data,
        ]);
    }
}
