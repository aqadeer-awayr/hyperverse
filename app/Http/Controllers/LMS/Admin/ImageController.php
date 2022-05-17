<?php

namespace App\Http\Controllers\LMS\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImageModel;
use App\Repositories\FileRepository;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function logo(Request $request)
    {

        if ($request->hasFile('image')) {
            $dimensions['width'] = $request->width;
            $dimensions['height'] = $request->height;
            $image = ImageModel::whereDescription($request->description)->first();
            if ($image) {
                $path = $image->name;
                if (!is_null($path)) (new FileRepository('public'))->delete('uploads/' . $path);
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
        }
        return response()->json('Hello');
    }
}
