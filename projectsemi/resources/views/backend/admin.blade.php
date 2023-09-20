@extends('backend.layout')
@section('title','Trang chu quan tri')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}
#logout{
	padding-right:30px;}		
</style>
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
<div class="container">
   
    <div class="row">
    	<div class="col-sm-12">
        	<div class="alert alert-success">Added user success!</div>
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                	<td width="5%">#</td>
                    <td width="25%">Email</td>
                    <td width="25%">Password</td>
                    <td width="5%">Level</td>
                    <td width="5%">Edit</td>
                    <td width="5%">Delete</td>
                </tr>
                @foreach ($user as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->level}}</td>
                        <td><a href="#">Edit</a></td>
                        <td><a href="#">Delete</a></td>
                    </tr>
                    <tr>
                @endforeach
                {{-- <tr>
                	<td>1</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>nguyenvana</td>
                    <td>2</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr> --}}
			</table>
            <div aria-label="Page navigation">
            	<ul class="pagination">
                	<li>
                    	<a aria-label="Previous" href="#">
                        	<span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li>
                    	<a href="#" aria-label="Next">
        					<span aria-hidden="true">&raquo;</span>
      					</a>
      				</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>	<!--/.main-->
@endsection
</body>
</html>
