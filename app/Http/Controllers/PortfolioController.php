<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show($id)
    {
        // Dummy data for demonstration purposes
        $portfolioItems = [
            1 => [
                'title' => 'App 1',
                'category' => 'App',
                'client' => 'Client A',
                'date' => '01 March, 2020',
                'url' => 'www.example1.com',
                'description' => 'This is a detailed description for App 1.',
                'images' => [
                    'images/portfolio-1.jpg',
                    'images/portfolio-2.jpg',
                    'images/portfolio-3.jpg'
                ]
            ],
            2 => [
                'title' => 'Web 3',
                'category' => 'Web',
                'client' => 'Client B',
                'date' => '15 April, 2021',
                'url' => 'www.example2.com',
                'description' => 'This is a detailed description for Web 3.',
                'images' => [
                    'images/portfolio-2.jpg',
                    'images/portfolio-4.jpg',
                    'images/portfolio-5.jpg'
                ]
            ],
            3 => [
                'title' => 'Card 2',
                'category' => 'Card',
                'client' => 'Client C',
                'date' => '22 May, 2022',
                'url' => 'www.example3.com',
                'description' => 'This is a detailed description for Card 2.',
                'images' => [
                    'images/portfolio-4.jpg',
                    'images/portfolio-6.jpg',
                    'images/portfolio-7.jpg'
                ]
            ],
        ];

        if (!isset($portfolioItems[$id])) {
            abort(404);
        }

        return view('portfolio-details', ['item' => $portfolioItems[$id]]);
    }
}
