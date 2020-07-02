<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatabaseModel extends Model
{
	protected $table    = 'database';
	protected $fillable = [
							'SeqNo',
					        'NameStore',
					        'SESSEP',
					        'Dimension',
					        'DimensionScore',
					        'Month',
					        'BranchCode',
					        'ARTI',
					        'ARCO',
					        'EROS',
					        'RSM',
					        'ClusterSize',
					        'Channel',
					        'GKAMRSM',
					        'NamaASM',
					        'ASMKAM',
					        'Partner',
					        'Location',
					        'ARDCityTI',
					        'Region',
					        'ASM',
					        'PassingGrade',
					        'CrtDate',
						];
}
