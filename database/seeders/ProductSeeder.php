<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name1'=>'Redmi Note 9 Pro Max',
                'product_new_price'=>'16999',
                'product_old_price'=>'17999',
                'product_image1'=>'redmi_note_9_pro_max1.jpg',
                'product_image2'=>'redmi_note_9_pro_max2.jpg',
                'product_name2'=>'Redmi Note 9 Pro Max (Glacier White, 64 GB) (6 GB RAM)',
                'description'=>'64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.',
                'highlights1'=>'6 GB RAM | 64 GB ROM',
                'highlights2'=>'16.94 Cm (6.67 Inch) Display',
                'highlights3'=>'64MP Rear Camera',
                'highlights4'=>'5020 MAh Battery'
            ],
            [
                'product_name1'=>'Realme Narzo 10A',
                'product_new_price'=>'8999',
                'product_old_price'=>'9999',
                'product_image1'=>'realme-narzo-10a-1.jpg',
                'product_image2'=>'realme-narzo-10a-2.jpg',
                'product_name2'=>'Realme Narzo 10A (Blue, 32 GB) (3 GB RAM)',
                'description'=>'Realme Narzo 10A Features A Massive 5000-MAh Battery. This Phone Comes With Reverse Charging, And Can Even Be Used As A Power Bank To Charge Other Devices. Large 16.5-Cm (6.5) HD+ Mini-Drop Fullscreen Offers A Large Field Of Vision, Ensuring That You Get An Immersive Visual Experience.',
                'highlights1'=>'3 GB RAM | 32 GB ROM',
                'highlights2'=>'16.56 Cm (6.52 Inch) HD+ Display',
                'highlights3'=>'12MP + 2MP + 2MP | 5MP Front Camera',
                'highlights4'=>'5000 MAh Lithium-Ion Battery'
            ],
            [
                'product_name1'=>'OPPO A5 2020',
                'product_new_price'=>'11499',
                'product_old_price'=>'12499',
                'product_image1'=>'oppo_a5_2020_1.jpg',
                'product_image2'=>'oppo_a5_2020_2.jpg',
                'product_name2'=>'OPPO A5 2020 (Mirror Black, 64 GB) (3 GB RAM)',
                'description'=>'A Phone That Offers Style And Durability - The Oppo A5 2020 Is An Ergonomically Designed Phone That Is Loaded With Features. You Can Click Spectacular Pictures With The 12 MP Rear Camera And The Ultra Wide 119° Rear Lens. Click Cute Selfies Whenever You Feel Like With The 8 MP Front Camera.',
                'highlights1'=>'3 GB RAM | 64 GB ROM',
                'highlights2'=>'16.51 Cm (6.5 Inch) Display',
                'highlights3'=>'12MP + 8MP + 2MP + 2MP | 8MP Front Camera',
                'highlights4'=>'5000 MAh Battery'
            ],
            [
                'product_name1'=>'Apple IPhone 11 Pro Max',
                'product_new_price'=>'114400',
                'product_old_price'=>'115400',
                'product_image1'=>'iphone-11-pro-max1.jpg',
                'product_image2'=>'iphone-11-pro-max2.jpg',
                'product_name2'=>'Apple IPhone 11 Pro Max (Space Grey, 64 GB)',
                'description'=>'A Phone That Offers Style And Durability - The Apple IPhone 11 Pro Max Is An Ergonomically Designed Phone That Is Loaded With Features. You Can Click Spectacular Pictures With The 12 MP Rear Camera And The Ultra Wide 119° Rear Lens. Click Cute Selfies Whenever You Feel Like With The 8 MP Front Camera.',
                'highlights1'=>'64 GB ROM',
                'highlights2'=>'16.51 Cm (6.5 Inch) Super Retina XDR Display',
                'highlights3'=>'12MP + 12MP + 12MP | 12MP Front Camera',
                'highlights4'=>'A13 Bionic Chip Processor'
            ],
            [
                'product_name1'=>'Samsung Galaxy M31',
                'product_new_price'=>'18999',
                'product_old_price'=>'19999',
                'product_image1'=>'samsung-galaxy-m31-1.jpg',
                'product_image2'=>'samsung-galaxy-m31-2.jpg',
                'product_name2'=>'Samsung Galaxy M31 (Ocean Blue, 64 GB) (6 GB RAM)',
                'description'=>'64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.',
                'highlights1'=>'6 GB RAM | 64 GB ROM',
                'highlights2'=>'16.94 Cm (6.67 Inch) Display',
                'highlights3'=>'64MP Rear Camera',
                'highlights4'=>'5020 MAh Battery'
            ],
            [
                'product_name1'=>'Realme C15',
                'product_new_price'=>'9999',
                'product_old_price'=>'10999',
                'product_image1'=>'realme-c15-1.jpg',
                'product_image2'=>'realme-c15-2.jpg',
                'product_name2'=>'Realme C15 (Blue, 64 GB) (6 GB RAM)',
                'description'=>'64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.',
                'highlights1'=>'6 GB RAM | 64 GB ROM',
                'highlights2'=>'16.94 Cm (6.67 Inch) Display',
                'highlights3'=>'64MP Rear Camera',
                'highlights4'=>'5020 MAh Battery'
            ],
            [
                'product_name1'=>'Redmi K20 Pro',
                'product_new_price'=>'24999',
                'product_old_price'=>'25999',
                'product_image1'=>'redmi-k20-pro-1.jpg',
                'product_image2'=>'redmi-k20-pro-2.jpg',
                'product_name2'=>'Redmi K20 Pro (64 GB ROM) (6 GB RAM)',
                'description'=>'64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.',
                'highlights1'=>'6 GB RAM | 64 GB ROM',
                'highlights2'=>'16.94 Cm (6.67 Inch) Display',
                'highlights3'=>'64MP Rear Camera',
                'highlights4'=>'5020 MAh Battery'
            ],
            [
                'product_name1'=>'Honor 9X',
                'product_new_price'=>'16999',
                'product_old_price'=>'17999',
                'product_image1'=>'honor-9x-1.jpg',
                'product_image2'=>'honor-9x-2.jpg',
                'product_name2'=>'Honor 9X (64 GB ROM) (6 GB RAM)',
                'description'=>'64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.',
                'highlights1'=>'6 GB RAM | 64 GB ROM',
                'highlights2'=>'16.94 Cm (6.67 Inch) Display',
                'highlights3'=>'64MP Rear Camera',
                'highlights4'=>'5020 MAh Battery'
            ],
            [
                'product_name1'=>'Redmi Note 9 Pro',
                'product_new_price'=>'13999',
                'product_old_price'=>'14999',
                'product_image1'=>'redmi-note-9-pro-1.jpg',
                'product_image2'=>'redmi-note-9-pro-2.jpg',
                'product_name2'=>'Redmi Note 9 Pro (64 GB ROM) (6 GB RAM)',
                'description'=>'64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.',
                'highlights1'=>'6 GB RAM | 64 GB ROM',
                'highlights2'=>'16.94 Cm (6.67 Inch) Display',
                'highlights3'=>'64MP Rear Camera',
                'highlights4'=>'5020 MAh Battery'
            ],
            [
                'product_name1'=>'Realme Narzo 10',
                'product_new_price'=>'11999',
                'product_old_price'=>'12999',
                'product_image1'=>'realme-narzo-10-1.jpg',
                'product_image2'=>'realme-narzo-10-2.jpg',
                'product_name2'=>'Redmi Narzo 10 (64 GB ROM) (6 GB RAM)',
                'description'=>'64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.',
                'highlights1'=>'6 GB RAM | 64 GB ROM',
                'highlights2'=>'16.94 Cm (6.67 Inch) Display',
                'highlights3'=>'64MP Rear Camera',
                'highlights4'=>'5020 MAh Battery'
            ],
            [
                'product_name1'=>'Samsung Galaxy A21s',
                'product_new_price'=>'14999',
                'product_old_price'=>'15999',
                'product_image1'=>'samsung-galaxy-a21s-1.jpg',
                'product_image2'=>'samsung-galaxy-a21s-2.jpg',
                'product_name2'=>'Samsung Galaxy A21s (64 GB ROM) (6 GB RAM)',
                'description'=>'64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.',
                'highlights1'=>'6 GB RAM | 64 GB ROM',
                'highlights2'=>'16.94 Cm (6.67 Inch) Display',
                'highlights3'=>'64MP Rear Camera',
                'highlights4'=>'5020 MAh Battery'
            ],
            [
                'product_name1'=>'Oppo A5s',
                'product_new_price'=>'10990',
                'product_old_price'=>'11990',
                'product_image1'=>'oppo-a5s-1.jpg',
                'product_image2'=>'oppo-a5s-2.jpg',
                'product_name2'=>'Oppo A5s (64 GB ROM) (6 GB RAM)',
                'description'=>'64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.',
                'highlights1'=>'6 GB RAM | 64 GB ROM',
                'highlights2'=>'16.94 Cm (6.67 Inch) Display',
                'highlights3'=>'64MP Rear Camera',
                'highlights4'=>'5020 MAh Battery'
            ]
        ]);
    }
}
