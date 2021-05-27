<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ALSExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'Nama',
            'NIM',
            'Kampus',
            'Jurusan',
            'No HP',
            'Line ID',
            'Jenis kelamin',
            'Alamat',
            'Domisili',
            'Tempat lahir',
            'Tanggal lahir',
            'Batch FYP'
        ];
    }

    public function collection()
    {
        return User::select('name', 'nim', 'campus', 'major', 'phone_number', 'line_id', 'gender', 'address', 'city', 'place_of_birth', 'date_of_birth', 'fyp_batch')->where('campus','=','AlamSutera')->get();
    }
}
