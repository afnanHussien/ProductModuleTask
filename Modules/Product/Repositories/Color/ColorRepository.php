<?php
namespace Modules\Product\Repositories\Color;

use Modules\Product\Entities\Color;
use Modules\Product\Repositories\Color\ColorRepositoryContract;

class ColorRepository implements ColorRepositoryContract
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Color::findOrFail($id);
    }

    /**
     * @return mixed
     */
    public function getAllColors()
    {
        return Color::all();
    }

    // /**
    //  * @return mixed
    //  */
    // public function listCitiesWithPagination()
    // {
    //     return Color::with('country')->paginate(10);
    // }
    

    /**
     * @param $requestData
     */
    public function create($requestData)
    {
        $color = Color::create($requestData->all());
    }

    /**
     * @param $id
     * @param $requestData
     */
    public function update($requestData, $id)
    {
        $color = Color::findOrFail($id);
        $color->fill($requestData->all())->save();
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
    }

}
