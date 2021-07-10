<?php

namespace Database\Seeders;

use App\Models\Promotion;
use App\Models\PromotionFeature;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotions = [
            [
                'title' => 'Premium Listing',
                'price' => 250,

                'features' => [
                    'All ICO updates will be revised and processed within 24 hour',
                    'Audit service',
                    'Expert review on your profile'
                ]
            ],

            [
                'title' => 'Premium Deluxe',
                'price' => 1000,

                'features' => [
                    'All ICO updates will be revised and processed within 24 hour',
                    'Audit service',
                    'Expert review on your profile',
                    'Exclusive featuring at the main page during 30 days',
                    'Expert review on your profile'
                ]
            ],

            [
                'title' => 'Top Banner Ad',
                'price' => '-',

                'features' => [
                    'All ICO updates will be revised and processed within 24 hour',
                    'Audit service',
                    'Expert review on your profile',
                ]
            ],

            [
                'title' => 'Content publishing',
                'price' => 100,

                'features' => [
                    'Building your reputation and brand recognition',
                    'Gaining traction in the media'
                ]
            ],

            [
                'title' => 'Top Banner Ad',
                'price' => '-',

                'features' => [
                    'Full-width pencil banner ad pinned at the footer of all pages, including the Homepage during 30 days',
                    'Custom branded design, logo, messaging, and CTA',
                    'Direct link to your ICO\'s website'
                ]
            ],
        ];

        foreach ($promotions as $item) {
            $promotion = new Promotion();

            $promotion->title = $item['title'];
            $promotion->price = $item['price'];

            $promotion->save();

            foreach ($item['features'] as $featureItem) {
                $feature = new PromotionFeature();

                $feature->promotion_id = $promotion->id;
                $feature->feature = $featureItem;

                $feature->save();
            }
        }
    }
}
