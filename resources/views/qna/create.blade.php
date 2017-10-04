@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add Questions and Answers</h1>
        </div>
        <div class="col-md-12">
            <form class="form-horizontal" action="{{route('qna.store')}}" method="POST" role="form">
            
        	<table class="table table-stripped">
        		<tbody>
        			<tr>
        				<td>
                            <label>Question</label>            
                        </td>
        				<td>
                            <input type="text" name="command" class="form-control">            
                        </td>
        			</tr>
                    <tr>
                        <td>
                            <label>Answer</label>            
                        </td>
                        <td>
                            <input type="text" name="answer" class="form-control">            
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Add QNA" class="btn btn-primary">
                        </td>
                    </tr>
        		</tbody>
        	</table>
            </form>
        </div> 

    </div>
</div>
@endsection
