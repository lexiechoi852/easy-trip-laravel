<?php

namespace Database\Seeders;

use App\Models\Attraction;
use Illuminate\Database\Seeder;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attraction::create([
            'name' => 'Royal Ontario Museum',
            'description' => "The Royal Ontario Museum is a museum of art, world culture and natural history in Toronto, Ontario, Canada. It is one of the largest museums in North America and the largest in Canada. It attracts more than one million visitors every year, making the ROM the most-visited museum in Canada. The museum is north of Queen's Park, in the University of Toronto district, with its main entrance on Bloor Street West. Museum subway station is named after the ROM and, since a 2008 renovation, is decorated to resemble the institution's collection at the platform level. Established on April 16, 1912, and opened on March 19, 1914, the museum has maintained close relations with the University of Toronto throughout its history, often sharing expertise and resources. The museum was under the direct control and management of the University of Toronto until 1968, when it became an independent Crown agency of the Government of Ontario. Today, the museum is Canada's largest field-research institution, with research and conservation activities around the world",
            'postal_code' => 'M5S2C6',
            'address' => "100 Queen's Park",
            'place_id' => 'ChIJE-Xa87o0K4gRkvXFHuE0hMk',
            'latitude' => 43.66771,
            'longitude' => -79.394777,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Royal_Ontario_Museum_in_Fall_2021.jpg/1920px-Royal_Ontario_Museum_in_Fall_2021.jpg',
            'url' => 'www.rom.on.ca',
            'country_code' => '1',
            'telephone' => '4165868000',
            'city' => 'Toronto'
        ]);

        Attraction::create([
            'name' => 'CN Tower',
            'description' => "The CN Tower is a 553.3 m-high concrete communications and observation tower in downtown Toronto, Ontario, Canada. Built on the former Railway Lands, it was completed in 1976. Its name \"CN\" referred to Canadian National, the railway company that built the tower. Following the railway's decision to divest non-core freight railway assets prior to the company's privatization in 1995, it transferred the tower to the Canada Lands Company, a federal Crown corporation responsible for real estate development. The CN Tower held the record for the world's tallest free-standing structure for 32 years, from 1975 until 2007, when it was surpassed by the Burj Khalifa, and was the world's tallest tower until 2009 when it was surpassed by the Canton Tower. It is currently the tenth-tallest free-standing structure in the world and remains the tallest free-standing structure on land in the Western Hemisphere. In 1995, the CN Tower was declared one of the modern Seven Wonders of the World by the American Society of Civil Engineers. It also belongs to the World Federation of Great Towers. It is a signature icon of Toronto's skyline and attracts more than two million international visitors annually.",
            'postal_code' => 'M5V3L9',
            'address' => "290 Bremner Boulevard",
            'place_id' => 'ChIJmzrzi9Y0K4gRgXUc3sTY7RU',
            'latitude' => 43.642566,
            'longitude' => -79.387057,
            'image' => 'https://www.cntower.ca/sites/default/files/styles/16_9_scale_and_crop_large/public/images/explore-cn-tower%20.jpg?h=5ce0254a&itok=A_rLcJHm',
            'url' => 'www.cntower.ca',
            'country_code' => '1',
            'telephone' => '4168686937',
            'city' => 'Toronto'
        ]);

        Attraction::create([
            'name' => 'St. Lawrence Market',
            'description' => "The St. Lawrence Market South building is a major public market building in Toronto, Ontario, Canada. It is located on the southwest corner of Front and Lower Jarvis Streets. Along with the St. Lawrence Market North and St. Lawrence Hall, it comprises the St. Lawrence Market complex. The current building was opened in 1902, incorporating the 1845 Toronto City Hall building into the structure. The building was restored during the 1970s.",
            'postal_code' => 'M5E1C3',
            'address' => "92 Front Street East",
            'place_id' => 'ChIJWyfdtDHL1IkR_bal8ay1Cso',
            'latitude' => 43.648688,
            'longitude' => -79.371545,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Toronto_-_ON_-_St_Lawrence_Market.jpg/1920px-Toronto_-_ON_-_St_Lawrence_Market.jpg',
            'url' => 'http://www.stlawrencemarket.com',
            'country_code' => '1',
            'telephone' => '4163927219',
            'city' => 'Toronto'
        ]);

        Attraction::create([
            'name' => 'Casa Loma',
            'description' => "Casa Loma is a Gothic Revival castle-style mansion and garden in midtown Toronto, Ontario, Canada, that is now a historic house museum and landmark. It was constructed from 1911 to 1914 as a residence for financier Sir Henry Pellatt. The architect was E. J. Lennox, who designed several other city landmarks.",
            'postal_code' => 'M5R1X8',
            'address' => "1 Austin Terrace",
            'place_id' => 'ChIJs6Elz500K4gRT1jWAsHIfGE',
            'latitude' => 43.678037,
            'longitude' => -79.409444,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Exterior_of_Casa_Loma%2C_June_2012.jpg',
            'url' => 'https://casaloma.ca',
            'country_code' => '1',
            'telephone' => '4169231171',
            'city' => 'Toronto'
        ]);

        Attraction::create([
            'name' => 'Art Gallery of Ontario',
            'description' => "The Art Gallery of Ontario is an art museum in Toronto, Ontario, Canada. The museum is located in the Grange Park neighbourhood of downtown Toronto, on Dundas Street West between McCaul and Beverley streets just east of Chinatown and just west of Little Japan.",
            'postal_code' => 'M5T1G4',
            'address' => "317 Dundas St W",
            'place_id' => 'ChIJvRlT7cU0K4gRr0bg7VV3J9o',
            'latitude' => 43.653607,
            'longitude' => -79.392512,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Staircase_at_Gehry_AGO_Art_Gallery_of_Ontario_Toronto_CA_1981_%284026151746%29.jpg',
            'url' => 'https://www.ripleyaquariums.com/canada',
            'country_code' => '1',
            'telephone' => '6473513474',
            'city' => 'Toronto'
        ]);

        Attraction::create([
            'name' => "Ripley's Aquarium of Canada",
            'description' => "Ripley's Aquarium of Canada is a public aquarium in Toronto, Ontario, Canada. The aquarium is one of three aquariums owned-and-operated by Ripley Entertainment. It is located in downtown Toronto, just southeast of the CN Tower.",
            'postal_code' => 'M5V3L9',
            'address' => "288 Bremner Blvd",
            'place_id' => 'ChIJWwS21dU0K4gRPSGMKRkar40',
            'latitude' => 43.642179,
            'longitude' => -79.386602,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/47/Ripley%27s_Aquarium_of_Canada%2C_Toronto%2C_Ontario.jpg',
            'url' => 'https://ago.ca',
            'country_code' => '1',
            'telephone' => '4169796648',
            'city' => 'Toronto'
        ]);
    }
}
