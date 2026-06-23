<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\Setting;
use App\Models\SpecialOffer;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $date =
            $request->date;

        $adults =
            $request->adults ?? 1;

        $children =
            $request->children ?? 0;

        $checkIn = null;

        $checkOut = null;

        $night = 1;

        if ($date) {

            $split =
                explode(
                    ' - ',
                    $date
                );

            if (
                count($split)
                === 2
            ) {

                $checkIn =
                    Carbon::parse(
                        $split[0]
                    );

                $checkOut =
                    Carbon::parse(
                        $split[1]
                    );

                $night =
                    max(
                        1,
                        $checkIn->diffInDays(
                            $checkOut
                        )
                    );
            }
        }

        $price =
            Price::first();

        $offer =
            SpecialOffer::where(
                'is_active',
                true
            )
                ->first();

        $pricePerNight =
            $price?->price_day
            ?? 0;

        $subtotal =
            $night
            *
            $pricePerNight;

        $priceTotal =
            $pricePerNight
            *
            $night;

        $discount =
            0;

        if (
            $offer
        ) {

            $discount =
                (
                    $subtotal
                    *
                    $offer->discount
                )
                /
                100;
        }

        $total =
            $subtotal
            -
            $discount;

        return view(
            'frontend.reservation',
            compact(
                'date',
                'adults',
                'children',
                'checkIn',
                'checkOut',
                'night',
                'pricePerNight',
                'priceTotal',
                'discount',
                'total'
            )
        );
    }

    public function whatsapp(
        Request $request
    ): RedirectResponse {
        // dd($request->all());
        $phone =
            Setting::first()
                ->booking_whatsapp;

        $message = rawurlencode(

            'NEW RESERVATION REQUEST'

            .

            "\n\n"

            .

            'Guest Information'

            .

            "\n"

            .

            '━━━━━━━━━━'

            .

            "\n"

            .

            'Name: '
            .
            $request->name

            .

            "\n"

            .

            'Phone: '
            .
            $request->country
            .
            $request->phone

            .

            "\n"

            .

            'Email: '
            .
            (
                $request->email
                ?: '-'
            )

            .

            "\n"

            .

            'Request: '
            .
            (
                $request->note
                ?: '-'
            )

            .

            "\n\n"

            .

            'Stay Information'

            .

            "\n"

            .

            '━━━━━━━━━━'

            .

            "\n"

            .

            'Check In: '
            .
            (
                explode(
                    ' - ',
                    $request->date
                )[0]
                ?? '-'
            )

            .

            "\n"

            .

            'Check Out: '
            .
            (
                explode(
                    ' - ',
                    $request->date
                )[1]
                ?? '-'
            )

            .

            "\n"

            .

            'Duration: '
            .
            $request->night

            .

            (
                $request->night > 1
                ? ' Nights'
                : ' Night'
            )

            .

            "\n"

            .

            'Guests: '

            .

            $request->adults

            .

            ' Adult'

            .

            (
                $request->children > 0
                ? " + {$request->children} Child"
                : ''
            )

            .

            "\n\n"

            .

            'Price Summary'

            .

            "\n"

            .

            '━━━━━━━━━━'

            .

            "\n"

            .

            'Estimated Total: $'

            .

            number_format(
                $request->total
            )

            .

            "\n\n"

            .

            'Please confirm availability.'

        );

        return redirect(

            'https://wa.me/'

                .

                preg_replace(
                    '/\D/',
                    '',
                    $phone
                )

                .

                '?text='

                .

                $message

        );
    }
}
