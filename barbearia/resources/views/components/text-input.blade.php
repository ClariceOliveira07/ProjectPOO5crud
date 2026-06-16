@props(['disabled' => false])

<input 
    @disabled($disabled) 
    {{ $attributes->merge([
        'class' => 'w-full text-sm p-2 border border-gray-300 rounded-md bg-gray-50 text-gray-900 focus:bg-white focus:border-purple-500 focus:ring-purple-500 focus:outline-none shadow-sm'
    ]) }}
>