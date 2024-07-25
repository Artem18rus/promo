<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kazan</title>
</head>
<body>
  {{ $name }};
  <ul>
    <li><a href="/site/moscow">Москва</a></li>
    <li><a id="name-kazan" href="/site/kazan">Казань</a></li>
    <li>Санкт-Петербург</li>
    <li>Сызрань</li>
    <li>Псков</li>
    <li>Тула</li>
    <li>Кызыл</li>
  </ul>
  <script src="../js/app.js"></script>

  <script>

    $("#name-kazan").click(function() {
        $.ajax({
            url: "/site/kazan",
            method: 'GET',
            data: {
              "_token": "{{ csrf_token() }}",
            },
            success: function (response) {
              console.log(response);
              // location.reload();
            },
            error: function(event) {
              console.log(event); 
            }
        });
    });

  </script>
</body>
</html>