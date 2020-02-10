<?php

namespace Modules\Product\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Category;
use Modules\Product\Repositories\Category\CategoryRepository;
use Modules\Product\Http\Requests\Category\CreateCategoryRequest;
use Modules\Product\Http\Requests\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    private $categories;

    public function __construct(CategoryRepository $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('product::frontend.categories.index', [
            'categories' => $this->categories->listCategoriesWithPagination()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('product::frontend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        try{
            $this->categories->create($request);
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
            return view('product::frontend.categories.show',[
                'category' => $this->categories->find($id)
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
        return view('product::frontend.categories.edit',[
            'category' => $this->categories->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        try{
            $this->categories->update($request, $id);
            return redirect()->route('categories.index')->with("status", trans('frontend.successfully updated'));
        }catch(\Exception $e){
            return redirect()->back()->with("error", trans('frontend.plz check your connection and try again'));
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        try{
            $this->categories->destroy($id);
            return redirect()->back()->with("status", trans('frontend.successfully deleted'));
        }catch(\Exception $e){
            return redirect()->back()->with("error", trans('frontend.plz check your connection and try again'));
        }
    }
}
