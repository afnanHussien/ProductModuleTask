<?php 
namespace App\Traits;
use Illuminate\Support\Facades\File;
use Image;

trait UploadImagesTrait {

    public function uploadImage($folderName, $image, $oldImageName=null)
    {
        $extension = $image->getClientOriginalExtension();
        $fileSize = $image->getClientSize();
        $imageName = rand().'_'.time().'.'.$extension;
        $destinationPath = base_path() . '/public/uploads/'.$folderName;
        
        
        $img = Image::make($image->path());

        $img->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);

        if($oldImageName)
        {
            $imagePath = $destinationPath.'/'.$oldImageName;
            if(File::exists($imagePath))
            {
                File::delete($imagePath);
            }
        }
        return $imageName;
    }

    public function deleteImage ($folderName, $imageName)
    {
        $destinationPath = base_path() . '/public/uploads/'.$folderName;
        $imagePath = $destinationPath.'/'.$imageName;
        if(File::exists($imagePath))
        {
            File::delete($imagePath);
        }
    }
}
