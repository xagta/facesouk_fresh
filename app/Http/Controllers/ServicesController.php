<?php
/**
 * Created by PhpStorm.
 * User: xagta
 * Date: 27/02/2019
 * Time: 13:34
 */

namespace App\Http\Controllers;


use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServicesController extends Controller
{


    public function index($category)
    {
      $services=Service::where('category',$category)->get();
    //    return json_encode($services);
        return view('services.index',['services'=>$services]) ;
    }

    public function serviceRequestCreate($service_id){

        $service= Service::find($service_id) ;

        return view('services.request',['service'=>$service]) ;
    }
    public function serviceRequestStore(Request $request){

        $input = $request->all();
        $req= ServiceRequest::create($input) ;

        $req->service()->associate(Service::find($req->service_id));

       return  json_encode($req);
       // return view('services.request',['service'=>$service]) ;
    }
}