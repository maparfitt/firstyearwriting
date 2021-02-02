<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'section' => $row[0],
            'fname' => $row[1],
            'lname' => $row[2],
            'middle' => $row[3],
            'goesBy' => $row[4],
            'BUID' => $row[5],
            'email' => $row[6],
            'lfa' => $row[7],
            'phone' => $row[8],
            'accommodations' => $row[9],
            'achieve' => $row[10],
        ]);
    }
}
