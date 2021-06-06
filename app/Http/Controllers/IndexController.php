<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        // получаем слайды для главной
        $sliders = Slider::get();
        // получаем три последние услуги для главной
        $services = Service::take(3)->get();
        // получаем три последние новости для главной
        $articles = Article::latest()->take(3)->get();

        // передаем во вью index.main наши переменные для отображения
        return view('index.main', [
            'sliders' => $sliders,
            'services' => $services,
            'articles' => $articles,
        ]);
    }

    public function contacts()
    {
        // отображаем вью index.contacts на странице контактов
        return view('index.contacts');
    }

    public function services()
    {
        // получаем список услуг
        $services = Service::get();

        // передаем переменную в вью index.services
        return view('index.services', [
            'services' => $services,
        ]);
    }
}
