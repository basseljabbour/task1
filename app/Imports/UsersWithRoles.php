<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UsersWithRoles implements ToCollection, WithValidation, WithHeadingRow
{
    /**
    * @param Collection $rows
    */
    public function collection(Collection $rows)
    {
        //
        foreach ($rows as $row)
        {
            $user = User::create(
                [
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'password' => Hash::make($row['password'])
                ]
                );
                if($row['is_admin'] == 1){
                    $user->assignRole('admin');
                }
        }

    }

    public function rules() : array{
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
}
