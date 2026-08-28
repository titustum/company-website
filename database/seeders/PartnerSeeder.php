<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Seed the application's partners.
     */
    public function run(): void
    {
        $partners = [
            [
                'name' => 'ICT Authority',
                'image' => 'https://southendtech.co.ke/media/partner/ictalogo3_xaEKsaX.png',
                'sort_order' => 1,
                'is_published' => true,
            ],
            [
                'name' => 'Kaspersky',
                'image' => 'https://southendtech.co.ke/media/partner/kasperky-managed_PTWyPIQ.png',
                'sort_order' => 2,
                'is_published' => true,
            ],
            [
                'name' => 'Bitdefender',
                'image' => 'https://southendtech.co.ke/media/partner/bitdefender-blue-logo-png_5sOzGcb.webp',
                'sort_order' => 3,
                'is_published' => true,
            ],
            [
                'name' => 'K7 Security',
                'image' => 'https://southendtech.co.ke/media/partner/K7_Security_Rectangle_Logo_boxpQoP.png',
                'sort_order' => 4,
                'is_published' => true,
            ],
            [
                'name' => 'Ndovu',
                'image' => 'https://southendtech.co.ke/media/partner/ndovu-logo_0CsMugn.png',
                'sort_order' => 5,
                'is_published' => true,
            ],
            [
                'name' => 'Fortinet',
                'image' => 'https://southendtech.co.ke/media/partner/fortigate-firewall_YZ6tSWN.webp',
                'sort_order' => 6,
                'is_published' => true,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(
                ['name' => $partner['name']],
                $partner
            );
        }
    }
}
