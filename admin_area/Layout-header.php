<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="Scripts/base-file/jquery-1.8.3.min.js"></script>

    <link href="Css/base-file/all.min.css" rel="stylesheet">
    <script src="Scripts/base-file/all.min.js"></script>
    <script src="Scripts/custom.js"></script>
    <link href="Css/base-file/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/r-slider.css">
    <link href="Css/base-file/nprogress.css" rel="stylesheet">
    <script src="Scripts/base-file/nprogress.js"></script>
    <script src="Scripts/base-file/r-slider.js"></script>

    <link href="Css/base-file/select2.min.css" rel="stylesheet">
    <script src="Scripts/select/select2.full.min.js"></script>

    <link href="Css/admin-panel/page.css" rel="stylesheet">
</head>

<body>


<script>
    function menuBox(element, target) {

        var tar = $("#" + target);
        debugger;
        if ($(tar).hasClass("active")) {
            $(tar).removeClass("active");
        } else {
            $(tar).addClass('active');
        }

    }

    $(document).mouseup(function (e) {
        var container = $("#user-image-menu");
        if (!container.is(e.target) && container.has(e.target).length === 0) {

            $(container).removeClass("active");

        }
    });

    $(document).ready(function () {

    })
</script>