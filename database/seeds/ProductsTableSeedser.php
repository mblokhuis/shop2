<?php

Use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeedser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create
        ([
            'name' => 'Mulholland Drive',
            'slug' => 'Mulholland Drive',
            'details' => 'An actress longing to be a star. A woman searching for herself. Both worlds will collide...on Mulholland Drive.',
            'price' => 28,
            'description' => 'After a car wreck on the winding Mulholland Drive renders a woman amnesiac, she and a perky Hollywood-hopeful search for clues and answers across Los Angeles in a twisting venture beyond dreams and reality.',
        ]);
        Product::create
        ([
            'name' => 'Lost Highway',
            'slug' => 'Lost Highway',
            'details' => 'An actress longing to be a star. A woman searching for herself. Both worlds will collide...on Mulholland Drive.',
            'price' => 10,
            'description' => 'After a bizarre encounter at a party, a jazz saxophonist is framed for the murder of his wife and sent to prison, where he inexplicably morphs into a young mechanic and begins leading a new life.',
        ]);
        Product::create
        ([
            'name' => 'Blue Velvet',
            'slug' => 'Blue Velvet',
            'details' => 'It's a strange world.',
            'price' => 6,
            'description' => 'The discovery of a severed human ear found in a field leads a young man on an investigation related to a beautiful, mysterious nightclub singer and a group of psychopathic criminals who have kidnapped her child.',
        ]);
        Product::create
        ([
            'name' => 'Wild at Heart',
            'slug' => 'Wild at Heart',
            'details' => 'A Love Story',
            'price' => 20,
            'description' => 'Young lovers Sailor and Lula run from the variety of weirdos that Lula's mom has hired to kill Sailor.',
        ]);
        Product::create
        ([
            'name' => 'Eraserhead',
            'slug' => 'Eraserhead',
            'details' => 'Be warned. The nightmare has not gone away...',
            'price' => 30,
            'description' => '',
        ]);
        Product::create
        ([
            'name' => 'David Lynch The Art Life',
            'slug' => 'David Lynch The Art Life',
            'details' => 'Documentary',
            'price' => 22,
            'description' => 'Artist and filmmaker David Lynch discusses his early life and the events that shaped his outlook on art and the creative process.',
        ]);
        Product::create
        ([
            'name' => 'Dune',
            'slug' => 'Dune',
            'details' => 'You are about to enter a world where the unexpected, the unknown, and the unbelievable meet.',
            'price' => 10,
            'description' => 'A Duke's son leads desert warriors against the galactic emperor and his father's evil nemesis when they assassinate his father and free their desert world from the emperor's rule.',
        ]);
        Product::create
        ([
            'name' => 'Twin Peaks',
            'slug' => 'Twin Peaks',
            'details' => 'A town where everyone knows everyone and nothing is what it seems.',
            'price' => 30,
            'description' => 'An idiosyncratic FBI agent investigates the murder of a young woman in the even more idiosyncratic town of Twin Peaks.',
        ]);
    }
}

    }
}
