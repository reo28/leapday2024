<?php

namespace App\Imports;

use App\Models\Store;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportStore implements ToModel, WithHeadingRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Store([
            'name'     => $row['name'],
            'adress'   => $row['adress'],
        ]);

    }
    public function rules(): array
    {
        return [
            'name' => 'unique:stores',
            'adress' => 'unique:stores'
        ];
    }

    public function customValidationMessages()
    {
     return [
         
         'adress.unique' => 'email should be unique',
     ];
    }
}
