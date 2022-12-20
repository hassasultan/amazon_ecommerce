<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $Fillable = [
        "slug",
        "category_id",
        "subcat_id",
        "title",
        "IsFeature",
        "fea_img",
        "description",
        "old_price",
        "new_price",
        "discount",
        "link",
        "status",
    ];
    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

}
