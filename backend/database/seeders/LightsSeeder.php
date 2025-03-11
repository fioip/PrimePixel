<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lights;

class LightsSeeder extends Seeder
{

    public function run(): void
    {
        Lights::truncate();

        $models =
            [
                [
                    'model' => 'Godox SA-17 Bowens Mount to S30 Mount Adapter',
                    'price' => 60,
                    'description' => 'The Godox SA-17 Adaptor is designed to convert the Bowens mount to the S30 mount, allowing compatibility with the Godox S30 Spotlight. This adapter features a durable build, ensuring secure attachment and stable performance. Ideal for photographers looking to use Bowens-mount modifiers with the S30, it provides flexibility in light-shaping options. Its compact design allows for easy setup and portability.',
                    'photo' => 'photos/godoxLights/godoxReflectorSA17.webp',
                    'specifications' => json_encode([
                        "Compatibility" => "Converts from Bowens mount to Godox S30 mount for light modifier use",
                        "Build Quality" => "Durable, high-quality construction for secure attachment and long-lasting use",
                        "Mount Type" => "Bowens to S30 conversion, allowing Bowens-mount accessories to work with the Godox S30",
                        "Size" => "Compact and lightweight for easy portability and setup",
                        "Secure Locking" => "Reliable locking mechanism ensures a tight and stable connection",
                        "Ease of Use" => "Simple, tool-free installation and quick setup/removal",
                        "Versatility" => "Compatible with various Bowens-mount accessories for flexible lighting options",
                        "Adjustability" => "Allows light positioning and shaping when used with compatible S30 modifiers",
                        "Professional Design" => "Engineered for the needs of both photographers and videographers",
                        "Compatibility with S30 Accessories" => "Ensures full compatibility with Godox S30's light modifiers and accessories"
                    ]),
                    'type' => 'Reflector',
                ],
                [
                    'model' => 'Godox S30 LED Spotlight with Focusing Lens',
                    'price' => 270,
                    'description' => 'The Godox S30 LED Spotlight with Focusing Lens is a versatile lighting solution designed for precision lighting control. It features a powerful LED light source, offering adjustable beam angles from spot to flood, perfect for creative lighting effects and detailed product photography. With its focusing lens, it allows for fine-tuned light shaping and a high level of focus. The compact design ensures portability, making it ideal for both studio and on-location shoots.',
                    'photo' => 'photos/godoxLights/godoxLEDS30.webp',
                    'specifications' => json_encode([
                        "Light Source" => "Powerful LED light with adjustable beam angle from spot to flood for precise control",
                        "Focusing Lens" => "Equipped with a focusing lens for fine-tuned light shaping and focus adjustments",
                        "Build Quality" => "Durable, high-quality construction for long-lasting performance and reliable use",
                        "Size" => "Compact and lightweight, ensuring easy portability and quick setup",
                        "Light Intensity" => "Offers adjustable brightness for optimal control over lighting effects",
                        "Versatility" => "Ideal for creative lighting effects, product photography, and videography",
                        "Adjustability" => "Allows precise control of beam angle and light focus with the integrated focusing lens",
                        "Compatibility" => "Compatible with Godox S30 accessories, ensuring flexibility in light shaping",
                        "Professional Design" => "Engineered for both professional photographers and videographers, ideal for studio and location use",
                        "Color Temperature" => "Stable color temperature of 6000K for consistent, natural lighting"
                    ]),
                    'type' => 'LED',
                ],
                [
                    'model' => 'Godox LR120B LED Ring Light',
                    'price' => 30,
                    'description' => 'The Godox LR120B LED Ring Light is a versatile lighting solution designed for even, soft illumination. It features adjustable brightness and color temperature, making it ideal for portraits, vlogging, beauty shoots, and product photography. With a circular design, it provides flattering light with minimal shadows, ensuring a professional look. The lightweight and portable design makes it easy to use for both studio and on-the-go setups.',
                    'photo' => 'photos/godoxLights/godoxLEDLR120B.webp',
                    'specifications' => json_encode([
                        "Light Source" => "120W LED ring light providing soft, even illumination for portraits and vlogging",
                        "Build Quality" => "Durable and high-quality construction designed for long-lasting use",
                        "Size" => "Compact and lightweight, perfect for portability and easy setup",
                        "Brightness Control" => "Adjustable brightness for optimal lighting in various conditions",
                        "Color Temperature" => "Adjustable color temperature (3000K-6000K) to match different shooting environments",
                        "Ease of Use" => "Simple and user-friendly operation with intuitive controls for brightness and temperature",
                        "Mount Type" => "Standard 1/4 inch thread for camera and tripod compatibility",
                        "Versatility" => "Ideal for portraits, beauty shots, product photography, and vlogging",
                        "Professional Design" => "Engineered to meet the needs of both professional photographers and videographers",
                        "Power Source" => "Powered by AC adapter for consistent, reliable power during long shooting sessions"
                    ]),
                    'type' => 'LED',
                ],
                [
                    'model' => 'Nanlite FS-300 Lampa LED Daylight 330W',
                    'price' => 340,
                    'description' => 'The Nanlite FS-300 LED Daylight 330W is a powerful and versatile lighting solution designed for professional photography and videography. With a daylight-balanced color temperature of 5600K, it provides bright, consistent light perfect for studio and location work. The 330W output delivers high-intensity illumination, while the compact design ensures portability and ease of use. Its advanced features, such as quiet operation and reliable performance, make it an excellent choice for demanding lighting environments.',
                    'photo' => 'photos/nanliteLights/nanliteLEDFS300.webp',
                    'specifications' => json_encode([
                        "Light Source" => "Powerful 330W LED providing bright, daylight-balanced 5600K light for various applications",
                        "Build Quality" => "Durable construction built to withstand regular use in professional environments",
                        "Size" => "Compact and lightweight design, ideal for easy transport and quick setup",
                        "Cooling System" => "Quiet operation with efficient cooling, ensuring reliable performance during long shoots",
                        "Ease of Use" => "User-friendly controls for easy brightness adjustments and smooth operation",
                        "Brightness Control" => "Adjustable intensity with a wide dimming range to match different lighting needs",
                        "Versatility" => "Compatible with Bowens-mount modifiers for flexible light shaping options",
                        "Adjustability" => "Provides precise control over lighting direction and intensity when used with modifiers",
                        "Professional Design" => "Engineered for professional photographers and videographers who require reliable lighting",
                        "Power Source" => "Powered by AC adapter for consistent, stable power during extended shoots"
                    ]),
                    'type' => 'LED',
                ],
                [
                    'model' => 'Nanlite LitoLite 5C RGBWW Lampa LED RGB 2700-7500K',
                    'price' => 70,
                    'description' => 'The Nanlite LitoLite 5C RGBWW LED Light offers versatile and dynamic lighting options with a wide color temperature range of 2700K to 7500K. This compact, portable light features RGB capabilities, allowing users to create a variety of colors and effects for creative control. Its lightweight design and ease of use make it ideal for both photographers and videographers, offering high-quality, adjustable lighting for a wide range of shooting scenarios. Perfect for on-the-go shoots, it provides excellent flexibility in any lighting environment.',
                    'photo' => 'photos/nanliteLights/nanliteLED5C.webp',
                    'specifications' => json_encode([
                        "Light Source" => "RGBWW LED with adjustable color temperature from 2700K to 7500K and full RGB color range",
                        "Build Quality" => "Compact and durable design, built to withstand regular use in various environments",
                        "Size" => "Small, portable, and lightweight, making it ideal for on-the-go shoots and travel",
                        "Ease of Use" => "Intuitive controls for easy adjustment of brightness, color temperature, and effects",
                        "RGB Capabilities" => "Provides full RGB color options for creative lighting effects and color control",
                        "Versatility" => "Perfect for a wide range of applications, from product photography to video lighting",
                        "Adjustability" => "Precise control over light output, color temperature, and hue for flexible lighting options",
                        "Power Source" => "Rechargeable battery for wireless operation or AC power for extended use",
                        "Professional Design" => "Engineered for both photographers and videographers seeking flexible, high-quality lighting",
                        "Mount Type" => "Includes 1/4-inch threaded mount for easy attachment to light stands or other gear"
                    ]),
                    'type' => 'LED',
                ],
                [
                    'model' => 'NanLite Standard 45° Reflector for Forza 60',
                    'price' => 25,
                    'description' => 'The NanLite Standard 45° Reflector for Forza 60 is designed to enhance the light output and control of the Forza 60 LED light. It provides a focused beam with a 45° spread, ideal for creating directional lighting in studio or on-location setups. This reflector helps to produce a more intense, concentrated light, improving contrast and shadow detail. Its durable construction ensures reliable performance in various shooting environments.',
                    'photo' => 'photos/nanliteLights/nanliteReflector.webp',
                    'specifications' => json_encode([
                        "Compatibility" => "Designed specifically for the NanLite Forza 60 LED light, ensuring optimal fit and performance",
                        "Build Quality" => "Constructed with durable, high-quality materials for secure attachment and long-lasting use",
                        "Size" => "Compact and lightweight, making it easy to transport and set up in various environments",
                        "Secure Locking" => "Features a reliable locking mechanism for a stable and secure connection to the Forza 60",
                        "Ease of Use" => "Easy to install and remove with no tools required, ensuring quick setup during shoots",
                        "Versatility" => "Ideal for producing a concentrated, focused light beam with a 45° spread for versatile lighting control",
                        "Adjustability" => "Allows precise control over the light beam for different lighting effects and applications",
                        "Professional Design" => "Engineered for professional photographers and videographers seeking reliable and focused lighting",
                        "Light Control" => "Provides excellent control over light output, improving contrast and shadow details",
                        "Compatibility with Forza 60" => "Designed specifically to work seamlessly with the NanLite Forza 60 LED light for optimized results"
                    ]),
                    'type' => 'Reflector',
                ],
                [
                    'model' => 'Godox AD-R14 Reflector Kit with Grid and Filters for AD300PRO',
                    'price' => 25,
                    'description' => 'The Godox AD-R14 Reflector Kit with Grid and Filters for AD300PRO is a versatile lighting accessory designed to enhance the performance of the AD300PRO. The kit includes a 14-inch reflector, a honeycomb grid, and various color filters, offering precise control over light direction and intensity. Ideal for creating focused, dramatic lighting, it allows for versatile setups in studio and on-location shoots. The grid and filters provide added flexibility for shaping light and achieving creative effects.',
                    'photo' => 'photos/godoxLights/godoxReflectorADR14.webp',
                    'specifications' => json_encode([
                        "Compatibility" => "Designed specifically for the Godox AD300PRO, providing optimal light control and performance",
                        "Build Quality" => "Durable, high-quality construction ensuring secure attachment and long-lasting use",
                        "Size" => "Compact and lightweight, perfect for easy portability and setup in various shooting environments",
                        "Secure Locking" => "Reliable locking mechanism ensures a stable, secure fit with the AD300PRO light",
                        "Ease of Use" => "Simple, tool-free installation for quick and hassle-free setup and removal",
                        "Versatility" => "Includes a reflector, honeycomb grid, and color filters for flexible light shaping and creative effects",
                        "Adjustability" => "The grid and filters allow for precise control over light intensity, direction, and color",
                        "Professional Design" => "Engineered for professional photographers and videographers seeking reliable and versatile lighting",
                        "Light Control" => "Provides enhanced light control for dramatic lighting effects and detailed work",
                        "Compatibility with AD300PRO" => "Perfectly designed to work seamlessly with the Godox AD300PRO for optimal results"
                    ]),
                    'type' => 'Reflector',
                ],
            ];
        foreach ($models as $modelData) {
            Lights::updateOrCreate(
                ['model' => $modelData['model']], // Căutăm modelul existent
                $modelData // Dacă există, actualizăm datele, altfel le creăm
            );
        }
    }
}
