<div>
    @foreach($memberships as $membership)
        <div>
            {{ $membership->name }}
        </div>
    @endforeach
</div>
