<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Thumbnail;
use App\Http\Controllers\JoshController;
use App\Http\Requests\FileUploadRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Response;
use stdClass;
use Yajra\DataTables\DataTables;

class FileController extends JoshController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  FileUploadRequest $request
     *
     * @return Response
     */
    public function store(FileUploadRequest $request)
    {
        $destinationPath = public_path() . '/uploads/files/';

        $file_temp = $request->file('file');
        $extension = $file_temp->getClientOriginalExtension() ?: 'png';
        $safeName = str_random(10).'.'.$extension;

        $fileItem = new File();
        $fileItem->filename = $safeName;
        $fileItem->mime = $file_temp->getMimeType();
        $fileItem->save();

        $file_temp->move($destinationPath, $safeName);

        Thumbnail::generateImageThumbnail($destinationPath . $safeName, $destinationPath . 'thumb_' . $safeName);

        return $fileItem->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FileUploadRequest $request
     *
     * @return Response
     */
    public function postFilesCreate(FileUploadRequest $request)
    {
        $destinationPath = public_path() . '/uploads/files/';

        $file_temp = $request->file('file');
        $extension = $file_temp->getClientOriginalExtension() ?: 'png';
        $size = $file_temp->getSize();
        $safeName = str_random(10).'.'.$extension;

        $fileItem = new File();
        $fileItem->filename = $safeName;
        $fileItem->mime = $file_temp->getMimeType();
        $fileItem->save();

        $file_temp->move($destinationPath, $safeName);

        Thumbnail::generateImageThumbnail($destinationPath . $safeName, $destinationPath . 'thumb_' . $safeName);

        $success = new stdClass();
        $success->name = $safeName;
        $success->size = $size;
        $success->url = URL::to('/uploads/files/'.$safeName);
        $success->thumbnailUrl = URL::to('/uploads/files/thumb_'.$safeName);
        $success->deleteUrl = URL::to('admin/file/delete?_token='.csrf_token().'&id='.$fileItem->id);
        $success->deleteType = 'DELETE';
        $success->fileID = $fileItem->id;

        return Response::json([ 'files' => [$success]], 200);
    }

    public function delete(Request $request)
    {
        if (isset($request->id)) {
            $upload = File::find($request->id);
            $upload->delete();

            unlink(public_path('uploads/files/'.$upload->filename));
            unlink(public_path('uploads/files/thumb_'.$upload->filename));

            if (! isset(File::find($request->id)->filename)) {
                $success = new stdClass();
                $success->{$upload->filename} = true;
                return Response::json(['files' => [$success]], 200);
            }
        }
    }

    public function data()
    {
        $files = File::get(['id', 'filename']);

        return DataTables::of($files)
            ->editColumn(
                'filename',
                function (File $file) {
                    return $file->filename;
                }
            )
            ->addColumn(
                'image',
                function ($file) {
                    $src = url('/').'/uploads/files/'.$file->filename;

                    return '<a class="fancybox-effects-a" href="'.$src.'" title="Click aside to exit popup" > <img src="'.$src.'" alt="user" class="img-fluid gallery-style img-file" /> </a>';
                }
            )

            ->addColumn(
                'actions',
                function ($file) {
                    return '<a  data-id="'.$file->id.'" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i></a>';
                }
            )
            ->rawColumns(['actions','image'])
            ->make(true);
    }

    public function destroy(File $id)
    {
        $filename = public_path('uploads/files/'.$id->filename);
        $thumb = public_path('uploads/files/thumb_'.$id->filename);

        if ($id->delete()) {
            if (\File::exists($filename)) {
                \File::delete($filename);
            }
            if (\File::exists($thumb)) {
                \File::delete($thumb);
            }
            return [
                'status' => true,
                'message' => 'success',
            ];
        }
    }
}
