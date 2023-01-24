<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostcardRequest;
use App\Models\PostCard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;

class PostcardController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('PostCard/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'recipientName' => 'required|string|max:255',
            'street1'       => 'required|string|max:255',
            'street2'       => 'required|string|max:255',
            'city'          => 'required|string|max:255',
            'state'         => 'required|string|max:255',
            'zip'           => 'required|string|max:5',
            'message'       => 'required|string|max:255',
        ]);
        Postcard::create([
            'recipient_name' => $request->recipientName,
            'street_1' => $request->street1,
            'street_2' => $request->street2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'message' => $request->message,
        ]);

        return redirect()->route('postcards.create');

    }

}
