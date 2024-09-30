<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact_us_mail_send(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'message' => 'required|string'
            ]);

            Mail::to('abehaburhan600@gmail.com')->send(new WelcomeMail($request));
            return response()->json([
                'success' => true,
                'message' => 'Your email sent successfully, we will contact you shortly.'
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->validator->errors()->toArray()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Please Fill all Fields.'
            ], 500);
        }
    }
}
