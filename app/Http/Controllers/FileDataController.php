<?php

namespace App\Http\Controllers;

use App\Models\FileData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class FileDataController extends Controller
{
    // public function uploadFiles(Request $request)
    // {
    //     $request->validate([
    //         'id_indikator' => 'required|exists:indikators,id',
    //         'id_task' => 'required|exists:tasks,id',
    //         'id_user' => 'required|exists:users,id',
    //         'name' => 'required|string|max:255',
    //         'files.*' => 'required|file|mimes:jpg,png,pdf,docx|max:2048'
    //     ]);

    //     DB::beginTransaction();

    //     try {
    //         $uploadedFiles = [];
    //         $files = $request->file('files');

    //         foreach ($files as $file) {
    //             $filename = time() . '-' . $file->getClientOriginalName();
    //             $file->move(public_path('uploads'), $filename);
    //             $uploadedFiles[] = $filename;
    //         }

    //         // Save file information to the database in JSON format
    //         $fileData = FileData::create([
    //             'id_indikator' => $request->id_indikator,
    //             'id_task' => $request->id_task,
    //             'id_user' => $request->id_user,
    //             'name' => $request->name,
    //             'files' => json_encode($uploadedFiles)
    //         ]);

    //         DB::commit();

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Files uploaded successfully.',
    //             'data' => $fileData
    //         ], 201);
    //     } catch (Exception $e) {
    //         DB::rollBack();
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Failed to upload files. Please try again.',
    //             'error' => $e->getMessage()
    //         ], 500);
    //     }
    // }

    // public function showFiles()
    // {
    //     $fileData = FileData::all();

    //     return response()->json([
    //         'success' => true,
    //         'data' => $fileData
    //     ],200); 
    // }

    public function uploadFiles(Request $request)
    {
        $request->validate([
            'id_indikator' => 'required|exists:indikators,id',
            'id_task' => 'required|exists:tasks,id',
            'id_user' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'files.*' => 'required|file|mimes:jpg,png,pdf,docx|max:2048'
        ]);

        DB::beginTransaction();

        try {
            $uploadedFiles = [];
            $files = $request->file('files');

            foreach ($files as $file) {
                $filename = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $filename);
                $uploadedFiles[] = $filename;
            }

            // Save file information to the database as a comma-separated string
            $fileData = FileData::create([
                'id_indikator' => $request->id_indikator,
                'id_task' => $request->id_task,
                'id_user' => $request->id_user,
                'name' => $request->name,
                'files' => implode(',', $uploadedFiles)
            ]);

            DB::commit();

            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Files uploaded successfully.',
                    'data' => $fileData
                ], 201);
            }

            return redirect()->route('showFiles')->with('success', 'Files uploaded successfully.');
        } catch (Exception $e) {
            DB::rollBack();

            if ($request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to upload files. Please try again.',
                    'error' => $e->getMessage()
                ], 500);
            }

            return back()->withErrors(['error' => 'Failed to upload files. Please try again.']);
        }
    }

    public function showFiles(Request $request)
    {
        $fileData = FileData::all();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $fileData
            ], 200);
        }

        return view('penjejalasanjawaban', ['fileData' => $fileData]);
    }
}
