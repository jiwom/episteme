@props(['messages'])

<ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
    @forelse ((array) $messages as $message)
        <li>{{ $message }}</li>
    @empty
        {{-- No messages --}}
    @endforelse
</ul>
