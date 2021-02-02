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
            'Section' => $row[0],
            'Last' => $row[1],
            'First' => $row[2],
            'Middle' => $row[3],
            'Goesby' => $row[4],
            'StudentID' => $row[5],
            'Email' => $row[6],
            'Lfa' => $row[7],
            'Phone' => $row[8],
            'Accommodations' => $row[9],
            'Achieve' => $row[10],
        ]);
    }
}
