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
}
