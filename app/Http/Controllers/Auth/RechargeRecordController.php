<?php

namespace App\Http\Controllers\Auth;

use App\Models\Menu;
use App\Models\PermissionRole;
use App\Models\RechargeRecord;
use App\Models\Role;
use App\Models\TransactionManagement;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use DB;

class RechargeRecordController extends Controller
{
    //充值记录
    public function index()
    {
        return view('/recharge_record/index')->withRechargeRecord(RechargeRecord::paginate(15));
    }


    
}
