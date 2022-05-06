<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'manufacturer_id' => 'array',
            'from_price' => 'numeric',
            'to_price' => 'numeric',
            'kind' => Rule::in(['tv', 'computer', 'washing machine', 'conditioner']),
        ]);

        if ($validator->fails()) {
            return response([
                'error' => $validator->getMessageBag()
            ], \Illuminate\Http\Response::HTTP_BAD_REQUEST);
        }

        $page = $request->get('page') ?: 0;

        $collection = Product::search($request->all(), $page);

        return response($collection);
    }
}
