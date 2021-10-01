<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    private function getMenu($menu_id = NULL){
        $arrMenu = DB::table('menus')
            ->select('menus.id', 'menus.menu_id', 'nome', 'rota', 'ordem', 'status')
            ->where('menus.menu_id', $menu_id)
            ->orderBy('ordem')
            ->get();

        if(count($arrMenu) > 0)
            foreach($arrMenu as $key => $m)
                $arrMenu[$key]->filhos = $this->getMenu($m->id);

        return $arrMenu;
    }

    private function menus(){
        Cache::forget('menus');
        $menus = $this->getMenu();
        Cache::put('menus', $menus);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
        $this->menus();
    }
}
