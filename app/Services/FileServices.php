<?php

namespace App\Services;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;


class FileServices {
    //store
    public function storeFile($request) {
        $request->validate(['file' => 'required|image|max:2048' ]);
        $images = $request->file('file')->store('public/img');
        $url = Storage::url($images);
        return $url;
    }

    //delete-destroy

    public function deleteFile($url) {

        $url = str_replace("storage/", "public/",$url);
    
        Storage::delete($url);
    }

    //update
  

    
}