<?php


namespace App\Helper;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Image;
use App\Models\Permission;
use App\Models\PermissionRole;
     
function permission_role()
    {

      $PermissionRole=PermissionRole::with('permission')->where('role_id',auth()->user()->role_id)->get();
        $permission_role=null;
        foreach ($PermissionRole as $key => $value) {
           $permission_role[$key]=$value->permission->name;
        }
        return  $permission_role;
    }

?>



