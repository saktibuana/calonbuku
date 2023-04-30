@extends('layouts.main')
@section('main')

<div id="load_checkout">

</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#load_checkout").load('load_checkout')
    });

</script>
@endsection
