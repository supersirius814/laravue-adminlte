<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\ProductCommand;
use Illuminate\Http\Request;


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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if($id == 'first'){
            $qb = ProductCommand::select('item_code', 'production_time_code', 'production_num_user', 'production_num_serve')->where('production_time_code', '>=', '10')
                ->where('production_time_code', '<', '14')->orderBy('item_code');
            $item_codes = $qb->pluck('item_code');
            $time_codes = $qb->pluck('production_time_code');
            $num_user = $qb->pluck('production_num_user');
            $num_serve = $qb->pluck('production_num_serve');

            // $data = [];


            // for($i = 0; $i < count($item_codes); $i ++){
            //     if($time_codes[$i] == 10){
            //         if(isset($data[$item_codes[$i]]['ten']['user'])){
            //             $data[$item_codes[$i]]['ten']['user'] += $num_user[$i];
            //             $data[$item_codes[$i]]['ten']['user'] = $num_serve[$i];
            //         } else{
            //             $data[$item_codes[$i]]['ten']['user'] = $num_user[$i];
            //             $data[$item_codes[$i]]['ten']['user'] = $num_serve[$i];
            //         }
                    
            //         $data[$item_codes[$i]] += $num_serve[$i];
            //     } elseif($item_codes[$i] == 11){
            //         $data[$item_codes[$i]]['user'] += $num_user[$i];
            //         $data[$item_codes[$i]]['serve'] += $num_serve[$i];                    
            //     } elseif($time_codes[$i] == 12){
            //         $data[$item_codes[$i]]['twelve']['user'] += $num_user[$i];
            //         $data[$item_codes[$i]]['twelve']['serve'] += $num_serve[$i];
            //     } else if($time_codes[$i] == 13){
            //         $data[$item_codes[$i]]['thirteen']['user'] += $num_user[$i];
            //         $data[$item_codes[$i]]['thirteen']['serve'] += $num_serve[$i];
            //     }
            // }

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
            // var_export(count($data)); die;
            // var_export(count($data));12
            $key = 0;
            $data_rlt = [];
            foreach($data as $index => $item){
                // echo $key."==========".$index."\n";
                array_push($data_rlt, $item);
                $data_rlt[$key]['pcommand'] = $index;
                
                // $data_rlt[$key]['pcommand'] = $item;
                $key ++;
            }
            // echo $key;
            // var_export($data_rlt); die;
            // foreach($data as $item){
            //     var_export($item);
            // }
        } else if($id == 'second') {
            $qb = ProductCommand::where('production_time_code', '>=', '14')
                ->where('production_time_code', '<', '18');
        } else if($id == 'third') {
            $qb = ProductCommand::where('production_time_code', '>=', '18')
                ->where('production_time_code', '<', '22');
        } else if($id == 'fourth'){
            $qb = ProductCommand::where('production_time_code', '>=', '22')
                ->where('production_time_code', '<=', '24');
        }

        // return response($qb->orderBy('item_code')->get());
        // $dd[0] = $data;
        return response($data_rlt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $take_productions_id)
    {
        // var_export($request->input('rltNum'));
        //
        $qb = ProductCommand::where('take_productions_id', $take_productions_id)->update([
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
