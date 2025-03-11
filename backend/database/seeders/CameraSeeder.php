<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camera;

class CameraSeeder extends Seeder
{
    public function run()
    {
        Camera::truncate();

        $models =
            [
                [
                    'model' => 'Canon EOS R6 Mark II Full Frame 24.2MP',
                    'price' => 2500,
                    'description' => 'The Canon EOS R6 Mark II is a 24.2 MP full-frame mirrorless camera offering fast performance, advanced autofocus, and stunning image quality, perfect for both photos and 4K video.',
                    'photo' => 'photos/canonBody/canonR6.webp',
                    'specifications' => json_encode([
                        "Sensor" => "24.2 MP full-frame CMOS sensor",
                        "Lens" => "Canon RF mount, compatible with RF lenses and EF lenses via an adapter",
                        "Video" =>
                            "4K video recording up to 60fps, 10-bit 4:2:2 internal recording, and Full HD at up to 180fps for slow-motion",
                        "Display" => "3.0-inch vari-angle LCD touchscreen with 1.62 million dots, offering flexible viewing angles",
                        "ISO" => "100-102,400 (expandable to 50-204,800), delivering excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB-C, HDMI, FTP, and Ethernet for remote control and fast file transfer",
                        "Burst Shooting" => "Up to 40 fps continuous shooting with the electronic shutter, 12 fps with the mechanical shutter",
                        "Stabilization" =>
                            "In-body image stabilization (IBIS) with up to 8 stops of shake reduction for stable handheld shooting",
                        "Dimensions" => "138.4 x 98.4 x 88.4 mm",
                        "Weight" => "680g (body only)",
                    ]),
                    'type' => 'Mirrorless',
                ],
                [
                    'model' => 'Canon EOS R3 Full Frame',
                    'price' => 5750,
                    'description' => 'The Canon EOS R3 is a high-performance full-frame mirrorless camera designed for professionals, featuring lightning-fast autofocus, 30 fps shooting, and advanced low-light capabilities.',
                    'photo' => 'photos/canonBody/canonR3.webp',
                    'specifications' => json_encode([
                        "Sensor" => "24.1 MP full-frame CMOS sensor (back-illuminated)",
                        "Lens" => "Canon RF mount, compatible with RF lenses and EF lenses via an adapter",
                        "Video" =>
                            "6K video recording at 60fps (10-bit 4:2:2 internal recording), Full HD at up to 120fps for slow-motion",
                        "Display" => "3.2-inch vari-angle LCD touchscreen with 4.15 million dots for flexible viewing angles",
                        "ISO" => "100-102,400 (expandable to 50-204,800), with exceptional low-light sensitivity",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB-C, Ethernet, HDMI, FTP, and dual card slots (CFexpress & SD) for versatile file management",
                        "BurstShooting" => "Up to 30 fps continuous shooting with the electronic shutter, 12 fps with the mechanical shutter",
                        "Stabilization" =>
                            "In-body image stabilization (IBIS) with up to 8 stops of stabilization for steadier handheld shots",
                        "Dimensions" => "156.5 x 163.6 x 90.6 mm",
                        "Weight" => "1050g (body only)",
                    ]),
                    'type' => 'Mirrorless',
                ],
                [
                    'model' => 'Canon EOS R1 24MP 6K',
                    'price' => 7600,
                    'description' => 'The Canon EOS R1 is a cutting-edge 24 MP full-frame mirrorless camera with 6K video capability, advanced autofocus, and robust performance for professional photography and videography.',
                    'photo' => 'photos/canonBody/canonR1.webp',
                    'specifications' => json_encode([
                        "Sensor" => "24 MP full-frame CMOS sensor",
                        "Lens" => "Canon RF mount, compatible with RF lenses and EF lenses via an adapter",
                        "Video" =>
                            "6K video recording at up to 60fps (10-bit 4:2:2 internal recording), with advanced video features and HDMI output for external recording",
                        "Display" => "3.2-inch vari-angle LCD touchscreen with high resolution, providing flexible viewing angles for video and photography",
                        "ISO" => "100-102,400 (expandable to 50-204,800), offering superb low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB-C, Ethernet, HDMI, FTP, and dual card slots (likely CFexpress & SD) for quick and reliable file transfers",
                        "BurstShooting" => "Up to 30 fps continuous shooting with the electronic shutter, 12 fps with mechanical shutter",
                        "Stabilization" =>
                            "In-body image stabilization (IBIS) for steadier handheld shooting, ideal for video and long exposures",
                        "Dimensions" => "138 x 98 x 88 mm",
                        "Weight" => "1340g (body only)",
                    ]),
                    'type' => 'Mirrorless',
                ],
                [
                    'model' => 'Canon EOS 90D 32.5MP 4k',
                    'price' => 1160,
                    'description' => 'The Canon EOS 90D is a versatile DSLR with a 32.5 MP APS-C sensor, offering 4K video recording, fast autofocus, and high-speed continuous shooting, making it ideal for both photography and videography.',
                    'photo' => 'photos/canonBody/canon90D.webp',
                    'specifications' => json_encode([
                        "Sensor" => "32.5 MP APS-C CMOS sensor",
                        "Lens" => "Compatible with Canon EF and EF-S lenses",
                        "Video" =>
                            "4K UHD video recording at 30fps, Full HD 1080p at 120fps for slow motion",
                        "Display" => "3.0-inch vari-angle touchscreen LCD with 1.04 million dots",
                        "ISO" => "100-25,600 (expandable to 51,200) for excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB 2.0, HDMI output",
                        "BurstShooting" => "Up to 10 fps continuous shooting",
                        "Stabilization" =>
                            "No in-body image stabilization, but compatible with stabilized lenses",
                        "Dimensions" => "139.9 x 104.3 x 76.8 mm",
                        "Weight" => "701g (body only)",
                    ]),
                    'type' => 'DSLR',
                ],
                [
                    'model' => 'Canon PowerShot G7 X Mark II 20.1MP Full HD',
                    'price' => 600,
                    'description' => 'The Canon PowerShot G7 X Mark II is a compact 20.1 MP camera with Full HD video recording, offering excellent performance and portability for vlogging and everyday photography.',
                    'photo' => 'photos/canonBody/CanonPowerShot.webp',
                    'specifications' => json_encode([
                        "Sensor" => "20.1 MP 1-inch CMOS sensor",
                        "Lens" => "4.2x optical zoom lens (24-100mm equivalent), f/1.8-2.8 aperture",
                        "Video" => "Full HD 1080p video recording at 60fps, with built-in stereo microphone and manual exposure control",
                        "Display" => "3.0-inch tilting LCD touchscreen with 1,040,000 dots for flexible shooting angles, ideal for vlogging",
                        "ISO" => "125-12,800, with good performance in low-light conditions",
                        "Connectivity" => "Wi-Fi and NFC for easy sharing and remote control via Canon's Camera Connect app",
                        "BurstShooting" => "Up to 8 fps continuous shooting",
                        "Stabilization" => "Optical Image Stabilization for steady handheld shots, especially in low light and at longer focal lengths",
                        "Dimensions" => "105.5 x 60.9 x 42.2 mm",
                        "Weight" => "319g (with battery and memory card)"
                    ]),
                    'type' => 'Compact',
                ],
                [
                    'model' => 'Canon PowerShot SX740 HS 20.3MP',
                    'price' => 400,
                    'description' => 'The Canon PowerShot SX740 HS is a compact 20.3 MP camera with a powerful zoom lens and 4K video recording, perfect for travel and everyday photography.',
                    'photo' => 'photos/canonBody/CanonPowerShotSX.webp',
                    'specifications' => json_encode([
                        "Sensor" => "20.3 MP CMOS sensor",
                        "Lens" => "40x optical zoom lens (24mm-960mm equivalent), f/3.3-6.9 aperture",
                        "Video" => "4K video recording at 30fps (with HDMI output), Full HD 1080p video at 60fps",
                        "Display" => "3.0-inch tilting LCD touchscreen with 1,040,000 dots",
                        "ISO" => "100-3200 (expandable to 12800)",
                        "Connectivity" => "Wi-Fi, Bluetooth, and NFC for easy sharing and remote control",
                        "BurstShooting" => "Continuous shooting at up to 10 fps",
                        "Stabilization" => "Optical Image Stabilization for steady handheld shots, particularly useful in low light and at long zoom ranges",
                        "Dimensions" => "110.1 x 63.8 x 39.9 mm",
                        "Weight" => "299g (with battery and memory card)"
                    ]),
                    'type' => 'Compact',
                ],
                [
                    'model' => 'Canon Ixus 285 HS',
                    'price' => 300,
                    'description' => 'The Canon IXUS 285 HS is a slim and compact digital camera with a 20.2 MP sensor, 12x optical zoom, and built-in Wi-Fi, perfect for capturing high-quality photos and Full HD videos on the go.',
                    'photo' => 'photos/canonBody/CanonIxus.webp',
                    'specifications' => json_encode([
                        "Sensor" => "20.2 MP CMOS sensor",
                        "Lens" => "12x optical zoom lens (25-300mm equivalent), f/3.6-7.0 aperture",
                        "Video" => "Full HD 1080p video recording at 30fps with stereo sound",
                        "Display" => "3.0-inch LCD screen with 461,000 dots",
                        "ISO" => "80-3200, suitable for a variety of lighting conditions",
                        "Connectivity" => "Wi-Fi and NFC for easy sharing and remote control via the Canon Camera Connect app",
                        "BurstShooting" => "Continuous shooting at up to 3.9 fps",
                        "Stabilization" => "Intelligent Image Stabilization (IS) for sharper handheld shots",
                        "Dimensions" => "95.2 x 56.6 x 22.7 mm",
                        "Weight" => "147g (with battery and memory card)"
                    ]),
                    'type' => 'Compact',
                ],
                [
                    'model' => 'Canon EOS 5D Mark IV 30.4MP CMOS',
                    'price' => 2750,
                    'description' => 'The Canon EOS 5D Mark IV is a full-frame DSLR with a 30.4 MP CMOS sensor, offering excellent image quality, 4K video recording, and fast autofocus, making it ideal for both professional photographers and videographers.',
                    'photo' => 'photos/canonBody/Canon5D.webp',
                    'specifications' => json_encode([
                        "Sensor" => "30.4 MP Full-frame CMOS sensor",
                        "Lens" => "Compatible with Canon EF lenses",
                        "Video" => "4K UHD video recording at 30fps, Full HD 1080p at 60fps",
                        "Display" => "3.2-inch LCD touchscreen with 1.62 million dots",
                        "ISO" => "100-32,000 (expandable to 50-102,400) for excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, GPS, USB 3.0 for quick transfer, and HDMI output",
                        "BurstShooting" => "Up to 7 fps continuous shooting",
                        "Stabilization" => "No in-body image stabilization, but works with stabilized lenses",
                        "Dimensions" => "150.7 x 116.4 x 75.9 mm",
                        "Weight" => "800g (body only)"
                    ]),
                    'type' => 'DSLR',
                ],
                [
                    'model' => 'Canon EOS 90D 32.5MP 4k',
                    'price' => 1160,
                    'description' => 'The Canon EOS 90D is a versatile DSLR with a 32.5 MP APS-C sensor, offering 4K video recording, fast autofocus, and high-speed continuous shooting, making it ideal for both photography and videography.',
                    'photo' => 'photos/canonBody/canon90D.webp',
                    'specifications' => json_encode([
                        "Sensor" => "32.5 MP APS-C CMOS sensor",
                        "Lens" => "Compatible with Canon EF and EF-S lenses",
                        "Video" => "4K UHD video recording at 30fps, Full HD 1080p at 120fps for slow motion",
                        "Display" => "3.0-inch vari-angle touchscreen LCD with 1.04 million dots",
                        "ISO" => "100-25,600 (expandable to 51,200) for excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB 2.0, HDMI output",
                        "BurstShooting" => "Up to 10 fps continuous shooting",
                        "Stabilization" => "No in-body image stabilization, but compatible with stabilized lenses",
                        "Dimensions" => "139.9 x 104.3 x 76.8 mm",
                        "Weight" => "701g (body only)"
                    ]),
                    'type' => 'DSLR',
                ],
                [
                    'model' => 'Canon EOS 1DX Mark III',
                    'price' => 7500,
                    'description' => 'The Canon EOS-1D X Mark III is a flagship DSLR featuring a 20.1 MP full-frame sensor, offering exceptional image quality, 4K video recording, and ultra-fast 16 fps continuous shooting, ideal for professional sports, wildlife, and action photography.',
                    'photo' => 'photos/canonBody/Canon1DX.webp',
                    'specifications' => json_encode([
                        "Sensor" => "20.1 MP Full-frame CMOS sensor",
                        "Lens" => "Compatible with Canon EF lenses",
                        "Video" => "4K UHD video recording at 60fps, Full HD 1080p at 120fps for slow motion",
                        "Display" => "3.2-inch LCD touchscreen with 2.1 million dots",
                        "ISO" => "100-102,400 (expandable to 50-819,200) for excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, Ethernet, USB 3.1, HDMI output, FTP support for fast file transfer",
                        "BurstShooting" => "Up to 16 fps with the mirror up and 20 fps in live view mode with the electronic shutter",
                        "Stabilization" => "No in-body image stabilization, but compatible with stabilized lenses",
                        "Dimensions" => "158.0 x 167.6 x 82.6 mm",
                        "Weight" => "1,440g (body only)"
                    ]),
                    'type' => 'DSLR',
                ],

                [
                    'model' => 'Nikon Z5 24.3MP',
                    'price' => 700,
                    'description' => 'The Nikon Z5 is a 24.3 MP full-frame mirrorless camera offering excellent image quality, reliable autofocus, and 4K video capabilities, ideal for enthusiasts and beginners.',
                    'photo' => 'photos/nikonBody/nikonZ5.webp',
                    'specifications' => json_encode([
                        "Sensor" => "24.3 MP full-frame CMOS sensor",
                        "Lens" => "Nikon Z-mount, compatible with Nikon Z lenses and F-mount lenses via an adapter",
                        "Video" => "4K UHD video recording at 30fps, Full HD 1080p recording at 60fps",
                        "Display" => "3.2-inch tilting LCD touchscreen with 1,040,000 dots for flexible shooting angles",
                        "ISO" => "100-51,200 (expandable to 50-204,800), with excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB-C, HDMI, and dual SD card slots (UHS-II for faster write speeds)",
                        "BurstShooting" => "Up to 4.5 fps continuous shooting",
                        "Stabilization" => "In-body image stabilization (IBIS) with up to 5 stops of shake reduction",
                        "Dimensions" => "134 x 101.3 x 60.5 mm",
                        "Weight" => "675g (with battery and memory card)"
                    ]),
                    'type' => 'Mirrorless'
                ],
                [
                    'model' => 'Nikon Z9 45.7MP 8K',
                    'price' => 4420,
                    'description' => 'The Nikon Z9 is a professional 45.7 MP full-frame mirrorless camera with groundbreaking 8K video recording, ultra-fast autofocus, and high-speed performance for advanced creators.',
                    'photo' => 'photos/nikonBody/nikonZ9.webp',
                    'specifications' => json_encode([
                        "Sensor" => "45.7 MP full-frame stacked CMOS sensor",
                        "Lens" => "Nikon Z-mount, compatible with Z lenses and F-mount lenses via the FTZ adapter",
                        "Video" => "8K video recording at 30fps, 4K UHD video at 120fps, 10-bit 4:2:2 internal recording, and N-Log/ProRes options for advanced video needs",
                        "Display" => "3.2-inch tilting LCD touchscreen with 2.1 million dots for flexible shooting angles, and a high-resolution 3.6 million-dot OLED EVF (electronic viewfinder)",
                        "ISO" => "64-25,600 (expandable to 32-102,400), delivering exceptional low-light performance",
                        "Connectivity" => "Dual card slots (CFexpress Type B and SD UHS-II), Wi-Fi, Bluetooth, USB-C, HDMI, Ethernet, and FTP for high-speed transfers and remote control",
                        "BurstShooting" => "Up to 20 fps continuous shooting with the electronic shutter, 10 fps with the mechanical shutter",
                        "Stabilization" => "In-body image stabilization (IBIS) with up to 5 stops of stabilization for steadier handheld shooting",
                        "Dimensions" => "149 x 149 x 90.5 mm",
                        "Weight" => "1,340g (body only)"
                    ]),
                    'type' => 'Mirrorless'
                ],
                [
                    'model' => 'Nikon Zf 4K 24.5MP',
                    'price' => 1800,
                    'description' => 'The Nikon Zf is a stylish 24.5 MP mirrorless camera with 4K video recording, offering powerful performance and classic design for photography enthusiasts.',
                    'photo' => 'photos/nikonBody/nikonZf.webp',
                    'specifications' => json_encode([
                        "Sensor" => "24.5 MP DX-format CMOS sensor (APS-C)",
                        "Lens" => "Nikon Z-mount, compatible with Nikon Z lenses and F-mount lenses via the FTZ adapter",
                        "Video" => "4K UHD video recording at up to 30fps, Full HD video at up to 120fps for slow-motion",
                        "Display" => "3.2-inch vari-angle LCD touchscreen with 1.04 million dots for flexible viewing and vlogging",
                        "ISO" => "100-51,200 (expandable to 50-204,800), offering strong low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB-C, HDMI, and dual SD card slots for fast file transfer and backup",
                        "BurstShooting" => "Up to 11 fps continuous shooting with the mechanical shutter",
                        "Stabilization" => "In-body image stabilization (IBIS) for stable handheld shooting",
                        "Dimensions" => "139.5 x 93.5 x 60 mm",
                        "Weight" => "675g (body only)"
                    ]),
                    'type' => 'Mirrorless'
                ],
                [
                    'model' => 'Nikon Coolpix P950 16 MP',
                    'price' => 900,
                    'description' => 'The Nikon Coolpix P950 is a versatile bridge camera with a 16 MP sensor and an 83x optical zoom, perfect for capturing distant subjects. It also offers 4K video recording and advanced stabilization for steady shots.',
                    'photo' => 'photos/nikonBody/nikonCoolpix.webp',
                    'specifications' => json_encode([
                        "Sensor" => "16 MP CMOS sensor",
                        "Lens" => "83x optical zoom lens (24-2000mm equivalent), f/2.8-6.5 aperture",
                        "Video" => "4K UHD video recording at 30fps, Full HD 1080p at 60fps",
                        "Display" => "3.2-inch vari-angle LCD screen with 921,000 dots, and an electronic viewfinder (EVF)",
                        "ISO" => "100-6400, offering solid performance in various lighting conditions",
                        "Connectivity" => "Wi-Fi and Bluetooth for easy sharing and remote control via the Nikon SnapBridge app",
                        "BurstShooting" => "Up to 7 fps continuous shooting",
                        "Stabilization" => "Hybrid VR (Vibration Reduction) for steadier handheld shots, especially at high zoom levels",
                        "Dimensions" => "125.0 x 114.2 x 140.5 mm",
                        "Weight" => "1005g (with battery and memory card)"
                    ]),
                    'type' => 'Compact'
                ],
                [
                    'model' => 'Nikon D850 45.7MP CMOS',
                    'price' => 2000,
                    'description' => 'The Nikon D850 is a high-resolution DSLR with a 45.7 MP full-frame CMOS sensor, offering exceptional image quality, 4K UHD video, and fast autofocus, ideal for both professional photography and videography.',
                    'photo' => 'photos/nikonBody/nikonD850.webp',
                    'specifications' => json_encode([
                        "Sensor" => "45.7 MP Full-frame BSI CMOS sensor",
                        "Lens" => "Compatible with Nikon F-mount lenses",
                        "Video" => "4K UHD video recording at 30fps, Full HD 1080p at 120fps for slow-motion",
                        "Display" => "3.2-inch tilting touchscreen LCD with 2.36 million dots",
                        "ISO" => "64-25,600 (expandable to 32-102,400) for outstanding low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB 3.0, HDMI output",
                        "BurstShooting" => "Up to 7 fps continuous shooting (9 fps with battery grip)",
                        "Stabilization" => "In-body 5-axis image stabilization for smoother photos and videos",
                        "Dimensions" => "146 x 124 x 79 mm",
                        "Weight" => "1005g (body only)"
                    ]),
                    'type' => 'DSLR'
                ],
                [
                    'model' => 'Nikon D6 20.8MP FX',
                    'price' => 6700,
                    'description' => 'The Nikon D6 is a professional DSLR with a 20.8 MP full-frame sensor, offering fast 14 fps continuous shooting, advanced autofocus, and 4K UHD video, making it ideal for sports, wildlife, and fast-action photography.',
                    'photo' => 'photos/nikonBody/nikonD6.webp',
                    'specifications' => json_encode([
                        "Sensor" => "20.8 MP Full-frame CMOS sensor",
                        "Lens" => "Compatible with Nikon F-mount lenses",
                        "Video" => "4K UHD video recording at 30fps, Full HD 1080p at 60fps",
                        "Display" => "3.2-inch LCD touchscreen with 2.36 million dots",
                        "ISO" => "100-102,400 (expandable to 50-3,280,000) for excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, Ethernet, USB 3.1, HDMI output, FTP for fast file transfer",
                        "BurstShooting" => "Up to 14 fps continuous shooting with full autofocus and metering",
                        "Stabilization" => "No in-body image stabilization, but compatible with stabilized lenses",
                        "Dimensions" => "160 x 158 x 92 mm",
                        "Weight" => "1,270g (body only)"
                    ]),
                    'type' => 'DSLR'
                ],
                [
                    'model' => 'Nikon D7500 20.9MP CMOS 4K',
                    'price' => 800,
                    'description' => 'The Nikon D7500 is a versatile DSLR with a 20.9 MP APS-C sensor, offering 4K UHD video recording, fast 8 fps continuous shooting, and advanced autofocus, making it ideal for both photography and videography.',
                    'photo' => 'photos/nikonBody/nikonD7500.webp',
                    'specifications' => json_encode([
                        "Sensor" => "20.9 MP APS-C CMOS sensor (DX format)",
                        "Lens" => "Compatible with Nikon F-mount lenses",
                        "Video" => "4K UHD video recording at 30fps, Full HD 1080p at 60fps",
                        "Display" => "3.2-inch tilting touchscreen LCD with 922,000 dots",
                        "ISO" => "100-51,200 (expandable to 50-1,640,000) for excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB 2.0, HDMI output",
                        "BurstShooting" => "Up to 8 fps continuous shooting",
                        "Stabilization" => "No in-body image stabilization, but compatible with stabilized lenses",
                        "Dimensions" => "135.9 x 104.3 x 72.5 mm",
                        "Weight" => "720g (body only)"
                    ]),
                    'type' => 'DSLR'
                ],
                [
                    'model' => 'Sony A7 IV Full Frame 33MP',
                    'price' => 2310,
                    'description' => 'The Sony A7 IV is a 33 MP full-frame mirrorless camera with advanced real-time autofocus, 10 fps burst shooting, and 4K 60p video recording, perfect for professionals and enthusiasts.',
                    'photo' => 'photos/sonyBody/sonyA7IV.webp',
                    'specifications' => json_encode([
                        "Sensor" => "33 MP full-frame Exmor R CMOS sensor",
                        "Lens" => "Sony E-mount, compatible with Sony E-mount lenses and other lenses via adapters",
                        "Video" => "4K video recording at up to 60fps (10-bit 4:2:2 internal recording), Full HD at 120fps for slow-motion, and 16-bit audio output via HDMI",
                        "Display" => "3.0-inch vari-angle LCD touchscreen with 1.03 million dots for flexible shooting angles",
                        "ISO" => "100-51,200 (expandable to 50-204,800), providing great low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB-C, HDMI, Ethernet, and dual card slots (CFexpress Type A and SD UHS-II)",
                        "BurstShooting" => "Up to 10 fps continuous shooting with mechanical or electronic shutter",
                        "Stabilization" => "In-body image stabilization (IBIS) with up to 5.5 stops of shake reduction",
                        "Dimensions" => "131.3 x 96.4 x 79.8 mm",
                        "Weight" => "658g (body only)"
                    ]),
                    'type' => 'Mirrorless'
                ],
                [
                    'model' => 'Sony A7 III Full Frame 4K',
                    'price' => 1265,
                    'description' => 'The Sony A7 III is a versatile full-frame mirrorless camera offering 24 MP resolution, advanced autofocus, 4K video recording, and excellent low-light performance.',
                    'photo' => 'photos/sonyBody/sonyA7III.webp',
                    'specifications' => json_encode([
                        "Sensor" => "24.2 MP full-frame Exmor R CMOS sensor",
                        "Lens" => "Sony E-mount, compatible with Sony E-mount lenses and other lenses via adapters",
                        "Video" => "4K video recording at up to 30fps (8-bit 4:2:0 internal recording), Full HD 1080p at 120fps for slow-motion",
                        "Display" => "3.0-inch tilting LCD touchscreen with 922,000 dots for flexible shooting angles",
                        "ISO" => "100-51,200 (expandable to 50-204,800), offering excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB-C, HDMI, dual SD card slots (UHS-II for faster write speeds)",
                        "BurstShooting" => "Up to 10 fps continuous shooting with mechanical or electronic shutter",
                        "Stabilization" => "In-body image stabilization (IBIS) with up to 5 stops of stabilization for steadier handheld shots",
                        "Dimensions" => "126.9 x 95.6 x 73.7 mm",
                        "Weight" => "650g (body only)"
                    ]),
                    'type' => 'Mirrorless'
                ],
                [
                    'model' => 'Sony A7R V Full Frame 8K',
                    'price' => 4000,
                    'description' => 'The Sony A7R V is a high-resolution 61 MP full-frame mirrorless camera featuring advanced real-time autofocus, 10 fps shooting, and 8K video recording, designed for professionals.',
                    'photo' => 'photos/sonyBody/sonyA7R.webp',
                    'specifications' => json_encode([
                        "Sensor" => "61 MP full-frame Exmor R CMOS sensor",
                        "Lens" => "Sony E-mount, compatible with Sony E-mount lenses and other lenses via adapters",
                        "Video" => "8K video recording at 24fps, 4K video recording at up to 60fps (10-bit 4:2:2 internal recording), Full HD at 120fps for slow-motion, and 16-bit audio output via HDMI",
                        "Display" => "3.2-inch vari-angle LCD touchscreen with 2.95 million dots for flexible shooting angles, and a 9.44-million-dot OLED EVF (electronic viewfinder)",
                        "ISO" => "100-32,000 (expandable to 50-102,400), providing excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB-C, HDMI, Ethernet, dual card slots (CFexpress Type A and SD UHS-II), and FTP for fast file transfers",
                        "BurstShooting" => "Up to 10 fps continuous shooting with mechanical or electronic shutter",
                        "Stabilization" => "In-body image stabilization (IBIS) with up to 8 stops of shake reduction for steady handheld shots",
                        "Dimensions" => "131.3 x 96.4 x 79.8 mm",
                        "Weight" => "723g (body only)"
                    ]),
                    'type' => 'Mirrorless'
                ],
                [
                    'model' => 'Sony RX100 Mark VII 20.2MP UHD 4k HDR',
                    'price' => 1100,
                    'description' => 'The Sony RX100 Mark VII is a premium compact camera with a 20.2 MP sensor, featuring a 24-200mm zoom lens, UHD 4K HDR video recording, and fast autofocus, making it ideal for both photography and vlogging.',
                    'photo' => 'photos/sonyBody/sonyRX100.webp',
                    'specifications' => json_encode([
                        "Sensor" => "20.2 MP 1-inch Exmor RS CMOS sensor",
                        "Lens" => "24-200mm equivalent f/2.8-4.5 lens",
                        "Video" => "UHD 4K HDR video recording at up to 30fps with 10-bit 4:2:2 output, Full HD at 120fps for slow-motion",
                        "Display" => "3.0-inch tilting LCD touchscreen with 921,600 dots",
                        "ISO" => "125-12,800, offering excellent low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth, USB-C, HDMI, and NFC for easy sharing and remote control",
                        "BurstShooting" => "Up to 20 fps continuous shooting with the electronic shutter",
                        "Stabilization" => "Optical SteadyShot image stabilization for steady handheld shots",
                        "Dimensions" => "102.0 x 58.1 x 41.0 mm",
                        "Weight" => "302g (with battery and memory card)"
                    ]),
                    'type' => 'Compact'
                ],
                [
                    'model' => 'Pentax WG1000 Subacvatic 16MP',
                    'price' => 260,
                    'description' => 'The Pentax WG100 is a rugged, waterproof camera with a 16 MP sensor, designed for underwater and outdoor photography, offering durability and high-quality images in extreme conditions.',
                    'photo' => 'photos/pentaxBody/pentaxWG100.webp',
                    'specifications' => json_encode([
                        "Sensor" => "16 MP CCD sensor",
                        "Lens" => "5x optical zoom lens (28-140mm equivalent), f/3.5-5.5 aperture",
                        "Video" => "HD 720p video recording at 30fps",
                        "Display" => "2.7-inch LCD screen with 230,000 dots",
                        "ISO" => "100-1600, suitable for a variety of lighting conditions",
                        "Connectivity" => "No Wi-Fi or Bluetooth connectivity",
                        "BurstShooting" => "Up to 1 fps continuous shooting",
                        "Stabilization" => "Digital image stabilization for sharper images",
                        "Dimensions" => "108 x 61 x 27.5 mm",
                        "Weight" => "191g (with battery and memory card)"
                    ]),
                    'type' => 'Compact'
                ],
                [
                    'model' => 'Pentax WG-8 Subacvatic Rezistent la Socuri 20MP',
                    'price' => 500,
                    'description' => 'The Pentax WG-8 is a rugged, waterproof camera with a 20 MP sensor, 5x optical zoom, and shock resistance, designed for capturing high-quality photos and videos in extreme conditions. Perfect for outdoor and underwater adventures.',
                    'photo' => 'photos/pentaxBody/pentaxWG8.webp',
                    'specifications' => json_encode([
                        "Sensor" => "20 MP CMOS sensor",
                        "Lens" => "5x optical zoom lens (28-140mm equivalent), f/3.5-5.5 aperture",
                        "Video" => "Full HD 1080p video recording at 30fps",
                        "Display" => "3.0-inch LCD screen with 460,000 dots",
                        "ISO" => "125-6400, allowing for good performance in various lighting conditions",
                        "Connectivity" => "No Wi-Fi or Bluetooth connectivity",
                        "BurstShooting" => "Up to 1 fps continuous shooting",
                        "Stabilization" => "Digital image stabilization to reduce blur",
                        "Dimensions" => "116.5 x 58.5 x 27.5 mm",
                        "Weight" => "203g (with battery and memory card)"
                    ]),
                    'type' => 'Compact'
                ],
                [
                    'model' => 'Pentax WG-90 Subacvatic 16MP',
                    'price' => 400,
                    'description' => 'The Pentax WG-90 is a rugged, waterproof camera with a 16 MP sensor and 5x optical zoom, designed for underwater and outdoor photography in extreme conditions, available in a vibrant blue color.',
                    'photo' => 'photos/pentaxBody/pentaxWG90.webp',
                    'specifications' => json_encode([
                        "Sensor" => "16 MP CMOS sensor",
                        "Lens" => "5x optical zoom lens (28-140mm equivalent), f/3.5-5.5 aperture",
                        "Video" => "Full HD 1080p video recording at 30fps",
                        "Display" => "2.7-inch LCD screen with 230,000 dots",
                        "ISO" => "125-6400 for versatile low-light shooting",
                        "Connectivity" => "No Wi-Fi or Bluetooth",
                        "BurstShooting" => "Up to 1 fps continuous shooting",
                        "Stabilization" => "Digital image stabilization for clearer, sharper images",
                        "Dimensions" => "111.8 x 58.5 x 29.5 mm",
                        "Weight" => "193g (with battery and memory card)"
                    ]),
                    'type' => 'Compact'
                ],
                [
                    'model' => 'Pentax KF 24.24MP Full HD',
                    'price' => 1000,
                    'description' => 'The Pentax KF is a versatile DSLR with a 24.24 MP APS-C sensor, offering Full HD video recording and advanced autofocus, perfect for both photography enthusiasts and videographers looking for high-quality performance.',
                    'photo' => 'photos/pentaxBody/pentaxKF.webp',
                    'specifications' => json_encode([
                        "Sensor" => "24.24 MP APS-C CMOS sensor",
                        "Lens" => "Compatible with Pentax K-mount lenses",
                        "Video" => "Full HD 1080p video recording at 30fps",
                        "Display" => "3.0-inch LCD screen with 921,000 dots",
                        "ISO" => "100-51,200 (expandable to 50-204,800) for good low-light performance",
                        "Connectivity" => "Wi-Fi, USB 2.0, HDMI output for easy sharing and remote control",
                        "BurstShooting" => "Up to 6 fps continuous shooting",
                        "Stabilization" => "In-body image stabilization (Shake Reduction) for smoother shots",
                        "Dimensions" => "131.5 x 101.5 x 76.0 mm",
                        "Weight" => "590g (body only)"
                    ]),
                    'type' => 'DSLR'
                ],
                [
                    'model' => 'Ricoh G900SE Subacvatic Rezistent la Socuri 20MP',
                    'price' => 900,
                    'description' => 'The Ricoh G900SE is a rugged, waterproof, and shockproof 20 MP camera, designed for use in extreme environments, offering durability and high-quality imaging for outdoor and industrial applications.',
                    'photo' => 'photos/ricohBody/ricohG900SE.webp',
                    'specifications' => json_encode([
                        "Sensor" => "20 MP CMOS sensor",
                        "Lens" => "5x optical zoom lens (28-140mm equivalent), f/2.8-4.9 aperture",
                        "Video" => "Full HD 1080p video recording at 30fps",
                        "Display" => "3.0-inch LCD screen with 920,000 dots",
                        "ISO" => "125-6400 for low-light performance",
                        "Connectivity" => "Wi-Fi, Bluetooth for wireless sharing and remote control",
                        "BurstShooting" => "Up to 5 fps continuous shooting",
                        "Stabilization" => "Digital image stabilization to reduce blurring",
                        "Dimensions" => "119.0 x 64.5 x 31.4 mm",
                        "Weight" => "246g (with battery and memory card)"
                    ]),
                    'type' => 'Compact'
                ],
                [
                    'model' => 'Ricoh GR III Diary Edition 24.2MP',
                    'price' => 1200,
                    'description' => 'The Ricoh GR III Diary Edition is a compact 24.2 MP camera designed for everyday photography, featuring a fast 28mm f/2.8 lens and advanced image processing for exceptional detail and clarity. Its sleek, stylish design is perfect for street and travel photographers.',
                    'photo' => 'photos/ricohBody/ricohGRDiary.webp',
                    'specifications' => json_encode([
                        "Sensor" => "24.2 MP APS-C CMOS sensor",
                        "Lens" => "28mm equivalent f/2.8 lens (fixed lens)",
                        "Video" => "Full HD 1080p video recording at 60fps",
                        "Display" => "3.0-inch LCD touchscreen with 1.037 million dots",
                        "ISO" => "100-102,400, offering excellent performance in low-light conditions",
                        "Connectivity" => "Wi-Fi and Bluetooth for easy file transfer and remote control",
                        "BurstShooting" => "Up to 4 fps continuous shooting",
                        "Stabilization" => "3-axis in-body image stabilization (IBIS)",
                        "Dimensions" => "109.4 x 61.9 x 33.2 mm",
                        "Weight" => "257g (with battery and memory card)"
                    ]),
                    'type' => 'Compact'
                ],
                [
                    'model' => 'Ricoh GR III 24.2MP Full HD',
                    'price' => 1200,
                    'description' => 'The Ricoh GR III is a compact 24.2 MP camera with a fast 28mm f/2.8 lens, offering superb image quality and portability for street and everyday photography. It also features Full HD video recording and in-body image stabilization for steady shots.',
                    'photo' => 'photos/ricohBody/ricohGR.webp',
                    'specifications' => json_encode([
                        "Sensor" => "24.2 MP APS-C CMOS sensor",
                        "Lens" => "28mm equivalent f/2.8 lens (fixed lens)",
                        "Video" => "Full HD 1080p video recording at 60fps",
                        "Display" => "3.0-inch LCD touchscreen with 1.037 million dots",
                        "ISO" => "100-102,400, offering excellent performance in low-light conditions",
                        "Connectivity" => "Wi-Fi and Bluetooth for easy file transfer and remote control",
                        "BurstShooting" => "Up to 4 fps continuous shooting",
                        "Stabilization" => "3-axis in-body image stabilization (IBIS)",
                        "Dimensions" => "109.4 x 61.9 x 33.2 mm",
                        "Weight" => "257g (with battery and memory card)"
                    ]),
                    'type' => 'Compact'
                ],
                [
                    'model' => 'Polaroid Now+ Instant i-Type White',
                    'price' => 130,
                    'description' => 'The Polaroid Now+ is a stylish instant camera that uses i-Type film to capture vibrant photos with ease. Its Bluetooth connectivity allows for creative control via a mobile app, offering a modern twist on classic instant photography.',
                    'photo' => 'photos/polaroidBody/polaroidNow.webp',
                    'specifications' => json_encode([
                        "Sensor" => "No sensor, uses instant film (i-Type)",
                        "Lens" => "35mm f/2.0 lens (fixed lens)",
                        "Video" => "No video recording capability",
                        "Display" => "No LCD display, only viewfinder",
                        "ISO" => "Varies based on film type (typically 640 ISO for i-Type film)",
                        "Connectivity" => "Bluetooth for mobile app control",
                        "BurstShooting" => "No burst shooting mode",
                        "Stabilization" => "No digital stabilization",
                        "Dimensions" => "107.8 x 94.8 x 61.0 mm",
                        "Weight" => "432g (with battery and film)"
                    ]),
                    'type' => 'Film'
                ],
                [
                    'model' => 'Polaroid Go Instant Black',
                    'price' => 100,
                    'description' => 'The Polaroid Go Instant Black is a compact instant camera that delivers instant photos in a portable size. It features a stylish design, simple operation, and produces classic square-format prints for capturing moments on the go.',
                    'photo' => 'photos/polaroidBody/polaroidGo.webp',
                    'specifications' => json_encode([
                        "Sensor" => "N/A (Instant film camera)",
                        "Lens" => "Fixed lens, 35mm equivalent",
                        "Video" => "N/A (Instant photo camera)",
                        "Display" => "N/A (No LCD screen)",
                        "ISO" => "Auto ISO (varies depending on lighting conditions)",
                        "Connectivity" => "No connectivity features (No Wi-Fi or Bluetooth)",
                        "BurstShooting" => "N/A (Single photo per exposure)",
                        "Stabilization" => "No image stabilization",
                        "Dimensions" => "102 x 83.5 x 49.5 mm",
                        "Weight" => "242g (with battery and film)"
                    ]),
                    'type' => 'Film'
                ],
                [
                    'model' => 'Polaroid OneStep 2 Viewfinder Instant Red',
                    'price' => 150,
                    'description' => 'The Polaroid OneStep 2 Viewfinder Instant Red is a classic instant camera that combines vintage style with modern features. It offers easy-to-use functionality, producing high-quality instant photos with its built-in viewfinder and powerful flash.',
                    'photo' => 'photos/polaroidBody/polaroidOneStep.webp',
                    'specifications' => json_encode([
                        "Sensor" => "No sensor (instant film camera)",
                        "Lens" => "Effective focal length 106mm, f/11 aperture",
                        "Video" => "No video recording",
                        "Display" => "Viewfinder for framing your shots",
                        "ISO" => "ISO 640 for optimal photo quality",
                        "Connectivity" => "No connectivity options (standalone instant camera)",
                        "BurstShooting" => "Single shot per press",
                        "Stabilization" => "No digital image stabilization",
                        "Dimensions" => "150 x 110 x 96 mm",
                        "Weight" => "460g (with film pack)"
                    ]),
                    'type' => 'Film'
                ],
                [
                    'model' => 'Polaroid I-2 Instant Black',
                    'price' => 700,
                    'description' => 'The Polaroid I-2 Instant Black is a high-quality instant camera with advanced features, including manual controls for exposure, focus, and shutter speed, giving photographers full creative control. Its sleek black design and compatibility with i-Type and 600 film make it a versatile choice for instant photography enthusiasts.',
                    'photo' => 'photos/polaroidBody/polaroidI-2.webp',
                    'specifications' => json_encode([
                        "Sensor" => "1250 x 1250 pixels image sensor",
                        "Lens" => "Polaroid I-2 lens with manual focus control, 75mm f/8",
                        "Video" => "N/A",
                        "Display" => "No display, manual viewfinder",
                        "ISO" => "Fixed ISO 640 (ideal for instant film)",
                        "Connectivity" => "Bluetooth for remote control and app integration",
                        "BurstShooting" => "No burst shooting feature",
                        "Stabilization" => "Manual stabilization settings (no electronic image stabilization)",
                        "Dimensions" => "150.2 x 110.5 x 83.5 mm",
                        "Weight" => "623g (with battery and film)"
                    ]),
                    'type' => 'Film'
                ],
                [
                    'model' => 'Kodak M35 Film 35mm Mint Green',
                    'price' => 35,
                    'description' => 'The Kodak M35 Film Camera in Mint Green is a simple and stylish 35mm film camera, perfect for both beginners and film enthusiasts. It offers manual operation and delivers vibrant, nostalgic analog photos with ease.',
                    'photo' => 'photos/kodakBody/kodakM35.webp',
                    'specifications' => json_encode([
                        "Sensor" => "No sensor -> 35mm color or black and white film",
                        "Lens" => "Fixed focus lens",
                        "Shutter Speed" => "1/90 sec",
                        "ISO" => "ISO 200-400 recommended for best results",
                        "Flash" => "Built-in flash for low-light photography",
                        "Viewfinder" => "Simple viewfinder",
                        "Dimensions" => "120 x 60 x 40 mm",
                        "Weight" => "Approx. 120g (without film)"
                    ]),
                    'type' => 'Film'
                ],
                [
                    'model' => 'Kodak Fun Saver 27+12 Film Disposable',
                    'price' => 25,
                    'description' => 'The Kodak Fun Saver 27+12 is a disposable 35mm film camera, perfect for casual photography. It comes preloaded with color ISO 800 film, offering 39 exposures for vibrant images. Ideal for vacations, events, or everyday moments, it is a simple and affordable choice for film enthusiasts.',
                    'photo' => 'photos/kodakBody/kodakFunSaver.webp',
                    'specifications' => json_encode([
                        "Sensor" => "No sensor -> 35mm color or black and white film",
                        "Lens" => "Fixed focus lens",
                        "Shutter Speed" => "1/90 sec",
                        "ISO" => "ISO 800 (preloaded film)",
                        "Flash" => "Built-in flash for low-light photography",
                        "Viewfinder" => "Simple viewfinder",
                        "Dimensions" => "120 x 60 x 40 mm",
                        "Weight" => "Approx. 120g (without film)"
                    ]),
                    'type' => 'Film'
                ],
                [
                    'model' => 'Kodak Ultra F9 Disposable Green',
                    'price' => 60,
                    'description' => 'The Kodak Ultra F9 is a reusable 35mm film camera designed for casual photographers. With its simple design and compact size, it offers easy handling and the ability to capture vibrant, high-quality photos. Its green color adds a stylish touch, making it perfect for both beginners and film enthusiasts.',
                    'photo' => 'photos/kodakBody/kodakUltra.webp',
                    "specifications" => json_encode([
                        "Sensor" => "No sensor -> 35mm color or black and white film",
                        "Lens" => "Fixed focus lens",
                        "Shutter Speed" => "1/90 sec",
                        "ISO" => "ISO 200-400 recommended for best results",
                        "Flash" => "Built-in flash for low-light photography",
                        "Viewfinder" => "Simple viewfinder",
                        "Dimensions" => "120 x 60 x 40 mm",
                        "Weight" => "Approx. 120g (without film)"
                    ]),
                    'type' => 'Film'
                ],
            ];
        foreach ($models as $modelData) {
            Camera::updateOrCreate(
                ['model' => $modelData['model']], // Căutăm modelul existent
                $modelData // Dacă există, actualizăm datele, altfel le creăm
            );
        }
    }
}
