<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/search" method="get">
                        @csrf
                        <div>
                          <input type="text" name="word" placeholder="search our products">
                          <input type="submit" value="search">
                        </div>
                        <a style="color: red" href="create_product">Add new product</a>
                      </form>


                      @if(isset($msg))
                        <div>
                          <h1>{{$msg}}</h1>
                        </div>
                      @elseif(isset($products))
                        <div>
                          <h1 style="font-size: 20px; font-weight:bold">The searched items are:</h1>
                          <ul>
                          @foreach($products as $product)
                            <h3> ========================</h3>
                            <li>{{$product->name}}</li>
                            <li>{{$product->desc}}</li>
                            <li>{{$product->price}}</li>
                          @endforeach
                          </ul>
                        </div>
                      @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
