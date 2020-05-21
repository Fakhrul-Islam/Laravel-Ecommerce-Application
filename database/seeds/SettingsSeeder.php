<?php

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $settings = [
    			[
    				'key' 			=> 'site_name',
    				'value' 		=> 'Ecommerce App'
    			],
    			[
    				'key' 			=> 'site_title',
    				'value' 		=> 'E-Commerce'
    			],
    			[
    				'key' 			=> 'default_email_address',
    				'value' 		=> 'admin@ecommerce.com'
    			],
    			[
    				'key' 			=> 'currence_code',
    				'value' 		=> 'Taka'
    			],
    			[
    				'key' 			=> 'currence_symbol',
    				'value' 		=> 'taka'
    			],
    			[
    				'key' 			=> 'site_logo',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'footer_copyright_text',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'seo_meta_title',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'seo_meta_description',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'social_facebook',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'social_youtube',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'social_instagram',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'social_twitter',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'social_linkdin',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'google_analytics',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'stripe_payment_method',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'stripe_secret_key',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'paypal_payment_method',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'paypal_client_id',
    				'value' 		=> ''
    			],
    			[
    				'key' 			=> 'paypal_secret_id',
    				'value' 		=> ''
    			],

    ];


    public function run()
    {
        foreach( $this->settings as $key => $setting )
        {
        	$result = Settings::create($setting);
        	if(!$result)
        	{
        		return 'Faild to insert';
        	}
        }
    }
}
