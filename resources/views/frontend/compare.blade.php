<x-frontend-layout>
    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <h1>Search Result for {{ $q }}</h1>
                <div>
                    <form action="{{ route('compare') }}" method="get">
                        <input type="number" name="min" id="min" value="{{ $min ?? '' }}"
                            placeholder="min price">
                        <input type="number" name="max" id="max" value="{{ $max ?? '' }}"
                            placeholder="max price">
                        <input type="text" name="q" value="{{ $q }}" hidden>
                        <button>search product</button>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-8 py-10">
                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
