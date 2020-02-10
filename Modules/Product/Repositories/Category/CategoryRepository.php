<?php
namespace Modules\Product\Repositories\Category;

use Modules\Product\Entities\Category;
use Modules\Product\Repositories\Category\CategoryRepositoryContract;
use App\Traits\UploadImagesTrait;

class CategoryRepository implements CategoryRepositoryContract
{
    use UploadImagesTrait;

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Category::findOrFail($id);
    }

    /**
     * @return mixed
     */
    public function getAllCategories()
    {
        return Category::all();
    }

    /**
     * @return mixed
     */
    public function listCategoriesWithPagination()
    {
        return Category::paginate(5);
    }


    /**
     * @param $requestData
     */
    public function create($requestData)
    {
        if ($requestData->hasFile('image')) 
        {
            $savedImageName = $this->uploadImage('categories',$requestData->image);
        }
        $category = Category::create([
            'title' => $requestData->title,
            'description' => $requestData->description,
            'image' => $requestData->hasFile('image') ? $savedImageName : '',
        ]);
    }

    /**
     * @param $id
     * @param $requestData
     */
    public function update($requestData, $id)
    {
        $category = Category::findOrFail($id);
        if ($requestData->hasFile('image')) 
        {
            $savedImageName = $this->uploadImage('categories', $requestData->image, $category->image);
        }
        $dataArray = $requestData->all();
        if(array_key_exists('image',$dataArray))
        {
            $dataArray['image'] = $requestData->hasFile('image') ? $savedImageName : '';
        }
        $category->fill($dataArray)->save();
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if($category->image)
        {
            $this->deleteImage('categories', $category->image);
        }
        $category->delete();
    }

}
