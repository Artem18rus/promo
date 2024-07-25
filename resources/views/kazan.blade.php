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
  <form class='halls-config' action="admin/schemeHallStore" method="post" accept-charset="utf-8">
    @csrf
      <ul>
        <li><a href="/site/moscow">Москва</a></li>
        <li><a id="name-kazan" href="/site/kazan">Казань</a></li>
        <li>Санкт-Петербург</li>
        <li>Сызрань</li>
        <li>Псков</li>
        <li>Тула</li>
        <li>Кызыл</li>
      </ul>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="../js/app.js"></script>

  <script>

      $("#name-kazan").submit(function() {
        event.preventDefault();
        //let idStatusPage = document.getElementById('id-status-page');
          $.ajax({
            url: "/site/kazan",
            type:"POST",
            data:{
              "_token": "{{ csrf_token() }}",
              status:'1',
            },
            success:function(response){
              console.log('fghfgh');
            },
          });
      });

  </script>
</body>
</html>