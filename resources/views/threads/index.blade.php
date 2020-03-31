@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Threads</div>

                    <div class="card-body">
                        @forelse($threads as $thread)
                            <article>
                                <h4>
                                    <a href="{{ $thread->path() }}">{{ $thread->title }}</a>
                                </h4>
                                <div class="body">{{ $thread->body }}</div>
                            </article>
                            {!! $loop->last ? '' : '<hr>' !!}
                        @empty
                            List is empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection