<?php

namespace App\Services\Api\V1\Front;

class PageService
{
    public function home(): array
    {
        return [
            'title' => 'Welcome to Our IT Company',
            'description' => 'We build scalable web and mobile applications for global clients.',
        ];
    }

    public function about(): array
    {
        return [
            'company_name' => 'Your Company Name',
            'mission' => 'Deliver high quality IT solutions.',
            'vision' => 'Become a global technology partner.',
        ];
    }

    public function services(): array
    {
        return [
            ['name' => 'Web Development'],
            ['name' => 'Mobile App Development'],
            ['name' => 'UI/UX Design'],
            ['name' => 'API Development'],
        ];
    }

    public function projects(): array
    {
        return [
            [
                'title' => 'E-Commerce Platform',
                'technology' => 'Laravel & Vue',
            ],
            [
                'title' => 'Booking System',
                'technology' => 'Laravel API',
            ],
        ];
    }

    public function contact(array $data): bool
    {
        // future me yaha DB save hoga
        return true;
    }
}
