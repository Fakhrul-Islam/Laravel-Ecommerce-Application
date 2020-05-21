<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{

    protected $fillable = ['key','value'];

    //create getter to get value
    public static function get($key)
    {
    	$entry = Settings::where('key',$key)->first();

    	if( !$entry )
    	{
    		return 'Key is not available';
    	}
    	return $entry->value;
    }

    //Set setter to put value to setting key
    public static function set($key, $value = '')
    {
    	$entry = Settings::where('key',$key)->firstOrFail();
    	$entry->value = $value;
    	$entry->save();
    	Config::set('key', $value);
	    if (Config::get($key) == $value) {
	        return true;
	    }
	    return false;
    }
}
