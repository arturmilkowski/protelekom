<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Page\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreContact;
// use Illuminate\Http\Request;
use App\Mail\Contact;

class Store extends Controller
{
    /**
     * Send email.
     *
     * @param StoreEmail $request Request
     * 
     * @return RedirectResponse
     */
    public function __invoke(StoreContact $request): RedirectResponse
    {
        $spam = $request->input('i_am_not_a_robot');
        if ($spam) {
            return redirect()->route('frontend.pages.index');
        }

        $email = $request->validated();

        Mail::to('artur-milkowski@tlen.pl')->send(new Contact($email));

        return redirect()->route('frontend.pages.contacts.thank')
            ->with('mail_sent', 'mail sent');
    }
}
