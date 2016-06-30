<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;

class Statistics extends Model
{
	protected $table = 'statistics';
	public $timestamps = false;

	public function FunctionName($value='')
	{
		// $flights = $this::where('active', 1)
  //              ->orderBy('name', 'desc')
  //              ->take(10)
  //              ->get();
	}

    public static function getReports($request = 1)
    {
        
        $select_type = [
            1 => 'browser',
            2 => 'os', 
            3 => 'geo',
            4 => 'referrer'
        ]; 
        
        $colum = isset( $select_type[$request->type] ) ? $select_type[$request->type] : $select_type[1]; 
       
        $global =  DB::table('statistics')
                     ->select(DB::raw('count('.$colum.') as TypeCount, '.$colum.' as TypeName '))                     
                     ->groupBy($colum)
                     ->get();
        $current = DB::table('statistics')
                     ->select(DB::raw('count( page ) as TypeCount, page as TypeName '))                     
                     ->groupBy('page')
                     ->orderBy('TypeCount', 'DESC')
                     ->get();
        $IP = DB::table('statistics')
                     ->select(DB::raw('count( distinct ip ) as TypeCount, ip as TypeName '))                     
                     ->orderBy('id', 'DESC')
                     ->get();
        $coocie = DB::table('statistics')
                     ->select(DB::raw('count( distinct un_cookie ) as TypeCount, un_cookie as TypeName '))                     
                     ->orderBy('id', 'DESC')
                     ->get();
        return array('global'=>$global, 'current'=>$current, 'IP'=>$IP, 'coocie'=>$coocie);
        
    }
}
