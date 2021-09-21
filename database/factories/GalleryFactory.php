<?php

namespace Database\Factories;

use App\Models\Gallery;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    private $image_urls = [
        'https://scontent.fbeg2-1.fna.fbcdn.net/v/t1.6435-9/224900190_2848090155504149_810355752052881063_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=730e14&_nc_ohc=zzLhWcFIxl0AX8tWIzW&_nc_ht=scontent.fbeg2-1.fna&oh=2bd19507e228a036f1c2952e25531337&oe=616E2DB5',
        'https://www.tednasmith.com/wp-content/uploads/2020/12/TN-He-Beheld-a-Vision-of-Gondolin-Amid-the-Snow.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Minas_Tirith_at_Dawn.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Tuor_Reaches_the_Hidden_City_of_Gondolin.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Finduilas_is_Led_Past_Turin_at_Nargothrond.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Luthien_Escapes_the_Treehouse.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Turin_Bears_Gwindor_to_Safety1.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Flight_of_the_Doomed.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Tuor_is_Led_by_the_Swans_to_Vinyamar.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Up_the_Rainy_Stairs.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Huans_Leap.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Burning_Ships.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-At_Tarn_Aeluim.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-The_Nauglamir.jpg',
        'http://tednasmith.poverellomedia.com/wp-content/uploads/2012/07/TN-Tinuviel_Reborn.jpg',
        'https://www.tednasmith.com/wp-content/uploads/2021/02/TN-Luthien-at-Tol-Galen-2020.jpg',
        'https://www.tednasmith.com/wp-content/uploads/2019/12/TN-Annuminas.jpg',
        'https://www.tednasmith.com/wp-content/uploads/2019/02/TN-Turgon_at_Fingolfins_Cairn.jpg'
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4, true),
            'description' => $this->faker->text(1000),
            'imageUrl' => $this->faker->randomElement($this->image_urls),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
