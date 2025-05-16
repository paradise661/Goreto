<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Media;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MediaController extends Controller
{

    protected $sizes;

    public function __construct()
    {
        $this->sizes  = image_sizes();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = Media::latest()->get();
        return view('admin.media.index', compact('medias'));
    }

    public function mediapopup()
    {
        $medias = Media::latest()->get();
        return view('admin.media.popup', compact('medias'));
    }

    public function medialist()
    {
        $medias = Media::latest()->get();
        return view('admin.media.list', compact('medias'));
    }

    public function gallerymedialist($id)
    {
        $id = explode(',', $id);
        return view('admin.media.gallery.gallerylist', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    if ($image = $request->file('file')) {
        $names = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $name = Media::where('name', $names)->exists()
            ? $names . '-' . date('YmdHis')
            : $names;

        $extension = $image->getClientOriginalExtension();
        $slugify = make_slug($name);
        $fileName = $slugify . '.' . $extension;
        $image->move(public_path('storage/'), $fileName);

        list($width, $height) = getimagesize(public_path('storage/' . $fileName));
        $fsize = round(filesize(public_path('storage/' . $fileName)) / 1024);

        $media = Media::create([
            'name' => $name,
            'url' => $slugify,
            'extention' => $extension,
            'fullurl' => '/storage/' . $fileName,
            'alt' => $name,
            'width' => $width,
            'height' => $height,
            'size' => (int) $fsize . 'KB',
            'date' => now()
        ]);

        return response()->json($media); // ✅ send JSON response
    }

    return response()->json(['error' => 'No file uploaded'], 400);
}


    /**
     * Display the specified resource.
     */
    // public function show(Media $media)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Media $media)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $medium)
    {
        $medium->update($request->all());
        return redirect()->route('media.index')->with('message', 'Update Successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Media $media)
    // {
    //     //
    // }

    public function mediadestroy($image_id)
    {
        $media = Media::findOrFail($image_id);
        removeFile($media->fullurl);

        if ($this->sizes) {
            foreach ($this->sizes as $resize) {
                if ($resize['width'] && $resize['height']) {
                    removeFile('/storage/' . $media->url . '-' . $resize['width'] . 'x' . $resize['height'] . '.' . $media->extention);
                }
            }
        }

        $media->delete();
    }
}
