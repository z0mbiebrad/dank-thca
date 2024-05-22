<x-app-layout>
    <div class="pt-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 text-gray-900 text-xl">
                    <p class="text-4xl text-center underline font-bold">Add New Strain</p>
                    @if (session('success'))
                        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('strain.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="strain" class="block text-gray-700">Strain*</label>
                            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                id="strain" name="strain" required>
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block text-gray-700">Price*</label>
                            <input type="number" step="5"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="price"
                                name="price" required>
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-gray-700">Type*</label>
                            <div class="mt-1">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio border-gray-300 rounded-md shadow-sm"
                                        name="type" value="s" required>
                                    <span class="ml-2">Sativa</span>
                                </label>
                                <label class="inline-flex items-center ml-4">
                                    <input type="radio" class="form-radio border-gray-300 rounded-md shadow-sm"
                                        name="type" value="i" required>
                                    <span class="ml-2">Indica</span>
                                </label>
                                <label class="inline-flex items-center ml-4">
                                    <input type="radio" class="form-radio border-gray-300 rounded-md shadow-sm"
                                        name="type" value="h" required>
                                    <span class="ml-2">Hybrid</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-gray-700">Tier*</label>
                            <div class="mt-1 flex justify-around">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio border-gray-300 rounded-md shadow-sm"
                                        name="tier" value="budget" required>
                                    <span class="ml-1">Budget</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio border-gray-300 rounded-md shadow-sm"
                                        name="tier" value="middle" required>
                                    <span class="ml-1">Middle</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio border-gray-300 rounded-md shadow-sm"
                                        name="tier" value="premium" required>
                                    <span class="ml-1">Premium</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio border-gray-300 rounded-md shadow-sm"
                                        name="tier" value="ultra" required>
                                    <span class="ml-1">Ultra</span>
                                </label>
                            </div>
                        </div>

                        {{-- <div class="mb-4">
                            <label for="picture" class="block text-gray-700">Picture*</label>
                            <input type="file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                id="picture" name="picture" required>
                        </div> --}}

                        <button type="submit"
                            class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Add
                            Strain</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
