<?php


namespace Bestys\Purchases\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * Class Controller
 * @package Bestys\Purchases\Http\Controllers
 */
class Controller extends \Illuminate\Routing\Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
