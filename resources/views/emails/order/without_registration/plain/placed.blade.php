Zamówienie (bez rejestracji) złożone

Identyfikator zamówienia: {{ $order->number }}
Data zamówienia: {{ $order->created_at }}
Status zamówienia: {{ $order->status->display_name }}
Wartość zamówienia: {{ $order->total_price }} zł
Dostawa: {{ $order->delivery_name }}
Koszt dostawy: {{ $order->delivery_cost }} zł
@if ($order->comment)
Komentarz:
{{ $order->comment }}
@endif

Zamówione produkty:
------------------------------------------------------------------------------
@foreach ($order->items as $item)
{{ $item->category }} {{ $item->brand }} {{ $item->name }}
Cena: {{ $item->price }}
Ilość: {{ $item->quantity }}
Wartość: {{ $item->subtotal_price }}
------------------------------------------------------------------------------
@endforeach

Zamawiający:
{{ $customer->name }} {{ $customer->lastname }}
{{ $customer->street }}
{{ $customer->zip_code }} {{ $customer->city }}
{{ $customer->voivodeship->name }}
Email: {{ $customer->email }}
@if ($customer->phone)
Telefon: {{ $customer->phone }}
@endif

------------------------------------------------------------------------------

Dokument zakupu: {{ $order->saleDocument->display_name }}
Do zapłaty: {{ number_format($order->total_price_and_delivery_cost, 2) }} zł
Numer konta: {{ config('settings.account_number') }}
Sposób zapłaty: {{ config('settings.delivery.methods_of_payment.prepayment') }}

Dane firmy:
{{ config('settings.company_name') }}
{{ config('settings.company_address.street') }}
{{ config('settings.company_address.zip_code') }} {{ config('settings.company_address.city') }}
{{ config('settings.company_address.voivodeship') }}