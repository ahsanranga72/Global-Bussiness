<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('frontend.layouts.home');
    }

    public function globalbusiness(){
    	return view('frontend.pages.globalbusiness');
    }

    public function misionvision(){
    	return view('frontend.pages.misionvision');
    }

     public function sustainability(){
    	return view('frontend.pages.sustainability');
    }

    public function careers(){
    	return view('frontend.pages.careers');
    }

    public function contact(){
    	return view('frontend.pages.contact');
    }

    public function registration(){
    	return view('frontend.pages.registration');
    }

    public function storeregistration(Request $req){
        $data = new Registration;
        $data->company = $req->company;
        $data->mobile = $req->mobile;
        $data->Whatsapp = $req->Whatsapp;
        $data->project_name = $req->project_name;
        $data->location = $req->location;
        $data->service_res = $req->service_res;
        $data->tasf = $req->tasf;
        $data->totalcost = $req->totalcost;
        $data->costpersf = $req->costpersf;
        $data->save();
    }

    public function productlist(){
    	return view('frontend.pages.productlist');
    }

    public function service(){
    	return view('frontend.pages.service');
    }

    public function polishedconcrete(){
    	return view('frontend.pages.services.polishedconcrete');
    }

    public function puflooring(){
    	return view('frontend.pages.services.puflooring');
    }

    public function vinylflooring(){
    	return view('frontend.pages.services.vinylflooring');
    }

    public function epoxyflooring(){
    	return view('frontend.pages.services.epoxyflooring');
    }

    public function selflevelingepoxy(){
    	return view('frontend.pages.services.selflevelingepoxy');
    }

    public function metallicepoxyflooring(){
    	return view('frontend.pages.services.metallicepoxyflooring');
    }

    public function project(){
    	return view('frontend.pages.project');
    }


    public function fairfaceplaster(){
    	return view('frontend.pages.fairfaceplaster');
    }

    public function waterproofing(){
    	return view('frontend.pages.waterproofing');
    }




    public function constructionchemicals(){
    	return view('frontend.pages.constructionchemicals');
    }


    public function epoxyparkingflooring(){
    	return view('frontend.pages.services.epoxyparkingflooring');
    }
    

    public function companyprofile(){
    	return view('frontend.pages.services.companyprofile');
    }


    public function flooring(){
    	return view('frontend.pages.services.flooring');
    }


    public function concretewaterprofing(){
    	return view('frontend.pages.services.concretewaterprofing');
    }

    public function PAINTCOATING(){
    	return view('frontend.pages.services.PAINTCOATING');
    }

    public function epoxycoating(){
    	return view('frontend.pages.services.epoxycoating');
    }

    public function pucoating(){
    	return view('frontend.pages.services.pucoating');
    }

    public function repearing(){
    	return view('frontend.pages.services.repearing');
    }

    public function hetprofing(){
    	return view('frontend.pages.services.hetprofing');
    }

}
