<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://pchen66.github.io/js/three/three.min.js"></script>
    <script src="https://rawgit.com/pchen66/panolens.js/dev/build/panolens.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <div id="containers">
        <div class="tt">
            <img data-bs-toggle="tooltip" title="Information!"
                src="https://static.vecteezy.com/system/resources/thumbnails/005/747/906/small/info-icon-template-information-icon-colorful-free-vector.jpg"
                alt="">
        </div>
    </div>

</body>

</html>
<script src="js/main.js"></script>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>