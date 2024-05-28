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
                'title' => 'E-commerce Platform',
                'category' => 'Web Development',
                'client' => 'Tech Innovators Inc.',
                'date' => '01 March, 2020',
                'url' => 'https://www.example1.com',
                'description' => 'Developed a comprehensive e-commerce platform for Tech Innovators Inc., featuring a user-friendly interface, secure payment integration, and robust product management capabilities.',
                'images' => [
                    'images/work-1.jpg',
                    'images/work-1.jpg',
                ]
            ],
            2 => [
                'title' => 'Mobile Banking App',
                'category' => 'Mobile App Development',
                'client' => 'Fintech Solutions',
                'date' => '15 April, 2021',
                'url' => 'https://www.example2.com',
                'description' => 'Created a mobile banking app for Fintech Solutions, providing seamless and secure banking services, including balance checks, money transfers, and transaction histories.',
                'images' => [
                    'images/work-2.jpg',
                    'images/work-2.jpg',
                ]
            ],
            3 => [
                'title' => 'Healthcare Management System',
                'category' => 'Software Development',
                'client' => 'HealthCare Corp.',
                'date' => '22 May, 2022',
                'url' => 'https://www.example3.com',
                'description' => 'Implemented a healthcare management system for HealthCare Corp., streamlining patient records, appointment scheduling, and medical billing processes.',
                'images' => [
                    'images/work-3.jpg',
                    'images/work-3.jpg',
                ]
            ],
            4 => [
                'title' => 'Creative Portfolio Website',
                'category' => 'Web Design',
                'client' => 'Creative Agency',
                'date' => '30 July, 2021',
                'url' => 'https://www.example4.com',
                'description' => 'Designed a visually appealing portfolio website for a Creative Agency, showcasing their projects and services with an interactive and modern layout.',
                'images' => [
                    'images/work-4.jpg',
                    'images/work-4.jpg',
                ]
            ],
            5 => [
                'title' => 'Business Analytics Dashboard',
                'category' => 'Data Visualization',
                'client' => 'Analytics Firm',
                'date' => '14 March, 2022',
                'url' => 'https://www.example5.com',
                'description' => 'Developed a business analytics dashboard for an Analytics Firm, providing real-time data visualization and insights to aid in strategic decision-making.',
                'images' => [
                    'images/work-5.jpg',
                    'images/work-5.jpg',
                ]
            ],
            6 => [
                'title' => 'E-learning Platform',
                'category' => 'Web Development',
                'client' => 'Education Innovators',
                'date' => '25 May, 2023',
                'url' => 'https://www.example6.com',
                'description' => 'Built an e-learning platform for Education Innovators, featuring interactive courses, user progress tracking, and certification capabilities.',
                'images' => [
                    'images/work-6.jpg',
                    'images/work-6.jpg',
                ]
            ],
        ];

        if (!isset($portfolioItems[$id])) {
            abort(404);
        }

        return view('portfolio-details', ['item' => $portfolioItems[$id]]);
    }
}
