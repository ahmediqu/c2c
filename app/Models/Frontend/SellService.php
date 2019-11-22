<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class SellService extends Model
{
    public function category(){
    	return $this->hasOne(Category::class);
    }
}
