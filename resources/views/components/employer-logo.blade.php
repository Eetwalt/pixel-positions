@props(['employer', 'size' => 42])

<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $size }}" height="{{ $size }}" />
