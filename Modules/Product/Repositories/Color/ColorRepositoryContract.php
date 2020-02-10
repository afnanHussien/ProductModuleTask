<?php
namespace Modules\Product\Repositories\Color;

interface ColorRepositoryContract
{
    public function find($id);

    public function getAllColors();

    // public function listCitiesWithPagination();
    
    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);
}
