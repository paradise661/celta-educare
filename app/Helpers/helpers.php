<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

if (! function_exists('updatesettingmedia')) {
    function updatesettingmedia($request, $name, $filename)
    {

        $image = $request->file($name);
        if ($image) {
            $imageName = time().'-'.rand(0, 99).'-'.$image->getClientOriginalName();
            $image->move(public_path('storage/setting/'), $imageName);

            $image = '/storage/setting/'.$imageName;

            return $image;
        } else {
            return null;
        }
    }
}

if (! function_exists('deletesettingmedia')) {
    function deletesettingmedia($image, $old_image, $image_name, $siteSetting, $siteSettings)
    {
        if ($image) {
            removeFile($old_image);
            $siteSetting[$image_name] = $image;
        } else {
            $siteSetting[$image_name] = $siteSettings[$image_name];
        }

        return $siteSetting[$image_name];
    }
}

if (! function_exists('make_slug')) {
    function make_slug($string)
    {
        return Str::slug($string);
    }
}
if (! function_exists('generateUniqueSlug')) {
    // Function to generate a unique slug
    function generateUniqueSlug($slug, $title, $model)
    {
        $originalSlug = make_slug($slug ?? $title);
        $uniqueSlug = $originalSlug;
        $counter = 1;

        // Keep checking if the slug exists in the database
        while ($model::where('slug', $uniqueSlug)->exists()) {
            // Append a number to the slug to make it unique
            $uniqueSlug = $originalSlug.'-'.$counter;
            $counter++;
        }

        return $uniqueSlug;
    }
}

if (! function_exists('fileUpload')) {
    function fileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $imageName = time().$image->getClientOriginalName();
            $path = 'storage/images/'.$foldername.'/';
            $image->move(public_path($path), $imageName);

            return $path.$imageName;
        }
    }
}

if (! function_exists('galleryfileUpload')) {
    function galleryfileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $imageName = time().'-'.rand(0, 99).'-'.$image->getClientOriginalName();
            $path = 'storage/images/'.$foldername.'/';
            $image->move(public_path($path), $imageName);

            return $path.$imageName;
        }
    }
}

if (! function_exists('removeFile')) {
    function removeFile($file)
    {
        if (File::exists(public_path($file))) {
            File::delete(public_path($file));
        }
    }
}

if (! function_exists('stripLetters')) {
    function stripLetters($text, $number, $last = '')
    {
        if (! empty($text)) {
            return substr(strip_tags(html_entity_decode($text)), 0, $number).$last;
        }
    }
}

if (! function_exists('formatBlogDate')) {

    function formatBlogDate($dateString)
    {
        $date = Carbon::parse($dateString);
        $formattedDate = $date->format('F d Y');

        return $formattedDate;
    }
}
