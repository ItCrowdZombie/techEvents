<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileServices {

    public function storeFile($request) {
        $request->validate(['file' => 'required|image|max:2048' ]);
        $images = $request->file('file')->store('public/img');
        $url = Storage::url($images);
        return $url;
    }

    //delete-destroy

    //update

    //store
}