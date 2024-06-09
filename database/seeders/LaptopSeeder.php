<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laptop;
use GuzzleHttp\Client;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptops = [
            [
                'name' => 'LENOVO IdeaPad IP330-15ICH',
                'description' => 'Lenovo IdeaPad IP330-15ICH adalah laptop yang menawarkan kinerja yang solid dengan harga yang terjangkau. Dirancang untuk penggunaan sehari-hari dan produktivitas, laptop ini memiliki spesifikasi yang memadai untuk kebutuhan dasar hingga menengah.',
                'processor' => 'Intel Core i7-10750H 6-Core Processor (2.6GHz up to 5.0GHz, 12MB Cache)',
                'ram' => '16GB DDR4 2933MHz RAM (upgradable to 32GB)',
                'storage' => '512GB PCIe NVMe Solid State Drive (SSD)',
                'graphics' => 'NVIDIA GeForce RTX 3060 6GB GDDR6 Graphics',
                'display' => '15.6-inch FHD (1920 x 1080) IPS Display with 144Hz refresh rate',
                'operating_system' => 'Windows 10 Home 64-bit',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.0',
                'ports' => '3 x USB 3.2 Gen 1 Type-A, 1 x USB 3.2 Gen 2 Type-C with DisplayPort 1.4 and Power Delivery, 1 x HDMI 2.0, 1 x RJ-45 Ethernet Port, 1 x Audio Combo Jack',
                'battery' => '4-cell 70Wh Battery',
                'advantages' => 'Kinerja yang kuat dengan prosesor Intel Core i7 generasi ke-10 dan kartu grafis NVIDIA GeForce RTX 3060, cocok untuk multitasking, pemrosesan gambar, dan gaming ringan. Penyimpanan SSD NVMe yang cepat untuk mempercepat booting sistem dan loading aplikasi. Layar IPS dengan resolusi FHD dan refresh rate tinggi memberikan pengalaman visual yang jernih dan halus. Konektivitas Wi-Fi 6 dan Bluetooth 5.0 untuk konektivitas nirkabel yang stabil dan cepat.',
                'photo' => 'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGxhcHRvcHxlbnwwfDB8MHx8fDI%3D',
            ],
            [
                'name' => 'LENOVO IdeaPad Gaming 3i',
                'description' => 'Lenovo IdeaPad Gaming 3i adalah laptop gaming yang kuat dengan harga yang terjangkau. Dilengkapi dengan prosesor Intel Core i5 generasi ke-10 dan kartu grafis NVIDIA GTX 1650, laptop ini cocok untuk gaming ringan dan tugas produktivitas.',
                'processor' => 'Intel Core i5-10300H 4-Core Processor (2.5GHz up to 4.5GHz, 8MB Cache)',
                'ram' => '8GB DDR4 2933MHz RAM (upgradable to 16GB)',
                'storage' => '256GB PCIe NVMe Solid State Drive (SSD)',
                'graphics' => 'NVIDIA GeForce GTX 1650 4GB GDDR6 Graphics',
                'display' => '15.6-inch FHD (1920 x 1080) IPS Display with 120Hz refresh rate',
                'operating_system' => 'Windows 10 Home 64-bit',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.0',
                'ports' => '3 x USB 3.2 Gen 1 Type-A, 1 x USB 3.2 Gen 2 Type-C, 1 x HDMI 2.0, 1 x RJ-45 Ethernet Port, 1 x Audio Combo Jack',
                'battery' => '3-cell 45Wh Battery',
                'advantages' => 'Prosesor Intel Core i5 generasi ke-10 dan kartu grafis NVIDIA GTX 1650 memberikan kinerja yang solid untuk gaming ringan dan tugas produktivitas. Layar IPS dengan resolusi FHD dan refresh rate tinggi memberikan pengalaman visual yang jernih dan mulus. Konektivitas Wi-Fi 6 dan Bluetooth 5.0 memastikan koneksi nirkabel yang cepat dan stabil.',
                'photo' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGFwdG9wfGVufDB8MHwwfHx8Mg%3D%3D',
            ],
            [
                'name' => 'HP Pavilion 15',
                'description' => 'HP Pavilion 15 adalah laptop serbaguna dengan desain elegan dan kinerja handal untuk tugas sehari-hari.',
                'processor' => 'Intel Core i5-1135G7 4-Core Processor (2.4GHz up to 4.2GHz, 8MB Cache)',
                'ram' => '8GB DDR4 RAM',
                'storage' => '512GB PCIe NVMe Solid State Drive (SSD)',
                'graphics' => 'Intel Iris Xe Graphics',
                'display' => '15.6-inch FHD (1920 x 1080) IPS Display',
                'operating_system' => 'Windows 10 Home 64-bit',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.0',
                'ports' => '2 x USB 3.1 Gen 1, 1 x USB 3.1 Type-C, 1 x HDMI 2.0, 1 x Audio Combo Jack',
                'battery' => '3-cell 41Wh Battery',
                'advantages' => 'Kinerja yang andal dengan prosesor Intel Core i5 generasi ke-11 dan grafis Intel Iris Xe. Penyimpanan SSD NVMe yang cepat dan layar IPS dengan resolusi FHD memberikan pengalaman pengguna yang luar biasa.',
                'photo' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGFwdG9wfGVufDB8MHwwfHx8Mg%3D%3D',
            ],
            [
                'name' => 'Dell XPS 13',
                'description' => 'Dell XPS 13 adalah laptop ultraportable dengan layar 13.3-inch yang menakjubkan dan performa tinggi.',
                'processor' => 'Intel Core i7-1165G7 4-Core Processor (2.8GHz up to 4.7GHz, 12MB Cache)',
                'ram' => '16GB LPDDR4x RAM',
                'storage' => '1TB PCIe NVMe Solid State Drive (SSD)',
                'graphics' => 'Intel Iris Xe Graphics',
                'display' => '13.3-inch FHD (1920 x 1080) InfinityEdge Display',
                'operating_system' => 'Windows 10 Home 64-bit',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.1',
                'ports' => '2 x Thunderbolt 4 (USB Type-C), 1 x microSD card reader, 1 x Audio Combo Jack',
                'battery' => '4-cell 52Wh Battery',
                'advantages' => 'Desain yang sangat tipis dan ringan dengan kinerja yang tinggi. Layar InfinityEdge memberikan pengalaman visual yang memukau. Konektivitas Thunderbolt 4 untuk transfer data yang sangat cepat.',
                'photo' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGFwdG9wfGVufDB8MHwwfHx8Mg%3D%3D',
            ],
            [
                'name' => 'Apple MacBook Air',
                'description' => 'Apple MacBook Air dengan chip M1 adalah laptop ultraportable dengan kinerja dan daya tahan baterai yang luar biasa.',
                'processor' => 'Apple M1 Chip 8-Core CPU',
                'ram' => '8GB Unified Memory',
                'storage' => '256GB SSD',
                'graphics' => 'Apple 8-Core GPU',
                'display' => '13.3-inch Retina Display with True Tone',
                'operating_system' => 'macOS',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.0',
                'ports' => '2 x Thunderbolt / USB 4, 1 x Audio Combo Jack',
                'battery' => 'Up to 18 hours',
                'advantages' => 'Kinerja yang luar biasa dengan chip M1 yang canggih. Desain yang sangat tipis dan ringan. Layar Retina dengan True Tone memberikan kualitas gambar yang luar biasa.',
                'photo' => 'https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGxhcHRvcHxlbnwwfDB8MHx8fDI%3D',
            ],
            [
                'name' => 'Asus ROG Zephyrus G14',
                'description' => 'Asus ROG Zephyrus G14 adalah laptop gaming ultra-portabel dengan performa tinggi dan daya tahan baterai yang baik.',
                'processor' => 'AMD Ryzen 9 5900HS 8-Core Processor (3.0GHz up to 4.6GHz)',
                'ram' => '16GB DDR4 RAM',
                'storage' => '1TB PCIe NVMe Solid State Drive (SSD)',
                'graphics' => 'NVIDIA GeForce RTX 3060 6GB GDDR6 Graphics',
                'display' => '14-inch FHD (1920 x 1080) IPS Display with 144Hz refresh rate',
                'operating_system' => 'Windows 10 Home 64-bit',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.1',
                'ports' => '1 x USB 3.2 Gen 2 Type-C, 2 x USB 3.2 Gen 1 Type-A, 1 x HDMI 2.0b, 1 x Audio Combo Jack',
                'battery' => '4-cell 76Wh Battery',
                'advantages' => 'Performa tinggi dengan prosesor AMD Ryzen 9 dan kartu grafis NVIDIA RTX 3060. Desain yang ultra-portabel dengan daya tahan baterai yang luar biasa.',
                'photo' => 'https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzB8fGxhcHRvcHxlbnwwfDB8MHx8fDI%3D',
            ],
            [
                'name' => 'Acer Swift 3',
                'description' => 'Acer Swift 3 adalah laptop ultraportable dengan harga yang terjangkau dan kinerja yang baik untuk tugas sehari-hari.',
                'processor' => 'AMD Ryzen 5 4500U 6-Core Processor (2.3GHz up to 4.0GHz)',
                'ram' => '8GB DDR4 RAM',
                'storage' => '512GB PCIe NVMe Solid State Drive (SSD)',
                'graphics' => 'AMD Radeon Graphics',
                'display' => '14-inch FHD (1920 x 1080) IPS Display',
                'operating_system' => 'Windows 10 Home 64-bit',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.0',
                'ports' => '1 x USB 3.2 Gen 1 Type-C, 2 x USB 3.2 Gen 1 Type-A, 1 x HDMI 2.0, 1 x Audio Combo Jack',
                'battery' => '3-cell 48Wh Battery',
                'advantages' => 'Desain yang tipis dan ringan dengan kinerja yang baik. Layar IPS dengan resolusi FHD memberikan pengalaman visual yang jernih dan jelas. Konektivitas Wi-Fi 6 dan Bluetooth 5.0 memastikan koneksi nirkabel yang cepat dan stabil.',
                'photo' => 'https://images.unsplash.com/photo-1580522154071-c6ca47a859ad?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzN8fGxhcHRvcHxlbnwwfDB8MHx8fDI%3D',
            ],
            [
                'name' => 'Microsoft Surface Laptop 4',
                'description' => 'Microsoft Surface Laptop 4 adalah laptop premium dengan desain yang elegan dan kinerja yang tinggi.',
                'processor' => 'Intel Core i7-1185G7 4-Core Processor (3.0GHz up to 4.8GHz, 12MB Cache)',
                'ram' => '16GB LPDDR4x RAM',
                'storage' => '512GB PCIe NVMe Solid State Drive (SSD)',
                'graphics' => 'Intel Iris Xe Graphics',
                'display' => '13.5-inch PixelSense Display (2256 x 1504)',
                'operating_system' => 'Windows 10 Home 64-bit',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.0',
                'ports' => '1 x USB 3.1 Gen 1 Type-A, 1 x USB 3.1 Gen 2 Type-C, 1 x Surface Connect port, 1 x Audio Combo Jack',
                'battery' => 'Up to 17 hours',
                'advantages' => 'Desain yang premium dan elegan dengan kinerja yang tinggi. Layar PixelSense dengan resolusi tinggi memberikan pengalaman visual yang luar biasa.',
                'photo' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODZ8fGxhcHRvcHxlbnwwfDB8MHx8fDI%3D',
            ],
            [
                'name' => 'Razer Blade Stealth 13',
                'description' => 'Razer Blade Stealth 13 adalah laptop gaming ultraportable dengan desain yang elegan dan performa tinggi.',
                'processor' => 'Intel Core i7-1165G7 4-Core Processor (2.8GHz up to 4.7GHz, 12MB Cache)',
                'ram' => '16GB LPDDR4x RAM',
                'storage' => '512GB PCIe NVMe Solid State Drive (SSD)',
                'graphics' => 'NVIDIA GeForce GTX 1650 Ti 4GB GDDR6 Graphics',
                'display' => '13.3-inch FHD (1920 x 1080) 120Hz Display',
                'operating_system' => 'Windows 10 Home 64-bit',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.1',
                'ports' => '2 x Thunderbolt 4 (USB Type-C), 2 x USB 3.2 Gen 1 Type-A, 1 x Audio Combo Jack',
                'battery' => '4-cell 53.1Wh Battery',
                'advantages' => 'Desain yang sangat elegan dan kinerja yang tinggi untuk gaming ringan. Layar dengan refresh rate tinggi memberikan pengalaman gaming yang mulus.',
                'photo' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTE2fHxsYXB0b3B8ZW58MHwwfDB8fHwy',
            ],
            [
                'name' => 'Samsung Galaxy Book Flex',
                'description' => 'Samsung Galaxy Book Flex adalah laptop 2-in-1 dengan layar QLED yang menakjubkan dan performa tinggi.',
                'processor' => 'Intel Core i7-1065G7 4-Core Processor (1.3GHz up to 3.9GHz)',
                'ram' => '8GB LPDDR4x RAM',
                'storage' => '512GB PCIe NVMe Solid State Drive (SSD)',
                'graphics' => 'Intel Iris Plus Graphics',
                'display' => '13.3-inch QLED FHD (1920 x 1080) Touchscreen Display',
                'operating_system' => 'Windows 10 Home 64-bit',
                'connectivity' => 'Wi-Fi 6 (802.11ax), Bluetooth 5.0',
                'ports' => '2 x Thunderbolt 3 (USB Type-C), 1 x USB 3.2 Gen 1 Type-A, 1 x microSD card reader, 1 x Audio Combo Jack',
                'battery' => 'Up to 20 hours',
                'advantages' => 'Layar QLED yang menakjubkan dengan kualitas gambar yang luar biasa. Desain 2-in-1 yang fleksibel dengan kinerja yang tinggi. Daya tahan baterai yang luar biasa untuk penggunaan sepanjang hari.',
                'photo' => 'https://images.unsplash.com/photo-1618410320928-25228d811631?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTI5fHxsYXB0b3B8ZW58MHwwfDB8fHwy',
            ],
        ];

        foreach ($laptops as $laptop) {
            Laptop::create($laptop);
        }
    }
}
