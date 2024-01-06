<?php

namespace App\Http\Controllers;

use App\Models\Pastry;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class DashboardPastryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pastrys.index',[
            'pastrys' => Pastry::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pastrys.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_resep' => 'required|max:255',
            'slug' => 'required|unique:pastries',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'bahan' => 'required',
            'cara_masak' => 'required'
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('pastry-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->bahan), 100);

        Pastry::create($validateData);

        return redirect('/dashboard/pastry')->with('success', 'Resep berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pastry $pastry)
    {
        return view('dashboard.pastrys.show', [
            'pastry' => $pastry
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pastry $pastry)
    {
        return view('dashboard.pastrys.edit',[
            'pastry' => $pastry,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pastry $pastry)
    {
        $data = [
            'nama_resep' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'bahan' => 'required',
            'cara_masak' => 'required'
        ];

        if($request->slug != $pastry->slug) {
            $data['slug'] = 'required|unique:pastries';
        }

        $validateData = $request->validate($data);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('pastry-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->bahan), 100);

        Pastry::where('id', $pastry->id)
            ->update($validateData);

        return redirect('/dashboard/pastry')->with('success', 'Resep berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pastry $pastry)
    {
        if($pastry->image) {
            Storage::delete($pastry->image);
        }
        Pastry::destroy($pastry->id);

        return redirect('/dashboard/pastry')->with('success', 'Resep berhasil dihapus!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pastry::class, 'slug', $request->nama_resep);
        return response()->json(['slug' => $slug]);

    }
}