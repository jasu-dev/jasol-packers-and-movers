<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\QuoteRequestMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

final class MailController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name'        => ['required', 'string', 'max:255'],
            'phone'       => ['required', 'string', 'max:15'],
            'from_city'   => ['required', 'string'],
            'to_city'     => ['required', 'string'],
            'moving_date' => ['required', 'date', 'after_or_equal:today'],
            'service'     => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            $adminEmail = config('services.static.email');

            $data = $validator->validated();

            Mail::to($adminEmail)->send(new QuoteRequestMail($data));

            Log::channel('quote-request')->info('Quote request sent', $data);

            return response()->json([
                'message' => 'Your quote request has been sent successfully!'
            ], 200);

        } catch (\Throwable $e) {

            Log::error($e->getMessage());

            return response()->json([
                'message' => 'We are facing some technical issues. Please try calling us directly.'
            ], 500);
        }
    }
}