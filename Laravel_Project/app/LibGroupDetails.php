<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibGroupDetails extends Model
{
    protected $table="lib_group_details";
	protected $fillable=['group_name','group_name_local','contact_number','contact_person','website','country','address','email','status','remarks'];
	
}
