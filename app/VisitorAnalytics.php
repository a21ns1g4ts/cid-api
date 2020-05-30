<?php
/**
 * Created by Atila Silva.
 * Date: sáb, mai 2020 03:58:21 +0000.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Class VisitorAnalytics
 * @package App
 */
class VisitorAnalytics
{
    /**
     * Save visit
     * @param Request $request
     */
    public static function visit(Request $request)
    {
        $visit = new Visitor;
        $visit->ip = $request->ip();
        $visit->end_point = $request->getRequestUri();
        $visit->created_at = Carbon::now();
        $visit->save();
    }
}
