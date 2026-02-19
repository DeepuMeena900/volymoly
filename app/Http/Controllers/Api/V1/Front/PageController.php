<?php

namespace App\Http\Controllers\Api\V1\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\Api\V1\Front\PageService;

class PageController extends Controller
{
    protected PageService $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function home(): JsonResponse
    {
        $data = $this->pageService->home();

        return response()->json([
            'status' => true,
            'message' => 'Home Page Data',
            'data' => $data
        ]);
    }

    public function about(): JsonResponse
    {
        $data = $this->pageService->about();

        return response()->json([
            'status' => true,
            'message' => 'About Us Data',
            'data' => $data
        ]);
    }

    public function services(): JsonResponse
    {
        $data = $this->pageService->services();

        return response()->json([
            'status' => true,
            'message' => 'Services List',
            'data' => $data
        ]);
    }

    public function projects(): JsonResponse
    {
        $data = $this->pageService->projects();

        return response()->json([
            'status' => true,
            'message' => 'Projects List',
            'data' => $data
        ]);
    }

    public function contact(Request $request): JsonResponse
    {
        $this->pageService->contact($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Contact form submitted successfully.'
        ]);
    }
}
