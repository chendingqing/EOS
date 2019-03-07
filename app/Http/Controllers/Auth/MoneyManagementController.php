<?php

namespace App\Http\Controllers\Auth;

use App\Models\Menu;
use App\Models\PermissionRole;
use App\Models\Role;
use App\Models\TransactionManagement;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use DB;

class MoneyManagementController extends Controller
{
    //用户列表
    public function index()
    {
        return view('/money_management/index')->withUsers(TransactionManagement::paginate(15));
    }


    
}
