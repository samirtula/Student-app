<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentPageResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StudentPageController
{
    public static function getStudentPageData(Request $request): array
    {
        $user = Auth::user();
        $data = StudentPageResource::make($user)->toArray($request);

        return [
            'data' => $data
        ];
    }
}
