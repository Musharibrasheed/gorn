<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SiteSettingsRequest;
use App\Models\Repositories\SiteSettingRepository;
use App\Models\Languages;
use Illuminate\Support\Str;
use File;

class SiteSettingController extends Controller
{
    protected $site_setting;

    public function __construct(SiteSettingRepository $site_setting)
    {
        $this->site_setting = $site_setting;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        // $languages = Languages::where('status','Active')->get();
        $site_setting =  $this->site_setting->getByCol(1);
        return View('admin.site_setting.index',compact('site_setting'));
    }

    /**
     * Process the Form Data.
     *$
     * @return redirect
     */
    public function process(SiteSettingsRequest $request)
    {
        $site_settings =  $this->site_setting->getByCol(1);

        $data = array();
        foreach($request->all() as $key=>$val)
        {
            if($val != "" && $key != "_token" && $key != "logo" && $key != "footer_logo" && $key != 'popup_logo') {
                $data[$key] = $val;
            } elseif($key == "logo" || $key == "footer_logo" || $key == "popup_logo" ) {
                $data[$key] = str_replace('//', '/',  str_replace(url('/'),'',$val));
            }
                
        }
        // exit;
        $data['site_title'] = serialize( array('site_title'=>$data['site_title']));

        // print_b($data);
        // exit;

        $this->site_setting->update(1,$data);
        return back()->withSuccess(trans('admin/site_settings.success'));
    }
}
