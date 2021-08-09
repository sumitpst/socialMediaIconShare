<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SocialShareController extends Controller
{
    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

        $shareButtons = \Share::page(
            'https://www.itsolutionstuff.com',
            'Your share text comes here',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        $posts = Post::get();
        return view('socialshare', compact('shareButtons', 'posts'));

    }
}
