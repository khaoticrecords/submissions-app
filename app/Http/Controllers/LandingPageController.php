<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LandingPageController extends Controller
{
    public function get_LandingPage(Request $request)
    {


        return view('welcome', [
            'events' => [],

            'featuredRelease' => (object) [
                'name' => 'Grab The Summer',
                'artist' => 'Chris Khaos',
                'imgUrl' => url('storage/album-arts/grab-the-summer.jpg'),
                'description' => "Here's a little bit of musical sunshine to brighten up your day. Chris Khaos' first release on Khaotic records. \"Grab The Summer\" is a beautiful deep tropical house song that will surely bring those summer vibes to your ear-holes.<br /><br />Available everywhere music is streamed or sold September 21!"
            ],
            'newsCarouselItems' => [
                (object)[
                    'imgUrl' => url('storage/album-arts/pablo.jpg'),
                    'altText' => 'Dancehall Ting',
                    'title' => 'Upcoming Release: Dancehall Ting',
                    'fields' => [
                        (object)['label' => 'Track Title', 'value' => 'Dancehall Ting'],
                        (object)['label' => 'Artist', 'value' => 'Pablo Ricardo'],
                        (object)['label' => 'Release ID', 'value' => 'KR002'],
                        (object)['label' => 'Release Date', 'value' => 'October 06, 2017'],
                        (object)[
                            'label' => 'Description',
                            'value' => 'We would like to welcome Pablo Ricardo to the Khaotic Records family with his debut track "Dancehall Ting" being released everywhere music is sold and streamed October 06, 2017.'
                        ],
                    ],
                ],
                (object)[
                    'imgUrl' => url('storage/album-arts/bubble-gum.jpg'),
                    'altText' => 'All Out of Bubble Gum (Chris Ruskai)',
                    'title' => 'Upcoming Release: All Out of Bubblegum',
                    'fields' => [
                        (object)['label' => 'Track Title', 'value' => 'All Out of Bubblegum'],
                        (object)['label' => 'Artist', 'value' => 'Chris Ruskai'],
                        (object)['label' => 'Release ID', 'value' => 'KR005'],
                        (object)['label' => 'Release Date', 'value' => 'October 27, 2017'],
                        (object)[
                            'label' => 'Description',
                            'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
                        ],
                    ],
                ],


                (object)[
                    'imgUrl' => url('storage/news/kr-no5.jpg'),
                    'altText' => 'KR DJTunes Graphic',
                    'title' => 'Grab The Summer - No. 5 DjTunes',
                    'fields' => [
                        (object)[
                            'label' => 'Description',
                            'value' => 'Grab The Summer by Chris Khaos reached the #5 slot of DJTUNES top 100 house chart and is now sitting at #16 overall. Stay tuned, there\'s still much more to come!
"Grab the Summer" is available now, everywhere music is sold or streamed!'
                        ],
                    ],
                ],


            ]
        ]);
    }
}
