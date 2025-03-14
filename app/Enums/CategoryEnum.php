<?php

namespace App\Enums;

use Spatie\Enum\Enum;

final class CategoryEnum extends Enum
{

    protected static function values(): array
    {
        return [
            'Shadharon' => 1,
            'Ponno' => 2,
            'Mashik' => 3,
            'Osthaye' => 4,
            'Policy' => 5,
            'Ekkalin' => 6,

            'Shaptahik' => 7,
            'Doinik' => 8,
            'Bishesh' => 9,

            'Kroy' => 10,
            'Bikroy' => 11,
        ];
    }

    public static function getAll(): array
    {
        return [
            1 => 'সাধারণ',
            2 => 'পণ্য',
            3 => 'মাসিক',
            4 => 'অস্থায়ী',
            5 => 'পলিসি',
            6 => 'এককালীন',

            7 => 'সাপ্তাহিক',
            8 => 'দৈনিক',
            9 => 'বিশেষ',

            10 => 'ক্রয়',
            11 => 'বিক্রয়',
        ];
    }

    // const Shadharon = 1;
    // const Ponno = 2;
    // const Mashik = 3;
    // const Osthaye = 4;
    // const Policy = 5;
    // const Ekkalin = 6;

    // const Shaptahik = 7;
    // const Doinik = 8;
    // const Bishesh = 9;

    // const Kroy = 10;
    // const Bikroy = 11;


}
