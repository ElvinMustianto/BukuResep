<?php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;

    class DashboardUserController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            return view('dashboard.user.index',[
                'user' => User::where('username',auth()->user()->username)->first()
            ]);
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create(User $user)
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            //
        }

        /**
         * Display the specified resource.
         */
        public function show(User $user)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(User $user)
        {
            return view('dashboard.user.edit',[
                'user' => $user
            ]);
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, User $user)
        {
            $dataUser = [
                'nama' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024'
            ];

            if($request->username != $user->username) {
                $dataUser['username'] = 'required|unique:users';
            }

            $validateData = $request->validate($dataUser);

            if ($request->file('image')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }

                $validateData['image'] = $request->file('image')->store('user-images');
            }

            User::where('id', $user->id)
                ->update($validateData);

            return redirect('/dashboard/user')->with('success', 'Profile berhasil diubah!');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(User $user)
        {
            //
        }
    }