<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Localization;

class LocalizationController extends BaseController
{
    public function index()
    {
        return view('localization.index', [
            'data' => Localization::paginate(15),
        ]);
    }

    public function store(Request $request)
    {
        $inputData = $request->only([
            'language',
            'translation_key_id',
            'translation_text',
        ]);

        // validation of the input

        try {
            $result = Localization::create($inputData);

            return view('localization.show', [
                'data' => $inputData->toArray(),
            ]);
        } catch (\Throwable $th) {
            return Redirect::back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    public function show(Localization $localization)
    {
        if (empty($localization)) {
            return Redirect::back()->withErrors(['msg' => "Invalid request!"]);
        }

        return view('localization.show', [
            'data' => $localization->toArray(),
        ]);
    }
}
