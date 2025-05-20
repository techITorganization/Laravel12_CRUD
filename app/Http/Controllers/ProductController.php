<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * store
     *
     * @param  Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric'
        ]);

        try {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->hashName();
            $image->move(public_path('uploads'), $imageName); // Pindah ke public/uploads
            Log::info('Image moved to: ' . public_path('uploads/' . $imageName));

            Product::create([
                'image'         => 'uploads/' . $imageName, // Simpan path relatif
                'title'         => $request->title,
                'description'   => $request->description,
                'price'         => $request->price,
                'stock'         => $request->stock
            ]);

            return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } catch (\Exception $e) {
            Log::error('Error in store: ' . $e->getMessage());
            return redirect()->back()->with(['error' => 'Gagal menyimpan data: ' . $e->getMessage()])->withInput();
        }
    }

    /**
     * show
     *
     * @param  string $id
     * @return View
     */
    public function show(string $id): View
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * edit
     *
     * @param  string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * update
     *
     * @param  Request $request
     * @param  string $id
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'image'         => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric'
        ]);

        try {
            $product = Product::findOrFail($id);

            if ($request->hasFile('image')) {
                if ($product->image && File::exists(public_path($product->image))) {
                    File::delete(public_path($product->image));
                }

                $image = $request->file('image');
                $imageName = time() . '_' . $image->hashName();
                $image->move(public_path('uploads'), $imageName);

                $product->update([
                    'image'         => 'uploads/' . $imageName,
                    'title'         => $request->title,
                    'description'   => $request->description,
                    'price'         => $request->price,
                    'stock'         => $request->stock
                ]);
            } else {
                $product->update([
                    'title'         => $request->title,
                    'description'   => $request->description,
                    'price'         => $request->price,
                    'stock'         => $request->stock
                ]);
            }

            return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
        } catch (\Exception $e) {
            Log::error('Error in update: ' . $e->getMessage());
            return redirect()->back()->with(['error' => 'Gagal memperbarui data: ' . $e->getMessage()])->withInput();
        }
    }

    /**
     * destroy
     *
     * @param  string $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        try {
            $product = Product::findOrFail($id);

            if ($product->image && File::exists(public_path($product->image))) {
                File::delete(public_path($product->image));
            }

            $product->delete();

            return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } catch (\Exception $e) {
            Log::error('Error in destroy: ' . $e->getMessage());
            return redirect()->back()->with(['error' => 'Gagal menghapus data: ' . $e->getMessage()]);
        }
    }
}