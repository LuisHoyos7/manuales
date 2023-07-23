<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Agregar el user_id al request (campo 'user_id' en la tabla de comentarios)
        $request->merge(['user_id' => $user->id]);

        $comment = Comment::create($request->all());

        return Redirect::to("/manual/detail/{$request->manual_id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommentController  $commentController
     * @return \Illuminate\Http\Response
     */
    public function show(CommentController $commentController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommentController  $commentController
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentController $commentController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommentController  $commentController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentController $commentController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommentController  $commentController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return Redirect::to("/manual/detail/{$comment->manual_id}");
    }
}
