<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>HL - {{ $pageTitle }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="{{ url('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/plugins/icomoon/style.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ url('backend/assets/css/concept.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/admin2.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/css/custom.css') }}" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
