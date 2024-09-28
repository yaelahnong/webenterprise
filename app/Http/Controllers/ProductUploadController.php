<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App\Models\Product;

class ProductUploadController extends Controller
{
    // Show the image upload form
    public function showUploadForm()
    {
        return view('upload');
    }

    // Handle the image upload process
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Store the uploaded image in the 'public' disk (storage/app/public)
        $path = $request->file('image')->store('images', 'public');

        // Save image file path and additional data to the database
        Product::create([
            'file_path' => $path,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        // Redirect to the welcome page with a success message
        return redirect('/')->with('success', 'Image uploaded successfully!');
    }

    // List uploaded images
    public function listImages()
    {
        // Get all image records from the database
        $images = Product::all();

        return view('image_list', compact('images'));
    }
}
