<x-app-layout>
    <div class="pt-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 text-gray-900 text-xl">
                    <p class="text-4xl text-center underline font-bold">Current Menu</p>
                    <p class="text-lg pt-3 font-bold">Every order of an oz or more gets 25% off</p>
                    <p class="text-lg pt-3 font-bold">25% discount not restricted to single strain orders. When ordering
                        an oz, you can order an 8th of 8 different strains and still get 25% off your total! (15% off
                        budget tier items)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 text-gray-900 text-xl">
                    <p class="text-4xl text-center underline font-bold">Budget Tier</p>
                    @foreach ($strains as $strain)
                        @if ($strain->tier == 'budget')
                            <div class="flex items-center justify-between pt-3">
                                {{-- <img src="{{ asset('storage/' . $strain->picture) }}" alt="" class="h-24"> --}}
                                <p class="text-lg  font-bold">*{{ $strain->strain }} ${{ $strain->price }} per 1/8th
                                    oz ({{ strtoupper($strain->type) }})</p>
                                    @auth
                                    <form action="{{ route('strain.destroy', $strain) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                    </form>
                                @endauth
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 text-gray-900 text-xl">
                    <p class="text-4xl text-center underline font-bold">Middle Tier</p>
                    @foreach ($strains as $strain)
                        @if ($strain->tier == 'middle')
                            <div class="flex items-center justify-between pt-3">
                                {{-- <img src="{{ asset('storage/' . $strain->picture) }}" alt="" class="h-24"> --}}
                                <p class="text-lg  font-bold">*{{ $strain->strain }} ${{ $strain->price }} per 1/8th
                                    oz ({{ strtoupper($strain->type) }})</p>
                                    @auth
                                    <form action="{{ route('strain.destroy', $strain) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                    </form>
                                @endauth
                                <form action="{{ route('strain.destroy', $strain) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 text-gray-900 text-xl">
                    <p class="text-4xl text-center underline font-bold">Premium Tier</p>
                    @foreach ($strains as $strain)
                        @if ($strain->tier == 'premium')
                            <div class="flex items-center justify-between pt-3">
                                {{-- <img src="{{ asset('storage/' . $strain->picture) }}" alt="" class="h-24"> --}}
                                <p class="text-lg  font-bold">*{{ $strain->strain }} ${{ $strain->price }} per 1/8th
                                    oz ({{ strtoupper($strain->type) }})</p>
                                    @auth
                                    <form action="{{ route('strain.destroy', $strain) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                    </form>
                                @endauth
                                <form action="{{ route('strain.destroy', $strain) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 text-gray-900 text-xl">
                    <p class="text-4xl text-center underline font-bold">Ultra Tier</p>
                    @foreach ($strains as $strain)
                        @if ($strain->tier == 'ultra')
                            <div class="flex items-center justify-between pt-3">
                                {{-- <img src="{{ asset('storage/' . $strain->picture) }}" alt="" class="h-24"> --}}
                                <p class="text-lg  font-bold">*{{ $strain->strain }} ${{ $strain->price }} per
                                    1/8th
                                    oz ({{ strtoupper($strain->type) }})</p>
                                    @auth
                                    <form action="{{ route('strain.destroy', $strain) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                    </form>
                                @endauth
                                <form action="{{ route('strain.destroy', $strain) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 text-gray-900 text-xl">
                    <p class="text-lg font-bold">Please note that the prices listed are based on weight and are
                        calculated at a fixed rate per gram per strain. This means that you have the flexibility to
                        order any custom weight in grams of a specific strain, even though the prices mentioned only
                        display the price for 3.5 grams. So, whether you prefer a smaller quantity or a larger one, you
                        have the option to select the exact weight you desire. Feel free to choose the perfect amount
                        that suits your needs and preferences(1/8th minimum). If you have questions, feedback, or need
                        to speak with us for any other reason, please call us @ "1-833-THCANOW" 10am-10pm EST Mon-Fri
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
