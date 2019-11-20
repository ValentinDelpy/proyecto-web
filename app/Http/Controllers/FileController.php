<?php
namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;
class FileController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->file->isValid()) {
            $nombreHash = $request->file->store('');
            File::create([
                'model_id' => $request->model_id,
                'model_type' => $request->model_type,
                'original' => $request->file->getClientOriginalName(),
                'hash' => $nombreHash,
                'mime' => $request->file->getClientMimeType(),
                'size' => $request->file->getClientSize(),
            ]);
        }
        return redirect()->back();
    }
    public function download(File $file)
    {
        $fileRoute = storage_path('app/' . $file->hash);
        return response()->download($fileRoute, $file->original, ['Content-Type' => $file->mime]);
    }
    public function delete(File $file)
    {
        $fileRoute = storage_path($file->hash);
        if (\Storage::exists($file->hash)) {
            \Storage::delete($file->hash);
            $file->delete();
        }
        return redirect()->back();
    }
}