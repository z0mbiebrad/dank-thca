<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 text-gray-900 text-xl">
                    <h1 class="text-2xl font-bold mb-6">Order Form</h1>

                    @if (session('success'))
                        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Name*</label>
                            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                id="name" name="name" required>
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700">Phone number*</label>
                            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                id="phone" name="phone" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                id="email" name="email" required>
                        </div>

                        <div class="mb-4">
                            <label for="address" class="block text-gray-700">Address</label>
                            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                id="address" name="address" required>
                        </div>

                        <div class="mb-4">
                            <label for="order_details" class="block text-gray-700">Order details*</label>
                            <textarea class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="order_details" name="order_details"
                                required></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">How will you receive your order?*</label><br>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" name="delivery_method"
                                        value="local_delivery" required>
                                    <span class="ml-2">Local delivery (Cumberland County)</span>
                                </label>
                            </div>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" name="delivery_method"
                                        value="mail" required>
                                    <span class="ml-2">By mail (North Carolina residents only)</span>
                                </label>
                            </div>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" name="delivery_method"
                                        value="hold" required>
                                    <span class="ml-2">Hold my order for later delivery/in store pickup</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">How will you receive your invoice?*</label><br>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" name="invoice_method"
                                        value="text_message" required>
                                    <span class="ml-2">Text message</span>
                                </label>
                            </div>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" name="invoice_method"
                                        value="email_invoice" required>
                                    <span class="ml-2">Email</span>
                                </label>
                            </div>
                        </div>

                        <button type="submit"
                            class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Submit
                            Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
