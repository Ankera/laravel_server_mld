<?php
/*
* @Name
* @Description
* @Author 余亚勇
* @Date 2023/10/21 18:07
*/

namespace Modules\Common\Exceptions;
use Throwable;

class ApiException extends \Exception
{
    public function __construct(array $apiErrConst, Throwable $previous = null)
    {
        parent::__construct($apiErrConst['message'], $apiErrConst['code'], $previous);
    }
}
