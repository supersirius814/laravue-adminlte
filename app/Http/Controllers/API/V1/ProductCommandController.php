<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\ProductCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductCommandController extends Controller
{

    protected $productCommand = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductCommand $productCommand)
    {
        $this->middleware('auth:api');
        $this->productCommand = $productCommand;
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $qb = ProductCommand::get();
        // return $this->sendResponse($qb, 'ProductCommand list');

        return response($qb);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {   
        $currentDate = $request->input('currentDate');
        $qb = ProductCommand::select('handover_date','item_code', 'production_time_code', 'production_num_user', 'production_num_serve')
        ->whereRaw("DATE_FORMAT(handover_date,'%Y/%m/%d') = '$currentDate'");
        $flg = $qb;
        if($flg->get()->isEmpty()) return;
        if($id == 'first'){
            $qb->where('production_time_code', '>=', '10')
            ->where('production_time_code', '<', '14')->orderBy('item_code');
            $item_codes = $qb->pluck('item_code');
            $time_codes = $qb->pluck('production_time_code');
            $num_user = $qb->pluck('production_num_user');
            $num_serve = $qb->pluck('production_num_serve');

            for($i = 0; $i < count($item_codes); $i ++){
                if($time_codes[$i] == 10){
                    if(isset($data[$item_codes[$i]]['ten']['user'])){
                        $data[$item_codes[$i]]['ten']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['ten']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['ten']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['ten']['serve'] = $num_serve[$i];
                    }
                } elseif ($time_codes[$i] == 11) {
                    if(isset($data[$item_codes[$i]]['eleven']['user'])){
                        $data[$item_codes[$i]]['eleven']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['eleven']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['eleven']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['eleven']['serve'] = $num_serve[$i];
                    }
                } else if($time_codes[$i] == 12) {
                    if(isset($data[$item_codes[$i]]['twelve']['user'])){
                        $data[$item_codes[$i]]['twelve']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['twelve']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['twelve']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['twelve']['serve'] = $num_serve[$i];
                    }
                } else if($time_codes[$i] == 13){
                    if(isset($data[$item_codes[$i]]['thirteen']['user'])){
                        $data[$item_codes[$i]]['thirteen']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['thirteen']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['thirteen']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['thirteen']['serve'] = $num_serve[$i];
                    }
                }
            }
        } else if($id == 'second') {
            $qb->where('production_time_code', '>=', '14')
                ->where('production_time_code', '<', '18')->orderBy('item_code');
                
            $item_codes = $qb->pluck('item_code');
            $time_codes = $qb->pluck('production_time_code');
            $num_user = $qb->pluck('production_num_user');
            $num_serve = $qb->pluck('production_num_serve');

            for($i = 0; $i < count($item_codes); $i ++){
                if($time_codes[$i] == 14){
                    if(isset($data[$item_codes[$i]]['time14']['user'])){
                        $data[$item_codes[$i]]['time14']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['time14']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['time14']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['time14']['serve'] = $num_serve[$i];
                    }
                } elseif ($time_codes[$i] == 15) {
                    if(isset($data[$item_codes[$i]]['time15']['user'])){
                        $data[$item_codes[$i]]['time15']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['time15']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['time15']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['time15']['serve'] = $num_serve[$i];
                    }
                } else if($time_codes[$i] == 16) {
                    if(isset($data[$item_codes[$i]]['time16']['user'])){
                        $data[$item_codes[$i]]['time16']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['time16']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['time16']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['time16']['serve'] = $num_serve[$i];
                    }
                } else if($time_codes[$i] == 17){
                    if(isset($data[$item_codes[$i]]['time17']['user'])){
                        $data[$item_codes[$i]]['time17']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['time17']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['time17']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['time17']['serve'] = $num_serve[$i];
                    }
                }
            }

        } else if($id == 'third') {
            $qb->where('production_time_code', '>=', '18')
                ->where('production_time_code', '<', '22')->orderBy('item_code');

            $item_codes = $qb->pluck('item_code');
            $time_codes = $qb->pluck('production_time_code');
            $num_user = $qb->pluck('production_num_user');
            $num_serve = $qb->pluck('production_num_serve');

            for($i = 0; $i < count($item_codes); $i ++){
                if($time_codes[$i] == 18){
                    if(isset($data[$item_codes[$i]]['time18']['user'])){
                        $data[$item_codes[$i]]['time18']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['time18']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['time18']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['time18']['serve'] = $num_serve[$i];
                    }
                } elseif ($time_codes[$i] == 19) {
                    if(isset($data[$item_codes[$i]]['time19']['user'])){
                        $data[$item_codes[$i]]['time19']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['time19']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['time19']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['time19']['serve'] = $num_serve[$i];
                    }
                } else if($time_codes[$i] == 20) {
                    if(isset($data[$item_codes[$i]]['time20']['user'])){
                        $data[$item_codes[$i]]['time20']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['time20']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['time20']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['time20']['serve'] = $num_serve[$i];
                    }
                } else if($time_codes[$i] == 21){
                    if(isset($data[$item_codes[$i]]['time21']['user'])){
                        $data[$item_codes[$i]]['time21']['user'] += $num_user[$i];
                        $data[$item_codes[$i]]['time21']['serve'] += $num_serve[$i];
                    } else{
                        $data[$item_codes[$i]]['time21']['user'] = $num_user[$i];
                        $data[$item_codes[$i]]['time21']['serve'] = $num_serve[$i];
                    }
                }
            }
        } else if($id == 'fourth'){
            $qb->where('production_time_code', '>=', '22')
                ->where('production_time_code', '<=', '24')->orderBy('item_code');

                $item_codes = $qb->pluck('item_code');
                $time_codes = $qb->pluck('production_time_code');
                $num_user = $qb->pluck('production_num_user');
                $num_serve = $qb->pluck('production_num_serve');
    
                for($i = 0; $i < count($item_codes); $i ++){
                    if($time_codes[$i] == 22){
                        if(isset($data[$item_codes[$i]]['time22']['user'])){
                            $data[$item_codes[$i]]['time22']['user'] += $num_user[$i];
                            $data[$item_codes[$i]]['time22']['serve'] += $num_serve[$i];
                        } else{
                            $data[$item_codes[$i]]['time22']['user'] = $num_user[$i];
                            $data[$item_codes[$i]]['time22']['serve'] = $num_serve[$i];
                        }
                    } elseif ($time_codes[$i] == 23) {
                        if(isset($data[$item_codes[$i]]['time23']['user'])){
                            $data[$item_codes[$i]]['time23']['user'] += $num_user[$i];
                            $data[$item_codes[$i]]['time23']['serve'] += $num_serve[$i];
                        } else{
                            $data[$item_codes[$i]]['time23']['user'] = $num_user[$i];
                            $data[$item_codes[$i]]['time23']['serve'] = $num_serve[$i];
                        }
                    } else if($time_codes[$i] == 24) {
                        if(isset($data[$item_codes[$i]]['time24']['user'])){
                            $data[$item_codes[$i]]['time24']['user'] += $num_user[$i];
                            $data[$item_codes[$i]]['time24']['serve'] += $num_serve[$i];
                        } else{
                            $data[$item_codes[$i]]['time24']['user'] = $num_user[$i];
                            $data[$item_codes[$i]]['time24']['serve'] = $num_serve[$i];
                        }
                    } else if($time_codes[$i] == 5){
                        if(isset($data[$item_codes[$i]]['time5']['user'])){
                            $data[$item_codes[$i]]['time5']['user'] += $num_user[$i];
                            $data[$item_codes[$i]]['time5']['serve'] += $num_serve[$i];
                        } else{
                            $data[$item_codes[$i]]['time5']['user'] = $num_user[$i];
                            $data[$item_codes[$i]]['time5']['serve'] = $num_serve[$i];
                        }
                    }
                }
        }

        if(!isset($data)) return;

        $key = 0;
        $data_rlt = [];
        foreach($data as $index => $item){
            array_push($data_rlt, $item);
            $data_rlt[$key]['pcommand'] = $index;
            $key ++;
        }
        return response($data_rlt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pcommand)
    {
        // var_export($request->input('rltNum'));
        //
        if($request->input('timeSign') == 'ten') $timeSign = 10;
        if($request->input('timeSign') == 'eleven') $timeSign = 11;
        if($request->input('timeSign') == 'twelve') $timeSign = 12;
        if($request->input('timeSign') == 'thirteen') $timeSign = 13;
        if($request->input('timeSign') == 'time14') $timeSign = 14;
        if($request->input('timeSign') == 'time15') $timeSign = 15;
        if($request->input('timeSign') == 'time16') $timeSign = 16;
        if($request->input('timeSign') == 'time17') $timeSign = 17;
        if($request->input('timeSign') == 'time18') $timeSign = 18;
        if($request->input('timeSign') == 'time19') $timeSign = 19;
        if($request->input('timeSign') == 'time20') $timeSign = 20;
        if($request->input('timeSign') == 'time21') $timeSign = 21;
        if($request->input('timeSign') == 'time22') $timeSign = 22;
        if($request->input('timeSign') == 'time23') $timeSign = 23;
        if($request->input('timeSign') == 'time24') $timeSign = 24;
        if($request->input('timeSign') == 'time5') $timeSign = 5;

        $currentDate = $request->input('currentDate');

        $qb = ProductCommand::where('item_code', $pcommand)
            ->where('production_time_code', $timeSign)
            ->whereRaw("DATE_FORMAT(handover_date,'%Y/%m/%d') = '$currentDate'")
            ->update([
            'production_num_user' => $request->input('rltNum'),
        ]);
        return response($qb);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
