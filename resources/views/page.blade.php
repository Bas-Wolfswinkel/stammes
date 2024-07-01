@extends('layouts.app')

@section('content')
    @if (have_rows('page_content'))
        <div>
            @while (have_rows('page_content'))
                @php the_row(); @endphp
                <div id="{{ get_row_layout() }}">
                    @include('partials.' . get_row_layout())
                </div>
            @endwhile
        </div>
    @endif
@endsection
