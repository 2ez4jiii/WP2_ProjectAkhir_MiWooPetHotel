<!DOCTYPE html>
<html lang="en">
   <head>
      @vite('resources/css/app.css')
      <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
      <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
   </head>
        @include('home.header')
            <div class="bg-white border rounded-lg shadow-lg px-6 py-8 max-w-md mx-auto mt-8">
                <h1 class="font-bold text-2xl my-4 text-center text-blue-600">MiWoo PetHotel</h1>
                <hr class="mb-2">
                <div class="flex justify-between mb-6">
                    <h1 class="text-lg font-bold">Invoice</h1>
                    <div class="text-gray-700">
                        <div>Date: 01/09/2025</div>
                        <div>Invoice #: INV12345</div>
                    </div>
                </div>
                <div class="mb-8">
                    <h2 class="text-lg font-bold mb-4">PetHotel Booking</h2>
                    <div class="text-gray-700 mb-2">Spreigratis</div>
                    <div class="text-gray-700 mb-2">08123456789</div>
                    <div class="text-gray-700 mb-2">rarw@gmail.com</div>
                </div>
                <table class="w-full mb-8">
                    <thead>
                        <tr>
                            <th class="text-left font-bold text-gray-700">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left text-gray-700">Pet Name</td>
                            <td class="text-right text-gray-700">Nguawor</td>
                        </tr>
                        <tr>
                            <td class="text-left text-gray-700">Type of Pet</td>
                            <td class="text-right text-gray-700">Dog</td>
                        </tr>
                        <tr>
                            <td class="text-left text-gray-700">Gender</td>
                            <td class="text-right text-gray-700">Male</td>
                        </tr>
                        <tr>
                            <td class="text-left text-gray-700">Check-In</td>
                            <td class="text-right text-gray-700">11/9/2025</td>
                        </tr>
                        <tr>
                            <td class="text-left text-gray-700">Check-Out</td>
                            <td class="text-right text-gray-700">20/9/2025</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-left font-bold text-gray-700">Total</td>
                            <td class="text-right font-bold text-gray-700">RP. 350.000</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="text-gray-700 mb-2">Thank you!</div>
            </div>
        @include('home.footer')
</html>