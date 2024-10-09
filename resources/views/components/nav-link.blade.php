
@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'text-blue-500' : 'text-gray-500 hover:bg-white-700 ' }}hover:text-blue-500">{{ $slot }}</a>
