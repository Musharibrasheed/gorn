<?php
namespace App\Models\Repositories;
use App\Models\SiteSetting;
use App\Models\Languages;

class SiteSettingRepository  extends AbstractRepository
{
    /**
     * Creates a new model instance
     * @param App\Models\SiteSetting $site_setting
     *
     * @return void
     */
    public function __construct(
        SiteSetting $site_setting
    ) {
        $this->model    = $site_setting;
    }

    public function update($id=0,$data=array())
    {
        $getSetting = $this->model::find($id);

        if(!empty($data))
        {
            if($getSetting)
                $this->model->where('id',$id)->update($data);
            else
            {
                $data['id'] = $id;
                $this->model->insert($data);
            }
        }

        return true;
    }

   

}
