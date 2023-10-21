<?php
/*
* @Name
* @Description
* @Author 余亚勇
* @Date 2023/10/21 13:56
*/

namespace Modules\Admin\Http\Middleware;

use Closure;

/**
 * 后台权限，验证
 */
class AdminApiAuth
{
    public function handle($request, Closure $next)
    {
//        $response = $next($request);

        // Perform action

//        dd('first');
//        dd($request);
        return $next($request);
    }
}
