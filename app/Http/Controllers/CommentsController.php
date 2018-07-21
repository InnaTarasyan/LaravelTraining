<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Auth;
use Response;
use Validator;
use App\Comment;

class CommentsController extends Controller
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
        $data = $request->except('_token', 'comment_post_ID', 'comment_parent');
        $data['application_id'] = $request->input('comment_post_ID');
        $data['parent_id'] = $request->input('comment_parent');

        $messages = [
            'required' => 'Поле :attribute обязательно',
            'email' => 'Неверный : attribute емаил'
        ];
        $validator = Validator::make($data, [
            'application_id' => 'integer|required',
            'parent_id' => 'integer|required',
            'text' => 'string|required'

        ], $messages);

        $validator->sometimes(['name', 'email'], 'max:255|required', function ($input){
            return !Auth::check();
        }, $messages);

        if ($validator->fails()){
            return Response::json(['error' => $validator->errors()->all()]);
        }

        $user = Auth::user();
        $comment = new Comment($data);

        if($user){
            $comment->user_id = $user->id;
        }

        $post = Application::find($data['application_id']);
        $post->comments()->save($comment);
        $comment->load('user');

        $data['id'] = $comment->id;
        $data['email'] = (!empty($data['email'])) ? $data['email'] : $comment->user->email;
        $data['name'] = (!empty($data['name'])) ? $data['name'] : $comment->user->name;
        $data['hash'] = md5($data['email']);
        $data['created_at'] = $comment->created_at;

        $view_comment = view('theme.content_one_comment')
            ->with(['data' => $data])
            ->render();

        return Response::json(['success' => TRUE, 'comment' => $view_comment, 'data' => $data]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
