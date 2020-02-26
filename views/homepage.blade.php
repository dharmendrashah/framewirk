@extends('layouts/welcome')
@section('contents')
<p>Total Videos : {{$resultDecode['count']}}</p>
<div class="container-fluid">
    <?php print_r($theResult['0']['video']) ?>
@for ($i = 0; $i < $resultDecode['count']; $i++)
{{$i}}
@endfor
</div>
@endsection