<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Broker;
use App\Models\Property;
use Illuminate\Support\Facades\DB;
class BrokerController extends Controller
{
    public function BrokerAdd(){
        
       
        return view('Broker.BrokerAdd',['Property'=>Property::get()]);
    }
    public function BrokerStore(Request $request){
        $broker = new Broker;
        $broker->name = $request->name;
        $broker->mobile = $request->mobile;
        $broker->email = $request->email;
        $broker->experience = $request->experience;
        $broker->property = $request->property;
        $broker->commision = $request->commision;
        $broker->stutus = $request->status;
        $broker->save();
        return redirect('/home');

    }

    public function edit($id){
        $broker = Broker::where('id',$id)->first();
       return view('Broker.BrokerEdit',['Broker'=>$broker],['Property'=>Property::get()]);
    }

    public function update(Request $request, $id){
        $broker = Broker::where('id',$id)->first();

        $broker->name = $request->name;
        $broker->mobile = $request->mobile;
        $broker->email = $request->email;
        $broker->experience = $request->experience;
        $broker->property = $request->property;
        $broker->commision = $request->commision;
        $broker->stutus = $request->status;
        $broker->save();
        return redirect('/home');

    }

    public function PropertyAdd(){
        return view('Broker.property',['Property'=>Property::get()]);
    }
    public function PropertyStore(Request $request){
        $Property = new Property;
        $Property->name = $request->name;
        $Property->mobile = $request->mobile;
        $Property->email = $request->email;
        $Property->address = $request->address;
        $Property->city = $request->city;
        $Property->zipcode = $request->zipcode;
        $Property->koproperty = $request->koproperty;
        $Property->area = $request->area;
        $Property->valution =$request->valution;
        $Property->stutus=$request->status;
        $Property->save();
        return redirect('/home');

    }
    public function pedit($id){
        $property = Property::where('id',$id)->first();
       return view('Broker.PropertyEdit',['Property'=>$property]);
    }
    public function pupdate(Request $request, $id){
        $Property = Property::where('id',$id)->first();

        $Property->name = $request->name;
        $Property->mobile = $request->mobile;
        $Property->email = $request->email;
        $Property->address = $request->address;
        $Property->city = $request->city;
        $Property->zipcode = $request->zipcode;
        $Property->koproperty = $request->koproperty;
        $Property->area = $request->area;
        $Property->valution =$request->valution;
        $Property->stutus=$request->status;
        $Property->save();
        return redirect('/home');

    }
}
