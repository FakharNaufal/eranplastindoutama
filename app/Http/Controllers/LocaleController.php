<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LocaleController extends Controller
{
    public function switch($locale, Request $request)
    {
        if (! in_array($locale, ['id','en'])) {
            $locale = config('app.locale');
        }

        Session::put('locale', $locale);

        // redirect back to previous page or to home if not available
        $back = url()->previous() ?: route('front.index');
        return Redirect::to($back);
    }
}
