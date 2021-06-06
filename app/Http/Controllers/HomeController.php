<?php

namespace App\Http\Controllers;

use App\Helpers\GraphicHelper;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // получаем заказы относящиеся конкретно к этому агенству и его турам и кэшируем запрос
        $orders = Cache::remember('orders_graph', 3600, function () {
            return Order::with(['tour'])
                ->whereHas('tour', function ($query) {
                    $query->whereHas('agency', function ($query) {
                        $query->whereHas('user', function ($query) {
                            $query->where('id', auth()->user()->id);
                        });
                    });
                })
                ->orderBy('created_at')
                ->get();
        });

        // получаем все туры
        $tours = $orders->map(function($item) {
            return $item->tour;
        });

        // оставляем только уникальные туры
        $tours = $tours->unique();

        $gh = new GraphicHelper();
        // получаем все доступные цвета для графиков
        $colorsConfiguration = $gh->getAvailableColors();
        // получаем информацию для четырех графиков
        $ordersDataForFirstGraphics = $gh->getDataForFirstGraphics($orders);
        $ordersDataForSecondGraphics = $gh->getDataForSecondGraphics($orders);
        $ordersDataForThirdGraphics = $gh->getDataForThirdGraphics($orders);
        $ordersDataForFourthGraphics = $gh->getDataForFourthGraphics($orders, $tours, $colorsConfiguration);

        // передаем в вью home
        return view('home',[
            'orders' => $orders,
            'ordersDataForFirstGraphicsData' => $ordersDataForFirstGraphics['data'],
            'ordersDataForFirstGraphicsLineNames' => $ordersDataForFirstGraphics['linesConfiguration'],
            'ordersDataForSecondGraphicsData' => $ordersDataForSecondGraphics['data'],
            'ordersDataForSecondGraphicsLineNames' => $ordersDataForSecondGraphics['linesConfiguration'],
            'ordersDataForThirdGraphicsData' => $ordersDataForThirdGraphics['data'],
            'ordersDataForFourthGraphics' => $ordersDataForFourthGraphics,
            'colorsConfiguration' => $colorsConfiguration,
        ]);
    }


}
