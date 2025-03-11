<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MemoryCard;

class MemoryCardSeeder extends Seeder
{
    public function run(): void
    {
        MemoryCard::truncate();

        $models =
            [
                [
                    'model' => 'SanDisk Extreme PRO 128GB SDXC UHS-I Class 10 U3 V30',
                    'price' => 25,
                    'description' => 'The SanDisk Extreme PRO 128GB SDXC UHS-I memory card offers high-speed performance with read speeds up to 170MB/s and write speeds up to 90MB/s. It is designed for 4K video recording, fast photo captures, and quick transfers. The card also includes 2 years of RescuePRO Deluxe data recovery software for added security.',
                    'photo' => 'photos/sandiskMemoryCard/sandiskSD128.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "128GB",
                        "Speed Class" => "UHS-I, Class 10, U3, V30",
                        "Read Speed" => "Up to 170MB/s",
                        "Write Speed" => "Up to 90MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "2 years of RescuePRO Deluxe",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'SanDisk Extreme PRO 512GB SDXC UHS-I Class 10 U3 V30',
                    'price' => 25,
                    'description' => 'The SanDisk Extreme PRO 512GB SDXC memory card offers high-speed performance with UHS-I, Class 10, U3, and V30 ratings, ideal for 4K UHD video recording and high-resolution photography. With read speeds of up to 170MB/s and write speeds up to 90MB/s, it ensures fast data transfer and reliable storage for professional use.',
                    'photo' => 'photos/sandiskMemoryCard/sandiskSD512.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "512GB",
                        "Speed Class" => "UHS-I, Class 10, U3, V30",
                        "Read Speed" => "Up to 170MB/s",
                        "Write Speed" => "Up to 90MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "2 years of RescuePRO Deluxe",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'Lexar SDXC Professional UHS-II BL 1800x 256GB V60 Gold',
                    'price' => 80,
                    'description' => 'The Lexar Professional SDXC UHS-II 256GB memory card offers exceptional performance with a speed rating of 1800x, perfect for high-speed photography and 4K video recording. With V60 and UHS-II support, it ensures fast read speeds up to 300MB/s and write speeds up to 260MB/s, making it ideal for professional photographers and videographers.',
                    'photo' => 'photos/lexarMemoryCard/lexarSD256.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "256GB",
                        "Speed Class" => "UHS-II, V60, 1800x",
                        "Read Speed" => "Up to 300MB/s",
                        "Write Speed" => "Up to 260MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with UHS-II and UHS-I devices",
                        "Included Software" => "Lexar Image Rescue",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'Lexar Professional 128GB UHS-II 2000x V90',
                    'price' => 120,
                    'description' => 'The Lexar Professional 128GB UHS-II 2000x V90 memory card offers ultra-fast performance, with read speeds up to 300MB/s and write speeds up to 260MB/s. Designed for 4K and 8K video recording, it supports high-resolution photography and ensures reliable data storage for professional photographers and videographers.',
                    'photo' => 'photos/lexarMemoryCard/lexarSD128.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "128GB",
                        "Speed Class" => "UHS-II, V90, 2000x",
                        "Read Speed" => "Up to 300MB/s",
                        "Write Speed" => "Up to 260MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and 8K",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with UHS-II and UHS-I devices",
                        "Included Software" => "Lexar Image Rescue",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'Kingston Canvas Go! Plus SDXC 128GB UHS-I',
                    'price' => 15,
                    'description' => "The Kingston Canvas Go! Plus 128GB SDXC memory card offers fast UHS-I performance, ideal for capturing 4K videos and high-resolution images. With read speeds up to 170MB/s and write speeds up to 90MB/s, it's a reliable choice for photographers and videographers who need quick data transfer and durable storage.",
                    'photo' => 'photos/kingstonMemoryCard/kingstonSD128.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "128GB",
                        "Speed Class" => "UHS-I, Class 10, U3, V30",
                        "Read Speed" => "Up to 170MB/s",
                        "Write Speed" => "Up to 90MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "2 years of RescuePRO Deluxe",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'Kingston Canvas React Plus 128GB SDXC UHS-II U3 V90',
                    'price' => 95,
                    'description' => "The Kingston Canvas React Plus 128GB SDXC memory card is designed for high-speed performance, featuring UHS-II, U3, and V90 ratings. It offers read speeds up to 300MB/s and write speeds up to 260MB/s, making it perfect for capturing 4K and 8K videos, as well as high-resolution images. Ideal for professional photographers and videographers.",
                    'photo' => 'photos/kingstonMemoryCard/kingstonPLUSSD128.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "128GB",
                        "Speed Class" => "UHS-II, U3, V90",
                        "Read Speed" => "Up to 300MB/s",
                        "Write Speed" => "Up to 260MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and 8K",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with UHS-II and UHS-I devices",
                        "Included Software" => "Kingston Rescue Pro Deluxe",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'Samsung PRO Ultimate SDXC 512GB UHS-I U3 White',
                    'price' => 100,
                    'description' => "The Samsung PRO Ultimate 512GB SDXC memory card offers high-speed performance with UHS-I and U3 ratings, making it ideal for capturing 4K UHD videos and high-resolution photos. With read speeds up to 100MB/s and write speeds up to 90MB/s, it provides reliable and fast data transfer for professional photographers and videographers.",
                    'photo' => 'photos/samsungMemoryCard/samsungSD512.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "512GB",
                        "Speed Class" => "UHS-I, U3",
                        "Read Speed" => "Up to 100MB/s",
                        "Write Speed" => "Up to 90MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "None",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'Samsung PRO Plus MB-SD256S/EU Card de Memorie SDXC 256GB UHS-I U3',
                    'price' => 80,
                    'description' => "The Samsung PRO Plus 256GB SDXC memory card offers high-speed performance with UHS-I and U3 ratings, making it perfect for capturing 4K UHD videos and high-resolution images. With read speeds up to 100MB/s and write speeds up to 90MB/s, it ensures fast and reliable data transfer for professional photographers and videographers.",
                    'photo' => 'photos/samsungMemoryCard/samsungSD256.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "256GB",
                        "Speed Class" => "UHS-I, U3",
                        "Read Speed" => "Up to 100MB/s",
                        "Write Speed" => "Up to 90MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "None",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'Sony Tough SF-M 128GB UHS-II Class 10 U3 R277/W150',
                    'price' => 90,
                    'description' => "The Sony Tough SF-M 128GB SD memory card offers exceptional performance with UHS-II, U3, and Class 10 ratings. With read speeds up to 277MB/s and write speeds up to 150MB/s, it is ideal for 4K video recording and high-speed photography. Its durable, rugged design ensures reliability in harsh environments, making it perfect for professional photographers and videographers.",
                    'photo' => 'photos/sonyMemoryCard/sonySD128.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "128GB",
                        "Speed Class" => "UHS-II, Class 10, U3",
                        "Read Speed" => "Up to 277MB/s",
                        "Write Speed" => "Up to 150MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with UHS-II and UHS-I devices",
                        "Included Software" => "None",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'Sony Seria SF-M Tough 256GB UHS-II Class10 V60',
                    'price' => 180,
                    'description' => "The Sony SF-M Tough Series 256GB SD memory card offers high-performance with UHS-II, Class 10, and V60 ratings, making it perfect for 4K video recording and high-speed photography. With read speeds up to 300MB/s and write speeds up to 299MB/s, it ensures fast data transfer. Its rugged, durable design provides protection against shock, water, and extreme temperatures, ideal for professional use in tough conditions.",
                    'photo' => 'photos/sonyMemoryCard/sonySD256.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "256GB",
                        "Speed Class" => "UHS-II, Class 10, V60",
                        "Read Speed" => "Up to 300MB/s",
                        "Write Speed" => "Up to 299MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with UHS-II and UHS-I devices",
                        "Included Software" => "None",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'SD Card',
                ],
                [
                    'model' => 'SanDisk Extreme MicroSDXC 256GB A2 C10 V30 UHS-I U3 + Adaptor SD',
                    'price' => 40,
                    'description' => "The SanDisk Extreme 256GB MicroSDXC memory card offers fast performance with UHS-I, U3, and V30 ratings, ideal for 4K UHD video recording and high-speed photography. With read speeds up to 160MB/s and write speeds up to 90MB/s, it ensures quick data transfer. The card includes an SD adapter and 1 year of RescuePRO Deluxe software for data recovery.",
                    'photo' => 'photos/sandiskMemoryCard/sandiskMSD256.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "256GB",
                        "Speed Class" => "UHS-I, Class 10, U3, V30",
                        "Read Speed" => "Up to 160MB/s",
                        "Write Speed" => "Up to 90MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "1 year of RescuePRO Deluxe",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'Micro SD',
                ],
                [
                    'model' => 'SanDisk Extreme PRO MicroSDXC 128GB A2 C10 V30 UHS-I U3 + Adaptor SD',
                    'price' => 40,
                    'description' => "The SanDisk Extreme PRO 128GB MicroSDXC memory card delivers high-speed performance with UHS-I, U3, and V30 ratings, making it ideal for 4K UHD video recording and high-resolution photography. With read speeds up to 170MB/s and write speeds up to 90MB/s, it ensures quick and reliable data transfer. The card includes an SD adapter for added versatility.",
                    'photo' => 'photos/sandiskMemoryCard/sandiskMSD128.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "128GB",
                        "Speed Class" => "UHS-I, Class 10, U3, V30",
                        "Read Speed" => "Up to 170MB/s",
                        "Write Speed" => "Up to 90MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "2 years of RescuePRO Deluxe",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'Micro SD',
                ],
                [
                    'model' => 'Lexar Professional 1066x microSDXC 128GB UHS-I Silver Series + Adaptor SD',
                    'price' => 15,
                    'description' => "The Lexar Professional 1066x 128GB microSDXC card offers high-speed performance with UHS-I, Class 10, and U3 ratings, making it ideal for capturing 4K video and high-quality photos. With read speeds up to 160MB/s and write speeds up to 120MB/s, it ensures fast and efficient data transfer. The card also includes an SD adapter for added compatibility.",
                    'photo' => 'photos/lexarMemoryCard/lexarMSD128.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "128GB",
                        "Speed Class" => "UHS-I, Class 10, U3, V30",
                        "Read Speed" => "Up to 160MB/s",
                        "Write Speed" => "Up to 120MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "None",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'Micro SD',
                ],
                [
                    'model' => 'Lexar microSDXC Professional UHS-II 128GB V60 Gold',
                    'price' => 50,
                    'description' => "The Lexar Professional UHS-II 128GB microSDXC card offers high-speed performance with UHS-II and V60 ratings, making it perfect for 4K and 8K video recording and high-speed photography. With read speeds up to 300MB/s and write speeds up to 260MB/s, it ensures quick and efficient data transfer. The card is built for durability, offering reliable performance in tough conditions.",
                    'photo' => 'photos/lexarMemoryCard/lexarMSD128GOLD.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "128GB",
                        "Speed Class" => "UHS-II, V60",
                        "Read Speed" => "Up to 300MB/s",
                        "Write Speed" => "Up to 260MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and 8K",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with UHS-II and UHS-I devices",
                        "Included Software" => "None",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'Micro SD',
                ],
                [
                    'model' => 'Kingston Canvas Go! Plus Card Micro SD 256GB U3 V30 + Adaptor SD',
                    'price' => 25,
                    'description' => "The Kingston Canvas Go! Plus 256GB microSD card offers high-speed performance with U3 and V30 ratings, making it perfect for capturing 4K UHD video and high-resolution photos. With read speeds up to 170MB/s and write speeds up to 90MB/s, it ensures fast data transfer. The card also includes an SD adapter for added compatibility with a wide range of devices.",
                    'photo' => 'photos/kingstonMemoryCard/kingstonMSD256.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "256GB",
                        "Speed Class" => "UHS-I, Class 10, U3, V30",
                        "Read Speed" => "Up to 170MB/s",
                        "Write Speed" => "Up to 90MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "None",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'Micro SD',
                ],
                [
                    'model' => 'Kingston Canvas Select Plus 64GB Class 10 A1 + Adaptor SD',
                    'price' => 5,
                    'description' => "The Kingston Canvas Select Plus 64GB microSD card offers reliable performance with Class 10 and A1 ratings, making it ideal for apps, photos, and Full HD video recording. With fast read speeds up to 100MB/s, it ensures smooth performance on a wide range of devices. The card also includes an SD adapter for added compatibility.",
                    'photo' => 'photos/kingstonMemoryCard/kingstonMSD64.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "64GB",
                        "Speed Class" => "UHS-I, Class 10, A1",
                        "Read Speed" => "Up to 100MB/s",
                        "Write Speed" => "Up to 85MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "None",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'Micro SD',
                ],
                [
                    'model' => 'Samsung Micro-SDXC EVO Plus Class 10 UHS-I U3 256GB + Adaptor SD ',
                    'price' => 5,
                    'description' => "The Samsung MicroSDXC EVO Plus 256GB card offers high-speed performance with UHS-I U3 and Class 10 ratings, making it perfect for 4K UHD video recording, high-resolution photos, and apps. With read speeds up to 100MB/s and write speeds up to 90MB/s, it ensures smooth data transfer. The card also includes an SD adapter for broad compatibility with various devices.",
                    'photo' => 'photos/samsungMemoryCard/samsungMSD256.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "256GB",
                        "Speed Class" => "UHS-I, Class 10, U3",
                        "Read Speed" => "Up to 100MB/s",
                        "Write Speed" => "Up to 90MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with SD, SDHC, SDXC devices",
                        "Included Software" => "None",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'Micro SD',
                ],
                [
                    'model' => 'Sandisk Extreme Pro CompactFlash 256GB',
                    'price' => 200,
                    'description' => "The SanDisk Extreme Pro 256GB CompactFlash memory card delivers high-performance with a UDMA 7 interface, ideal for professional photographers and videographers. With read speeds up to 160MB/s and write speeds up to 150MB/s, it ensures fast data transfer and smooth 4K video recording. Its rugged design offers reliability in demanding environments, making it a great choice for high-end DSLR cameras and camcorders.",
                    'photo' => 'photos/sandiskMemoryCard/sandiskCompact256.webp',
                    'specifications' => json_encode([
                        "Storage Capacity" => "256GB",
                        "Speed Class" => "UDMA 7, Class 10",
                        "Read Speed" => "Up to 160MB/s",
                        "Write Speed" => "Up to 150MB/s",
                        "File System" => "exFAT",
                        "Video Recording" => "4K UHD and Full HD",
                        "Durability" => "Shockproof, temperature proof, waterproof, X-ray proof",
                        "Compatibility" => "Compatible with CompactFlash-enabled devices",
                        "Included Software" => "RescuePRO Deluxe (for data recovery)",
                        "Operating Temperature" => "-13°F to 185°F (-25°C to 85°C)"
                    ]),
                    'type' => 'Compact Flash',
                ],
            ];
        foreach ($models as $modelData) {
            MemoryCard::updateOrCreate(
                ['model' => $modelData['model']],
                $modelData
            );
        }
    }
}
