@extends('common.master')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>500 Custom Error Page Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
<div class="container mt-5 pt-5">
    <div class="alert alert-danger text-center">
        <h2 class="display-3">500</h2>
        <h3 class="display-5">Internal Server Error</h3>
        <p class = 'display-5'>We have an internal server problem. We apologise for any inconvenience caused.<br>
        What can you try?<br>
        Answer:<br>
        <div class="buttons" style="display: block">
            <a class="button is-link" href="/">
                <strong>Home page</strong>
            </a>
            <a class="button is-danger" href="javascript:history.back()">
                <strong>Go back</strong>
            </a>
            <a id="button-color" class="button is-success" href="javascript:window.location.href=window.location.href">
                <strong>Reload</strong>
            </a>
        </div>
    </div>
</div>
</body>

</html>
@endsection
