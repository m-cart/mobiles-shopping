@component('mail::message')
# Your Order Has Been Placed.

Hello User,<br>
Thank you for your order. Your order has been placed. Your order will be delivered  within 2 days.

@component('mail::button', ['url' => ''])
View Orders
@endcomponent

Thanks,<br>
m-cart {{-- {{ config('app.name') }} --}}
@endcomponent
