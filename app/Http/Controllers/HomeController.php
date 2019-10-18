<?php

namespace App\Http\Controllers;

use App\Visitors;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{


    /**
     * @param Request $request
     * @return array
     */
    public function index(Request $request){

        $visit = new Visitors;
        $visit->ip = $request->ip();
        $visit->end_point = '/';
        $visit->created_at = Carbon::now();
        $visit->save();

        $visitors = Visitors::all();

        $allVisitsCount = $visitors->count();

        $visitorsPerEndPoint =  $visitors->groupBy('end_point');

        $totalCids = isset($visitorsPerEndPoint['cid10/']) ? $visitorsPerEndPoint['cid10/']->count() : 0;
        $home = isset($visitorsPerEndPoint['/']) ? $visitorsPerEndPoint['/']->count() : 0;

        $visits = [
            'home' => $home,
            'total_cids' => $totalCids,
            'cids' => ($allVisitsCount - ($home +  $totalCids)),
        ];

        $visits['total'] = array_sum(array_values($visits));

        return view('index')->with(['visits' => $visits]);

    }
}
