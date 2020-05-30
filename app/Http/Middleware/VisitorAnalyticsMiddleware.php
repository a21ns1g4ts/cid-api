<?php
/**
 * Created by Atila Silva.
 * Date: sáb, mai 2020 03:57:02 +0000.
 */

namespace App\Http\Middleware;

use App\VisitorAnalytics;
use Closure;
use Illuminate\Http\Request;

/**
 * Class VisitorAnalytcsMiddleware
 * @package App\Http\Middleware
 */
class VisitorAnalyticsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($response->status() === 200)
            VisitorAnalytics::visit($request);

        return $response;
    }
}
