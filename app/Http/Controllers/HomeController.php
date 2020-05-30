<?php
/**
 * Created by Atila Silva.
 * Date: qui, out 2019 21:59:15 +0000.
 */

namespace App\Http\Controllers;

use App\Visitor;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Show home page
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $visitors = Visitor::all();
        $allVisitsCount = $visitors->count();
        $visitorsPerEndPoint =  $visitors->groupBy('end_point');

        $totalCids = isset($visitorsPerEndPoint['/cid10']) ? $visitorsPerEndPoint['/cid10']->count() : 0;
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
