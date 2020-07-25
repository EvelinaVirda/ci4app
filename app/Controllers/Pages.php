<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title'   => 'home | WebProgrammingUNPAS',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('Pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title'   => 'About Me'
        ];
        return view('Pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title'   => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'graha',
                    'kota' => 'bandung'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'hagrag',
                    'kota' => 'tambuncity'
                ]
            ]
        ];

        return view('Pages/contact', $data);
    }


    //--------------------------------------------------------------------

}
