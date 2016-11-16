<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Block extends Model
{

	protected $table = 'blocks';
	public function blocktype(){
		return $this->belongsTo('App\Blocktypes', 'block_type_id', 'id');
	}

	// calculate blocks per type
	public static function countBlocks($blockTypeId) {
		$blockCount = DB::table('blocks')
			->where('block_type_id', $blockTypeId)
			->sum('amount');
		return $blockCount;
	}
	
	public static function calculateSize($blockTypeId){
		$lengthsPerType = DB::table('blocks')
			->where('block_type_id', $blockTypeId)
			->pluck('length');

		$amountPerType = DB::table('blocks')
			->where('block_type_id', $blockTypeId)
			->sum('amount');

		$totalSize = 0;


		foreach ($lengthsPerType as $length) {
			$calculateSize = ($length * $amountPerType) * 1.030 * 1.29;

			$totalSize =+ $calculateSize;
		}

		return $totalSize;

	}

	public static function calculateSizePerLength($blockTypeId, $length){
		$amountPerLength = DB::table('blocks')
			->where('block_type_id', $blockTypeId)
			->where('length', $length)
			->sum('amount');


		$calculateSize = ($length * $amountPerLength) * 1.030 * 1.29;
		return $calculateSize;
	}
}
