<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;
use Encore\Admin\Grid\Filter\Where;
use Symfony\Component\HttpFoundation\Session\Session;


class AdminController extends Controller
{
    //connexion

      public function inscription(Request $request){
        AdminUser::create([
            "username"=>$request->username,
            "password"=>$request->password,
        ]);
        return redirect()->route('ConnexionAdm');
    }
    
    //déconnexion
    public function logout(){
        session(["enligne"=>""]);
        return redirect()->route("ConnexionAdm");
    }

    public function read(Request $request){
        $admin = AdminUser::where("username",$request->username)->where("password",$request->password)->first();
        if(!is_null($admin)){
            Session(["enligne"=>$admin]);
            return redirect()->route("AccueilAdm");
    }
}
}