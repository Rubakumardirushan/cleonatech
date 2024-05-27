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
                
                'category' => 'App',
                'client' => 'Client A',
                'date' => '01 March, 2020',
                'url' => 'www.example1.com',
                'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius..',
                'images' => [
                    'images/work-1.jpg',
                   
                ]
            ],
            2 => [
                
                'category' => 'Web',
                'client' => 'Client B',
                'date' => '15 April, 2021',
                'url' => 'www.example2.com',
                'description' => 'This is a detailed description for Web 3.',
                'images' => [
                    'images/work-2.jpg',
                  
                ]
            ],
            3 => [
              
                'category' => 'Card',
                'client' => 'Client C',
                'date' => '22 May, 2022',
                'url' => 'www.example3.com',
                'description' => 'This is a detailed description for Card 2.',
                'images' => [
                    'images/work-4.jpg',
                  
                ]
            ],
        ];

        if (!isset($portfolioItems[$id])) {
            abort(404);
        }

        return view('portfolio-details', ['item' => $portfolioItems[$id]]);
    }
}
