@props(['type' => 'ACTIVE'])

@if($type === 'ACTIVE')
    <div class="border border-green-500 bg-green-100 rounded-lg p-2">
        <h1 class="text-lg text-green-500 font-bold"></h1>
        <p class="text-green-500">{{ $slot }}</p>
    </div>
@else

    <div class="border border-red-500 bg-red-100 rounded-lg p-4">
        <h1 class="text-lg text-red-500 font-bold"></h1>
        <p class="text-red-500">{{ $slot }}</p>

@endif