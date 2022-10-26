<!doctype html>
<html lang="en">
    <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <input type="hidden" class="form-control" placeholder="user" id="user" value="{{ Auth::user()->id; }}">
    <input type="text" class="form-control" placeholder="destination" id="destination" value="1">
    <div class="container">
        <div class="row mt-3">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            Envío de transferencias
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text"  class="form-control" placeholder="Item" id="name">
                            </div>

                            </div>
                            <div class="form-group">
                                <textarea id="message" class="form-control" placeholder="Observaciones"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Observaciones</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ url('js/app.js') }}"></script>

    <script>
        const Http = window.axios;
        const Echo = window.Echo;
        const user = $("#user");
        const name = $("#name");
        const destination = $("#destination");
        const message = $("#message");
        $("button").click(function(){
            if(name.val() == ''){
                name.addClass('is-invalid');
            }
            else if(message.val() == ''){
                message.addClass('is-invalid');
            }
            else{
                Http.post("{{ url('send') }}", {
                    'name' : name.val(), // Es el item
                    'message' : message.val() + "  " + name.val(),
                    'destination' : destination.val()
                }).then(()=>{
                    message.val('');
                });
            }
        });
        window.Echo.private(`App.Models.User.` + user.val()) 
        .notification((notification) => {
            mensaje = notification.message.split(" ");
            tam = mensaje.length;
            markup = "<tr><td>" + mensaje[0] + "</td><td>" + mensaje[1] + "</td><td> Pendiente </td></tr>";
            tableBody = $("table tbody");
            tableBody.append(markup);
        });
    </script>
</body>
</html>