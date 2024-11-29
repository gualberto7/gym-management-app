<div class="flex gap-3">
    @foreach($memberships as $membership)
        <div class="w-52 border p-3">
            <div class="flex justify-between">
                {{ $membership->name }}
                <span class="text-gray-500">{{ $membership->price }}Bs.</span>
            </div>
            <div class="text-gray-500">
                {{ $membership->duration }} {{ $membership->duration_unit }}
            </div>
        </div>
    @endforeach
</div>
