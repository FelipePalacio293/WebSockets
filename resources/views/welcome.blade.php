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
    <input type="text" class="form-control" placeholder="user" id="user" value="{{ Auth::user()->id; }}">
    <div class="container">
        <div class="row mt-3">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            Header
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text"  class="form-control" placeholder="Name" id="name">
                            </div>
                            <div class="form-group" id="data-message">

                            </div>
                            <div class="form-group">
                                <textarea id="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    'name' : name.val(),
                    'message' : message.val(),
                    'destination' : user.val()
                }).then(()=>{
                    message.val('');
                });
            }
        });
        window.Echo.private(`App.Models.User.` + user.val()) 
        .notification((notification) => {
            $('#data-message').append(`<strong>${notification.message}</strong><br>`);
        });
    </script>
</body>
</html>