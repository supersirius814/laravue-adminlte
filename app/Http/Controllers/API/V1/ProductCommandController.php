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
            $qb = ProductCommand::where('production_time_code', '>=', '10')
                ->where('production_time_code', '<', '14');
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

        return response($qb->get());
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
