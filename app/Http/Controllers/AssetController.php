<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class AssetController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get data asset
        $assets = Asset::latest()->paginate(3);

        //render view with posts
        return view('dashboard.assets', compact('assets'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.createasset');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //form validasi
        $this->validate($request, [
            'kode_asset' => 'required',
            'nama_asset' => 'required',
            'harga_asset' => 'required',
            'lokasi_asset' => 'required',
            'status_asset' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //image upload
        $image = $request->file('image');
        $image->storeAs('public/asset', $image->hashName());

        //create asset
        Asset::create([
            'image'     => $image->hashName(),
            'code'     => $request->kode_asset,
            'name'   => $request->nama_asset,
            'price'   => $request->harga_asset,
            'location'   => $request->lokasi_asset,
            'user'   => $request->user_asset,
            'status'   => $request->status_asset,
        ]);

        return redirect()->route('assets.index')->with('success', 'Asset berhasil dibuat');
    }



    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $asset = Asset::findOrFail($id);

        //delete image
        Storage::delete('public/asset/' . $asset->image);

        //delete post
        $asset->delete();

        //redirect to index
        return redirect()->route('assets.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $asset = Asset::findOrFail($id);

        //render view with post
        return view('dashboard.showasset', compact('asset'));
    }

    public function edit(string $id): View
    {
        //get post by ID
        $asset = Asset::findOrFail($id);

        //render view with post
        return view('dashboard.editasset', compact('asset'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //form validasi
        $this->validate($request, [
            'kode_asset' => 'required',
            'nama_asset' => 'required',
            'harga_asset' => 'required',
            'lokasi_asset' => 'required',
            'status_asset' => 'required',
        ]);

        //get post by ID
        $asset = Asset::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/asset', $image->hashName());

            //delete old image
            Storage::delete('public/asset/' . $asset->image);

            //update post with new image
            $asset->update([
                'image'     => $image->hashName(),
                'code'     => $request->kode_asset,
                'name'   => $request->nama_asset,
                'price'   => $request->harga_asset,
                'location'   => $request->lokasi_asset,
                'user'   => $request->user_asset,
                'status'   => $request->status_asset
            ]);
        } else {

            //update post without image
            $asset->update([
                'code'     => $request->kode_asset,
                'name'   => $request->nama_asset,
                'price'   => $request->harga_asset,
                'location'   => $request->lokasi_asset,
                'user'   => $request->user_asset,
                'status'   => $request->status_asset
            ]);
        }

        //redirect to index
        return redirect()->route('assets.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
