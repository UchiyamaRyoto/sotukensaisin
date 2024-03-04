<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision_V1\Likelihood;

class OCRController extends Controller
{
    public function index(Request $request)
    {
        $imageFile = $request->file('image');

        $imageAnnotator = new ImageAnnotatorClient();

        try {
            $image = file_get_contents($imageFile->path());

            $response = $imageAnnotator->labelDetection($image);
            $labels = $response->getLabelAnnotations();

            return view('image_processing_result', ['labels' => $labels]);
        } finally {
            $imageAnnotator->close();
        }
    }
}
