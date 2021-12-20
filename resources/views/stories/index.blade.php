@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Stories</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Type</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stories as $story)

                            <tr>
                                <td>
                                {{$story->title}}
                                </td>
                                <td>
                                {{$story->type}}
                                </td>
                                <td>
                                {{$story->status== 0 ? 'Active' : 'Disable'}}
                                </td>
                                <td>                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
    </div>
</div>
@endsection
