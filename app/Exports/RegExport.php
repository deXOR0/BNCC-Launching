<?php

namespace App\Exports;

use App\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'bncc_id', 
            'nim',
            'name',
            'place_of_birth',
            'date_of_birth',
            'gender',
            'email',
            'phone_number',
            'line_id',
            'github_id',
            'linkedin_id',
            'campus',
            'lnt_subject',
        ];
    }

    public function collection()
    {
        return Member::select('bncc_id', 
        'nim',
        'name',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'email',
        'phone_number',
        'line_id',
        'github_id',
        'linkedin_id',
        'campus',
        'lnt_subject')->get();
    }
}
