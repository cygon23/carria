<?php

namespace App\Helpers;


class ImageHelper
{
    public static function getImage($imageFile)
    {
        if (!empty($imageFile)) {
            return asset('storage' . $imageFile);
        } else {

        }
    }
}

