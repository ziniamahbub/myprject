<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Mdl_supplier extends Model
{
	protected $table	= 'inv_supplier';
	//protected $hidden 	= [];
	//protected $guarded 	= [];
	//protected $dates 	= ['deleted_at'];
	//public $timestamps 	= true;

	/*public static function boot() {
        parent::boot();

        static::saving(function($model){
            foreach ($model->attributes as $key => $value) {
                if($value !== 0) {
                $model->{$key} = empty($value) ? null : $value;
                }
            }
        });
    }*/	
	
	
	/*protected $fillable = [
        'location'
    ];*/
}
