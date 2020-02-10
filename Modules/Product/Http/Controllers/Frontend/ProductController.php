<?php

namespace Modules\Product\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\Product\Repositories\Product\ProductRepository;
use Modules\Product\Http\Requests\Product\CreateProductRequest;
use Modules\Product\Http\Requests\Product\UpdateProductRequest;
use Modules\Product\Repositories\Category\CategoryRepository;
use Modules\Product\Repositories\Color\ColorRepository;

class ProductController extends Controller
{
    private $products, $categories, $colors;

    public function __construct(ProductRepository $products, 
        CategoryRepository $categories, ColorRepository $colors)
    {
        $this->products = $products;
        $this->categories = $categories;
        $this->colors = $colors;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('product::frontend.products.index', [
            'products' => $this->products->listProductsWithPagination()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('product::frontend.products.create',[
            'categories' => $this->categories->getAllCategories(),
            'colors' => $this->colors->getAllColors()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        try{
            $this->products->create($request);
            return redirect()->back()->with("status", trans('frontend.successfully added'));
        }catch(\Exception $e){
            return redirect()->back()->with("error", trans('frontend.plz check your connection and try again'));
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        try{
            return view('product::frontend.products.show',[
                'product' => $this->products->find($id)
            ]);
        }catch(\Exception $e){
            return redirect()->back()->with("error", trans('frontend.plz check your connection and try again'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        try{
            $this->products->destroy($id);
            return redirect()->back()->with("status", trans('frontend.successfully deleted'));
        }catch(\Exception $e){
            return redirect()->back()->with("error", trans('frontend.plz check your connection and try again'));
        }
    }
}
