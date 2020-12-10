<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassUsersStore;
use App\Imports\UsersImport;
use App\Imports\UsersWithRoles;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Excel;

class UserController extends Controller
{
    //
    public function mass_create(){
        return view('dashboard.mass_users_insert');
    }

    public function mass_store(MassUsersStore $request){

        $file_path = Storage::disk('local')->putFile('secured_files', $request->file('file'));
        try {
            Excel::import(new UsersImport, $file_path);
            $success = 'inserted_successfully';
            return redirect()->back()->with('success', $success);
        }
            catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();
                return redirect()->back()->with('failures', $failures);
        }

    }
}
