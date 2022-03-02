<?php

namespace App\Imports;

use App\Models\contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ContactImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
            return new contact([
                
                    'number' => $row['number'],
                    'firstname' => $row['firstname'],
                    'lastname' => $row['lastname'],
                    'email' => $row['email'],
                    'state' => $row['state'],
                    'zip' => $row['zip']
                ]);
    
           
       
                       
    }
}
