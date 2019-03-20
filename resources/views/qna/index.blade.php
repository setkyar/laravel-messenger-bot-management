@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>List of Questions and Answers</h1>
            <div class="pull-right">
            	<a href="{{route('qna.create')}}" class="btn btn-info">Add QNA</a>
            </div>
        </div>
        <div class="col-md-12">
        	<table class="table table-stripped">
        		<thead>
        			<tr>
        				<td>Questions / Command</td>
        				<td>Answers / Reply</td>
        			</tr>
        		</thead>
        		<tbody>
        			@foreach($Answers as $Answer)
        			<tr>
        				<td>{{$Answer->command}}</td>
        				<td>{{$Answer->answer}}</td>
        				<td>
        					<form action="{{ route('qna.destroy', $Answer->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-block" onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
        				</td>
        			</tr>
        			@endforeach
        		</tbody>
        	</table>
        </div> 

    </div>
</div>
@endsection
