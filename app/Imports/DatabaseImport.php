<?php

namespace App\Imports;

use App\DatabaseModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatabaseImport implements ToModel, WithHeadingRow
{
    // format date
    protected function formatDate($date)
    {
        $time = strtotime($date);

        $new  = date('Y-m-d', $time);

        return $new;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new DatabaseModel([
            'SeqNo'          => $row['seqno'],
            'NameStore'      => $row['store_name'],
            'SESSEP'         => $row['sessep'],
            'Dimension'      => $row['dimension'],
            'DimensionScore' => $row['dimension_score'],
            'Month'          => $this->formatDate($row['month']),
            'BranchCode'     => $row['branch_code'],
            'ARTI'           => $row['arti'],
            'ARCO'           => $row['arco'],
            'EROS'           => $row['eros'],
            'RSM'            => $row['rsm'],
            'ClusterSize'    => $row['cluster_size'],
            'Channel'        => $row['channel'],
            'GKAMRSM'        => $row['gkam_rsm'],
            'NamaASM'        => $row['nama_asm'],
            'ASMKAM'         => $row['asm_kam'],
            'Partner'        => $row['partner'],
            'Location'       => $row['location'],
            'City'           => $row['city'],
            'Region'         => $row['region'],
            // 'ASM'            => $row['ASM'],
            'PassingGrade'   => $row['passing_grade'],
            // 'CrtDate'        => $row['CrtDate'],
        ]);
    }
}