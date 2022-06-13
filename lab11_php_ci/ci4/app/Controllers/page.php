<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
    return view('about', [
        'title' => 'Halaman About',
        'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.'
    ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman contact biasanya berisi contact sang pembuat halaman ini <h1> Rangga Saputra</h1>'
        ]);
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }

    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}