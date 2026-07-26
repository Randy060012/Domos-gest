<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\View\View;

class NewsletterController extends Controller
{
    public function index(): View
    {
        $subscribers = NewsletterSubscriber::latest()->get();
        return view('admin.pages.newsletter.index', compact('subscribers'));
    }
}
