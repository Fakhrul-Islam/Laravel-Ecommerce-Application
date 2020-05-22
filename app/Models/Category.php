<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['name','slug','description','parent_id','featured','menu','image',];


    //Add Mutator
    public function setNameAttribute($name)
    {
    	 $this->attributes['name'] = $name;
    	$this->attributes['slug'] = Str::slug($value);
    }

    //Child and Parent Relation
    public function parent()
    {
    	return $this->belongsTo(Category::class, 'parent_id');
    }

    //Parent and Child Relation
    public function children()
    {
    	return $this->hasMany(Category::class, 'parent_id');
    }
}
