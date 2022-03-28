<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Mapper;
use App\Helpers\ValidatorHelper;
use App\Http\Controllers\Controller;
use App\Http\IRepositories\IContactRepository;
use App\Http\IRepositories\ISettingImageRepository;
use App\Http\IRepositories\ISettingRepository;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    //

    protected $settingRepository;
    protected $settingImageRepository;
    protected $contactRepository;
    protected $requestData;

    public function __construct(ISettingRepository $settingRepository,
                                ISettingImageRepository $settingImageRepository,
                                IContactRepository $contactRepository)
    {
        $this->settingRepository = $settingRepository;
        $this->settingImageRepository = $settingImageRepository;
        $this->contactRepository = $contactRepository;
        $this->requestData = Mapper::toUnderScore(\Request()->all());
        $this->middleware('permission:Setting');


    }

    public function index()
    {

        try {

            $settings = $this->settingRepository->getSettings();
            $images = $this->settingImageRepository->all();
            $contacts = $this->contactRepository->getContact();

//            dd($contacts);
            return view('admin.settings.list', compact('settings', 'contacts', 'images'));

        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    public function updateAbout(Request $request)
    {

        try {

            $data_info= $this->requestData;
            $about = $this->settingRepository->getSettings();

//            dd($request->file('logo'));

            $validator = Validator::make($data_info, $validator_rules = Setting::create_update_rules, ValidatorHelper::messages() );

            if($validator->passes()){

                if ($request->file('logo')) {
                    $img = $request->file('logo');
                    $name = "logoImage_" . time() . '_'.$img->getClientOriginalName();
                    $uploaded_file = $img->move(public_path('images/admin/logo/'), $name);
                    $path = '/images/admin/logo/' . $name;

                    $data_info['logo'] = $path;
                }

                if($about){
                    $model = $this->settingRepository->update($data_info,$about->id);

                }else{
                    $model = $this->settingRepository->create($data_info);

                }
                return redirect()->route('settings')->with('message', trans('settings/settings.about_updated_successfully') );

            }
            return redirect()->route('settings')->with('error', trans('general.Operation_Failed'));

        }catch (Exception $e){
            return redirect()->route('admin-settings')->with('error', $e->getMessage());

        }
    }


    public function updateContacts(Request $request)
    {

        try {
            $data_info= $this->requestData;
            $contact = $this->contactRepository->getContact();
//            dd($data_info);

            $mobile_phones = $data_info['mobiles'];
            $res_mobile =[];
            foreach ($mobile_phones as $phone ){

                if($phone['mobile_phone']){

                    $loc_mobile = $phone['mobile_phone'];

                    array_push($res_mobile, $loc_mobile);
                }
            }
            $data_info['mobile_phones'] = json_encode($res_mobile);


            $land_phones = $data_info['lands'];
            $res_land =[];
            foreach ($land_phones as $phone ){

                if($phone['land_phone']){

                    $loc_land = $phone['land_phone'];

                    array_push($res_land, $loc_land);
                }
            }
            $data_info['land_phones'] = json_encode($res_land);

//            dd($data_info);

            $validator = Validator::make($data_info, $validator_rules = Setting::create_update_rules, ValidatorHelper::messages() );

            if($validator->passes()){

                if($contact){
                    $model = $this->contactRepository->update($data_info,$contact->id);

                }else{
                    $model = $this->contactRepository->create($data_info);

                }
                return redirect()->route('settings')->with('message', trans('settings/settings.contacts_updated_successfully') );

            }
            return redirect()->route('settings')->with('error', trans('general.Operation_Failed'));

        }catch (Exception $e){
            return redirect()->route('admin-settings')->with('error', $e->getMessage());

        }
    }

    public function updateImages(Request $request)
    {

        try {

            //TODO
            return redirect()->route('settings')->with('message', trans('settings/settings.images_updated_successfully') );

        }catch (Exception $e){
            return redirect()->route('settings')->with('error', $e->getMessage());

        }
    }

}
