<?php

namespace App\Http\Controllers;

use App\Gestion\ImageGestionInterface;
use App\Http\Requests\ImagesRequest;

use App\Http\Requests;
use App\Gestion\ImageGestion;

class ImageController extends Controller
{
    public function getForm()
    {
        return view("op.img.form");
    }

    public function postForm(ImagesRequest $request, ImageGestionInterface $imageGestion)
    {
        $image = $request->file("image");

        if ($imageGestion->save($request->file("image"))) {
            return view("op.img.formOk");
        }

        return redirect("image")->with("error", "Désolée mais votre image ne peut pas etre transferer");
    }
}
