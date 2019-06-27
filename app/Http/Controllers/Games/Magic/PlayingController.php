<?php
namespace App\Http\Controllers\Games\Magic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayingController extends Controller
{
    public function index()
    {
        abort(404);
    }

    public function guess(Request $request)
    {
        $dataView = array(
            'status'=>false,
        );
        $start_color = $request->input('start_color');//開始花色
        $start_digital = $request->input('start_digital');//開始數字
        $number = $request->input('number');//第幾張
        
        if($start_color != null && $start_digital != null && $number != null){
            //花色
            $color = array(
                '0'=>'黑桃',
                '1'=>'紅心',
                '2'=>'方塊',
                '3'=>'梅花'
            );
            $digital = array(
                '0'=>'A',
                '1'=>'4',
                '2'=>'7',
                '3'=>'10',
                '4'=>'K',
                '5'=>'3',
                '6'=>'6',
                '7'=>'9',
                '8'=>'Q',
                '9'=>'2',
                '10'=>'5',
                '11'=>'8',
                '12'=>'J',
            );
            
            $aims_color = ( $number + $start_color ) % 4;
            $aims_digital = ( $number + $start_digital ) % 13;
            
            $dataView['status'] = true;
            $dataView['start_color'] = $color[$start_color];
            $dataView['start_digital'] = $digital[$start_digital];
            $dataView['number'] = $number;
            $dataView['aims_color'] = $color[$aims_color];
            $dataView['aims_digital'] = $digital[$aims_digital];
            //echo sprintf('原始牌%s%s的第%s張目標牌%s%s', $color[$start_color], $digital[$start_digital], $number, $color[$aims_color], $digital[$aims_digital]);
        }
        
        return view('games.magic.guess', $dataView);
    }
}