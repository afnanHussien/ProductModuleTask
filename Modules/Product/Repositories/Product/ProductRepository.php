<?php
namespace Modules\Product\Repositories\Product;

use Modules\Product\Entities\Product;
use Modules\Product\Repositories\Product\ProductRepositoryContract;

class ProductRepository implements ProductRepositoryContract
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Product::with('category','colors')->findOrFail($id);
    }

    /**
     * @return mixed
     */
    public function listProductsWithPagination()
    {
        return Product::with('category','colors')->paginate(5);
    }
    

    /**
     * @param $requestData
     */
    public function create($requestData)
    {
        if ($requestData->hasFile('image')) 
        {
            $savedImageName = $this->uploadImage('products',$requestData->image);
        }
        $product = Product::create([
            'title' => $requestData->title,
            'description' => $requestData->description,
            'image' => $requestData->hasFile('image') ? $savedImageName : '',
            'category_id' => $requestData->category_id
        ]);
        $i=0;
        foreach($requestData->colorIds as $colorId) {
            $product->colors()->attach($colorId, ['price' => $requestData->priceArray[$i++]]);
        }
        
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if($product->image)
        {
            $this->deleteImage('products', $product->image);
        }
        $product->delete();
    }

}
