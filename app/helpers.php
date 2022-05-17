<?php

use FFMpeg\FFProbe;
use App\Models\City;
use App\Models\User;
use App\Models\Country;
use App\Models\Language;
use Illuminate\Support\Facades\URL;
use App\Repositories\FileRepository;
use Illuminate\Support\Facades\Storage;
use App\Repositories\DirectoryRepository;

if (!function_exists('is_active')) {
    function is_active($uri): string
    {
        return !empty($uri) ? 'active' : 'not';
    }
}

function questionNo($quiz): string
{
    return count($quiz->questions)  >= 20 ? 'disabled' : 'not';
}

if (!function_exists('greetings')) {
    function greetings(): string
    {
        $hour = date('H');
        return $hour > 17 ? 'Evening' : ($hour > 12 ? 'Afternoon' : 'Morning');
    }
}

function duration($path)
{
    // $path = 'videos/Screencast from 12-29-2021 07:57:18 PM.webm';
    $ffmpeg = FFProbe::create();
    return $ffmpeg->format($path)->get('duration');
    // return floor($durationInSeconds % 60);
    // dd($durationInSeconds);
}

function calculateDuration($time)
{
    $s = $time % 60;
    $m = floor(($time % 3600) / 60);
    $h = floor(($time % 86400) / 3600);
    return $h . ' hr ' . $m . ' min ';
}

function languages()
{
    return Language::whereNotIn('id', [1, 3])->get();
}
function allLanguages()
{
    return Language::all();
}

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

function unparse_url($parsed_url)
{
    $query    = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : '';
    $fragment = isset($parsed_url['fragment']) ? parse_url($parsed_url['fragment']) : parse_url($query);
    return $fragment;
}

function saveFile($file, $path, $bucket = 's3', $dimensions = [])
{
    // dd($bucket);
    $file->getClientOriginalName();

    $uploadedFileExtension = $file->getClientOriginalExtension();
    $generatedFileName = generateRandomString() . "." . $uploadedFileExtension;
    switch ($bucket) {
        case 's3':
            (new FileRepository($bucket))->put($path, $file, $generatedFileName);
            break;
        case 'public':
            // (new FileRepository($bucket))->put($path, $file, $generatedFileName, 'public');
            $filePath = public_path('uploads');
            // dd($filePath);
            $img = \Intervention\Image\Facades\Image::make($file->path())->resize($dimensions['width'], $dimensions['height']);
            if (!file_exists($filePath))
                mkdir($filePath, 0777, true);
            // dd(is_writable($filePath));
            $img->save($filePath . '/' . $generatedFileName);
            break;
    }
    // $file->move(public_path() . '/images/', $generatedFileName);
    return $generatedFileName;
}

function removeSpecialCharacters($string)
{
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

    $string =  preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

    return strtolower($string); // samll case
}

// Create  Directory in s3 storage
function createDirectory($path)
{
    // (new DirectoryRepository())->create("courses-data");
    (new DirectoryRepository())->create($path);
}

// Rename Directory
function renameDirectory($old, $new)
{
    (new DirectoryRepository())->rename($old, $new);
}

// Delete  directory
function deleteDirectory($path)
{
    (new DirectoryRepository())->delete("courses-data/" . $path);
}


function hcLink($code)
{
    return URL::to('/') . '/?code=' . $code;
}

function countriesList()
{
    return Country::all();
}

function citiesList()
{
    return City::all();
}

function getReferralUser($user)
{
    $get_referral_user = User::where('hc_link', $user->affiliate_link)->first();
    return $get_referral_user->referral_link;
}


function getImage($path, $bucket = 's3')
{
    switch ($bucket) {
        case 's3':
            return (new FileRepository($bucket))->get($path);
            break;
        case 'public':
            return (new FileRepository($bucket))->get('uploads/' . $path);
            break;
    }
}

function backGroundImage($description)
{
    switch ($description) {
        case 'logo':
            $asset = asset('assets/images/logos/navlogo.png');
            break;
        case 'hero-header':
            $asset = asset("assets/images/home.png");
            break;
        case 'community':
            $asset = asset("assets/images/wwd.png");
            break;
            // default:
            //     $description = asset('assets/images/wwd.png');
            //     break;
    }
    $image = \App\Models\ImageModel::whereDescription($description)->first();
    // return 'storage/uploads/' . $image->name;
    return ($image) ? asset("uploads") . '/' . $image->name : $asset;
}

function deleteFile($path)
{
    $exists = Storage::disk('s3')->exists($path);
    if ($exists) {
        (new FileRepository())->delete($path);
    }
}
