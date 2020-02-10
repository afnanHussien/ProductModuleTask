<?php
namespace Modules\Product\Repositories\Product;

interface ProductRepositoryContract
{
    public function find($id);

    public function listProductsWithPagination();
    
    public function create($requestData);

    public function destroy($id);
}
