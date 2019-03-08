<?php

namespace App\Http\Controllers\Auth;

use App\Models\Menu;
use App\Models\PermissionRole;
use App\Models\RegUser;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use DB;

class RegUserController extends Controller
{
    //用户列表
    public function index()
    {
        return view('reg_user.reg_user')->withRegUsers(RegUser::paginate(15));
    }

    public function user_list_delete(RegUser $regUser, UserRole $userRole, $id)
    {
        if (!$id) return false;
        $regUser->destroy($id);
        $userRole->where('user_id', $id)->delete();
        return redirect('admin/reg_user');
    }

}
