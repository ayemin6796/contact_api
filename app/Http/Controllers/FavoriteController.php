<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeFavorite(string $id)
    {
        // $user = Auth::user();
        $user = User::with('favorites')->find(Auth::id());
        $favorites = $user->favorites;
        dd($favorites);
        // $contact = Contact::find($id);
        // if (is_null($contact)) {
        //     return response()->json([
        //         'message' => 'Contact ' . $id . ' does not exist.'
        //     ], 404);
        // }

        // $user->favorites->attach($contact);
        // $contact->is_favorite = true;

        // return response()->json([
        //     'message' => 'Add to favorite'
        // ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite $favorite)
    {
        //
    }
}
