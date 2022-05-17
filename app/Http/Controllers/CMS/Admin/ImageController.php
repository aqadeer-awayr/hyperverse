<?php

namespace App\Http\Controllers\CMS\Admin;

use App\Models\ImageModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $dimensions['width'] = $request->width;
            $dimensions['height'] = $request->height;
            $image = ImageModel::whereDescription($request->description)->first();
            if ($image) {
                $path = 'uploads' . '/' . $image->name;
                if (!is_null($path)) {
                    if (File::exists(public_path($path))) {
                        File::delete(public_path($path));
                    }
                }
                $store_image = saveFile($request->file('image'), '/uploads', 'public', $dimensions);
                $image->update(['name' => $store_image]);
            } else {
                $store_image = saveFile($request->file('image'), '/uploads', 'public', $dimensions);
                ImageModel::create([
                    'name' => $store_image,
                    'description' => $request->description
                ]);
            }
            // dd($image);
            return redirect()->back()->withSuccess('Image Upload Successfully');
        }
        alert()->error('File formate not correct');
        return redirect()->back();
    }
}
