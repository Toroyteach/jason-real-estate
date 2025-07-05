<div class="mt-6 space-y-4">
    <h3 class="text-lg font-bold">Media</h3>

    <div class="flex flex-wrap gap-4">
        @foreach ($media as $item)
            @if (Str::endsWith($item->file_path, ['.mp4', '.webm']))
                <video controls class="w-64 rounded shadow">
                    <source src="{{ Storage::url($item->file_path) }}">
                </video>
            @else
                <img src="{{ Storage::url($item->file_path) }}" class="w-64 rounded shadow" />
            @endif
        @endforeach
    </div>
</div>