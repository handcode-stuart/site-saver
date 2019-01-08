@extends('layouts.app')

@section('content')
    <div>Sites</div>

    @if (session('status'))
        {{ session('status') }}
    @endif

    <form method="POST" action="{{ route('sites.store') }}">
        @csrf
        <input type="text" name="url" placeholder="Site URL" required>
        <input type="text" name="name" placeholder="Site name">
        @if (!$tags->isEmpty())
            <select name="tags[]" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        @endif
        <button type="submit">Add site</button>
    </form>

    <form method="POST" action="{{ route('tags.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Tag name" required>
        <button type="submit">Add tag</button>
    </form>

    @include('includes.errors')

    @if (!$sites->isEmpty())
        <ul>
            @foreach ($sites as $site)
                <li>
                    <span>
                        <a href="{!! $site->url !!}" target="_blank">{!! $site->name ?: $site->url !!}</a>
                    </span>
                    @if (!$site->tags->isEmpty())
                        <span>
                            @foreach ($site->tags as $tag)
                                {{ $tag->name }}
                            @endforeach
                        </span>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
@endsection
