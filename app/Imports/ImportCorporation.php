<?php

namespace App\Imports;

use App\Models\Corporation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportCorporation implements ToModel, WithHeadingRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Corporation([
            'name'     => $row['name'],
            'adress'   => $row['adress'],
        ]);

    }
    public function rules(): array
    {
        return [
            'name' => 'unique:corporations',
            'adress' => 'unique:corporations'
        ];
    }

    public function customValidationMessages()
    {
     return [
         
         'adress.unique' => 'email should be unique',
     ];
    }
}
