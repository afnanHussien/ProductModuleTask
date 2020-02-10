<?php
namespace Modules\Product\Repositories\Category;

interface CategoryRepositoryContract
{
    public function find($id);

    public function getAllCategories();

    public function listCategoriesWithPagination();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);
}
