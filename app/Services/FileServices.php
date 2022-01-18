<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileServices {

    public function storeFile($request, $url) {
        $request->validate(['file' => 'required|image|max:2048' ]);
        $images = $request->file('file')->store('public/img');
        $url = Storage::url($images);
    }

    //delete-destroy

    //update

    //store
}