<?php
namespace iseeyoucopy\phpmvc\controllers;

use iseeyoucopy\phpmvc\models\FaqCats;
use iseeyoucopy\phpmvc\Controller;
use iseeyoucopy\phpmvc\models\Faq;

class FaqController extends Controller
{
    public function index(): string
    {
        $cats = new FaqCats();
        $results = $cats->findAll();// Implement the database query to fetch FAQ categories
        $faqs = new Faq();
        $faq_res = $faqs->findAll(); // Implement the database query to fetch FAQs
        // Now, $results contains all the product records from the database
        // You pass it to the view
        return $this->render('faq', [
            'cats' => $results,
            'faqs' => $faq_res,
            'lang' => [
                'faq_welcome' => 'Welcome to FAQ',
                'faq_contents_header' => 'Here are some of our most frequently asked questions.',
                // Add more language strings if needed
            ],
        ]);
    }


    private function fetchFaqCategories()
    {
        // Implement the database query to fetch FAQ categories based on user class
        // Replace sql_query() and mysqli_fetch_assoc() with appropriate database functions
    }

    private function fetchFaqs()
    {
        // Implement the database query to fetch FAQs
        // Replace sql_query() and mysqli_fetch_assoc() with appropriate database functions
    }
}
