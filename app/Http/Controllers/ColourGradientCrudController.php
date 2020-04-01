<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Gradient;

class ColourGradientCrudController extends Controller
{
    //
    public function index()
    {
        return response(Gradient::all()->jsonSerialize(), Response::HTTP_OK);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'gradient1'=> 'required',
            'gradient2' => 'required'
        ]);

        $gradient = new Gradient();
        $gradient->title = $request->get('title');
        $gradient->gradient1 = $request->get('gradient1');
        $gradient->gradient2 = $request->get('gradient2');
        $gradient->save();

        // return response($gradient->jsonSerialize(), Response::HTTP_CREATED);
        return response(null, Response::HTTP_OK);
    }

    public function update(Request $request)
    {
        $gradient = Gradient::findOrFail($request->id);
        $gradient->title = $request->title;
        $gradient->gradient1 = $request->gradient1;
        $gradient->gradient2 = $request->gradient2;
        $gradient->save();

        return response(null, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        Gradient::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}
