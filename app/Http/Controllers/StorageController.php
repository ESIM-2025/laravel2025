<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Requests\UploadRequest;

class StorageController extends Controller
{
    public function index()
    {
        $publicFiles = Storage::disk('public')->files('imagenes');
        $privateFiles = Storage::disk('local')->files('documentos');
        return view('storage.index', compact('publicFiles', 'privateFiles'));
    }

    public function create()
    {
        return view('storage.upload');
    }

    public function store(UploadRequest $request)
    {
        $type = $request->input('type', 'public'); // 'public' o 'private'
        $file = $request->file('file');

        $filename = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))
                    . '-' . time() . '.' . $file->getClientOriginalExtension();

        if ($type === 'public') {
            $path = $file->storeAs('imagenes', $filename, 'public');
        } else {
            $path = $file->storeAs('documentos', $filename, 'local');
        }

        return redirect()->route('storage.index')->with('status', "Archivo guardado: $path");
    }

    public function show(Request $request, $disk, $path)
    {
        $allowed = ['public','local','s3'];
        if (!in_array($disk, $allowed)) abort(404);

        if ($disk === 'public') {
            return redirect(asset('storage/' . $path));
        }

        if ($disk === 'local') {
            if (!Storage::disk('local')->exists($path)) abort(404);
            return response()->file(storage_path('app/' . $path));
        }

        if ($disk === 's3') {
            if (!Storage::disk('s3')->exists($path)) abort(404);
            $url = Storage::disk('s3')->temporaryUrl($path, now()->addMinutes(5));
            return redirect($url);
        }

        abort(404);
    }

    public function destroy(Request $request)
    {
        $disk = $request->input('disk');
        $path = $request->input('path');

        if (!in_array($disk, ['public','local','s3'])) {
            return back()->withErrors(['disk' => 'Disk no válido']);
        }

        $deleted = Storage::disk($disk)->delete($path);

        return back()->with('status', $deleted ? 'Archivo eliminado' : 'No se pudo eliminar');
    }
}
