<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // === Processor ===
            ['Ryzen 5 5600', 'AMD', 'Processor', 2050000],
            ['Ryzen 7 5800X', 'AMD', 'Processor', 3400000],
            ['Ryzen 9 5900X', 'AMD', 'Processor', 5200000],
            ['Ryzen 5 7600', 'AMD', 'Processor', 3100000],
            ['Core i3-12100F', 'Intel', 'Processor', 1600000],
            ['Core i5-12400F', 'Intel', 'Processor', 2500000],
            ['Core i7-12700K', 'Intel', 'Processor', 4700000],
            ['Core i9-12900K', 'Intel', 'Processor', 6500000],
            ['Ryzen 5 5500', 'AMD', 'Processor', 1700000],
            ['Core i5-13400F', 'Intel', 'Processor', 3200000],

            // === RAM ===
            ['Corsair Vengeance 16GB DDR4', 'Corsair', 'RAM', 900000],
            ['Corsair Vengeance 32GB DDR4', 'Corsair', 'RAM', 1600000],
            ['Kingston Fury 16GB DDR4', 'Kingston', 'RAM', 870000],
            ['Kingston Fury 32GB DDR4', 'Kingston', 'RAM', 1550000],
            ['Team T-Force Delta 16GB RGB', 'TeamGroup', 'RAM', 890000],
            ['G.Skill Ripjaws 16GB DDR4', 'G.Skill', 'RAM', 860000],
            ['Patriot Viper 16GB', 'Patriot', 'RAM', 850000],
            ['ADATA XPG 16GB RGB', 'ADATA', 'RAM', 880000],
            ['Lexar 16GB DDR4', 'Lexar', 'RAM', 830000],
            ['Silicon Power 16GB', 'Silicon Power', 'RAM', 820000],

            // === SSD ===
            ['Samsung 970 Evo Plus 500GB', 'Samsung', 'SSD', 1050000],
            ['WD Blue SN570 500GB', 'Western Digital', 'SSD', 880000],
            ['Kingston NV2 1TB', 'Kingston', 'SSD', 1250000],
            ['Crucial P3 1TB', 'Crucial', 'SSD', 1150000],
            ['ADATA XPG SX8200 Pro 1TB', 'ADATA', 'SSD', 1350000],
            ['Lexar NM620 512GB', 'Lexar', 'SSD', 950000],
            ['PNY CS1030 1TB', 'PNY', 'SSD', 1100000],
            ['Samsung 980 Pro 500GB', 'Samsung', 'SSD', 1300000],
            ['Kingston KC3000 1TB', 'Kingston', 'SSD', 1450000],
            ['WD Black SN770 1TB', 'Western Digital', 'SSD', 1400000],

            // === HDD ===
            ['Seagate Barracuda 1TB', 'Seagate', 'HDD', 600000],
            ['Seagate Barracuda 2TB', 'Seagate', 'HDD', 850000],
            ['WD Blue 1TB', 'Western Digital', 'HDD', 610000],
            ['WD Blue 2TB', 'Western Digital', 'HDD', 870000],
            ['Toshiba P300 1TB', 'Toshiba', 'HDD', 590000],
            ['Toshiba P300 2TB', 'Toshiba', 'HDD', 880000],
            ['WD Black 1TB', 'Western Digital', 'HDD', 700000],
            ['Seagate FireCuda 1TB', 'Seagate', 'HDD', 930000],
            ['Hitachi 1TB', 'Hitachi', 'HDD', 580000],
            ['HGST 1TB', 'HGST', 'HDD', 570000],

            // === Motherboard ===
            ['ASUS TUF B550M-Plus', 'ASUS', 'Motherboard', 1800000],
            ['MSI B550 Tomahawk', 'MSI', 'Motherboard', 2200000],
            ['Gigabyte B660M DS3H', 'Gigabyte', 'Motherboard', 1700000],
            ['ASRock B550M Steel Legend', 'ASRock', 'Motherboard', 1900000],
            ['ASUS Prime B450M-A', 'ASUS', 'Motherboard', 1400000],
            ['MSI MAG B660M Mortar', 'MSI', 'Motherboard', 2300000],
            ['Gigabyte B550 Gaming X', 'Gigabyte', 'Motherboard', 1750000],
            ['ASRock B660 Pro RS', 'ASRock', 'Motherboard', 2100000],
            ['ASUS ROG Strix B550-F', 'ASUS', 'Motherboard', 2400000],
            ['Gigabyte Z690 UD DDR4', 'Gigabyte', 'Motherboard', 2800000],

            // === GPU ===
            ['RTX 3060 12GB', 'NVIDIA', 'GPU', 4800000],
            ['RTX 4060 Ti 8GB', 'MSI', 'GPU', 5800000],
            ['RX 7600 8GB', 'AMD', 'GPU', 5000000],
            ['RTX 3070 8GB', 'Zotac', 'GPU', 6900000],
            ['RTX 4070 12GB', 'Gigabyte', 'GPU', 8100000],
            ['RX 6750 XT 12GB', 'Sapphire', 'GPU', 6300000],
            ['RTX 2060 6GB', 'ASUS', 'GPU', 4200000],
            ['GTX 1660 Super', 'MSI', 'GPU', 3600000],
            ['RTX 4080 16GB', 'ASUS', 'GPU', 16500000],
            ['RX 7800 XT 16GB', 'PowerColor', 'GPU', 8500000],

            // === PSU ===
            ['Corsair CV550 550W 80+ Bronze', 'Corsair', 'PSU', 750000],
            ['Seasonic S12III 550W', 'Seasonic', 'PSU', 800000],
            ['Cooler Master MWE 650W', 'Cooler Master', 'PSU', 850000],
            ['FSP Hydro K Pro 600W', 'FSP', 'PSU', 790000],
            ['Antec Atom B550 550W', 'Antec', 'PSU', 720000],
            ['Thermaltake Litepower 550W', 'Thermaltake', 'PSU', 760000],
            ['Corsair RM650x 650W Gold', 'Corsair', 'PSU', 1200000],
            ['Seasonic Focus GX-750 750W', 'Seasonic', 'PSU', 1450000],
            ['Cooler Master GX 650W Gold', 'Cooler Master', 'PSU', 1300000],
            ['ASUS TUF Gaming 750W Bronze', 'ASUS', 'PSU', 1150000],

            // === Casing ===
            ['NZXT H510 White', 'NZXT', 'Casing', 1200000],
            ['Lian Li LANCOOL 215', 'Lian Li', 'Casing', 1100000],
            ['Armaggeddon T3X', 'Armaggeddon', 'Casing', 700000],
            ['Corsair 4000D Airflow', 'Corsair', 'Casing', 1300000],
            ['Cooler Master NR400', 'Cooler Master', 'Casing', 950000],
            ['Montech Air 100', 'Montech', 'Casing', 850000],
            ['Fantech CG71', 'Fantech', 'Casing', 780000],
            ['Digital Alliance N10', 'DA', 'Casing', 820000],
            ['Thermaltake Versa H18', 'Thermaltake', 'Casing', 900000],
            ['InWin 101C', 'InWin', 'Casing', 1000000],

            // === Air Cooler ===
            ['Cooler Master Hyper 212 Black', 'Cooler Master', 'Air Cooler', 500000],
            ['Noctua NH-U12S Redux', 'Noctua', 'Air Cooler', 850000],
            ['DeepCool GAMMAXX 400 V2', 'DeepCool', 'Air Cooler', 450000],
            ['Thermaltake UX100 ARGB', 'Thermaltake', 'Air Cooler', 400000],
            ['ID-Cooling SE-224-XT', 'ID-Cooling', 'Air Cooler', 430000],
            ['Vetroo V5', 'Vetroo', 'Air Cooler', 470000],
            ['Be Quiet! Pure Rock 2', 'Be Quiet!', 'Air Cooler', 900000],
            ['Scythe Fuma 2 Rev B', 'Scythe', 'Air Cooler', 950000],
            ['SilverStone Hydrogon D120', 'SilverStone', 'Air Cooler', 880000],
            ['ARCTIC Freezer 34 eSports Duo', 'ARCTIC', 'Air Cooler', 890000],
        ];

        $data = [];

        foreach ($products as $item) {
            $data[] = [
                'product_name' => $item[0],
                'brand' => $item[1],
                'chategory' => $item[2],
                'price' => $item[3],
                'stock' => rand(5, 20),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('products')->insert($data);
    }
}
