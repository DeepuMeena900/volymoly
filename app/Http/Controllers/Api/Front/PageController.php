<?php

namespace App\Http\Controllers\Api\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PageController extends Controller
{
    public function home(): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => 'Home Page Data',
            'data' => [
                'title' => 'Welcome to Our IT Company',
                'description' => 'We build scalable web and mobile applications for global clients.',
            ]
        ]);
    }

    public function about(): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => 'About Us Data',
            'data' => [
                'company_name' => 'Your Company Name',
                'mission' => 'Deliver high quality IT solutions.',
                'vision' => 'Become a global technology partner.',
            ]
        ]);
    }

    public function services(): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => 'Services List',
            'data' => [
                ['name' => 'Web Development'],
                ['name' => 'Mobile App Development'],
                ['name' => 'UI/UX Design'],
                ['name' => 'API Development'],
            ]
        ]);
    }

    public function projects(): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => 'Projects List',
            'data' => [
                [
                    'title' => 'E-Commerce Platform',
                    'technology' => 'Laravel & Vue',
                ],
                [
                    'title' => 'Booking System',
                    'technology' => 'Laravel API',
                ],
            ]
        ]);
    }

    public function contact(Request $request): JsonResponse
    {
        // Abhi sirf basic response, validation baad me add karenge

        return response()->json([
            'status' => true,
            'message' => 'Contact form submitted successfully.',
        ]);
    }
}
