<?php

namespace App\Models\Backend\Website;

use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    protected $fillable = ['company_name','company_logo','company_slogan','company_address1','company_address2','company_phone1','company_phone2','company_fb','company_twitter','company_linkendin','company_skype','company_youtube','company_email1','company_email2','visitor'];
}
