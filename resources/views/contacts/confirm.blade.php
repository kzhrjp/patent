@extends('layouts.hotspringwithoutSearch')
@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Contact</div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('contact/store') }}">
                {{ csrf_field() }}
                <table class="table table-striped">
                    <tr><td style="width: 80px;">name</td><td>{{ $post_data['name']  }}</td></tr>
                    <tr><td>comment</td><td>{!! nl2br($post_data['comment']) !!}</td></tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </tr>
                </table>
                <input id="name" type="hidden" class="form-control" name="name" value="{{ $post_data['name'] }}">
                <input id="comment" type="hidden" class="form-control" name="comment" value="{{ $post_data['comment'] }}">
            </form>
        </div>
    </div>
@endsection