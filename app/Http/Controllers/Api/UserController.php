<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, User $user)
    {
        if ($request->new_password) {
            if (!Hash::check($request->current_password, $user->password)) {
                return response()->json('You entered your current password incorrectly.', 400);
            }

            if ($request->new_password !== $request->new_password_confirmation) {
                return response()->json('Password confirmation does not match', 400);
            }

            $user->password = bcrypt($request->new_password);
        }

        if ($request->email !== $user->email) {
            $user->email = $request->email;
        }

        if ($request->telegram !== $user->telegram) {
            $user->telegram = $request->telegram;
        }

        if ($user->twitter !== $request->twitter) {
            $user->twitter = $request->twitter;
        }

        $user->save();

        return response()->json([
            'message' => 'Successfully saved'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function getProjects($id) {
        return ProjectResource::collection(Project::where('user_id', $id)->get());
    }

    public function getFollowedProjects($userId, Request $request) {
        $user = User::findOrFail($userId);

        $projects = $user->followedProjects();

        $showMore = $projects->count() > $request->limit ? true : false;

        return response()->json([
            'followedProjects' => ProjectResource::collection($projects->limit($request->limit)->get()),
            'showMore' => $showMore
        ]);
    }
}
