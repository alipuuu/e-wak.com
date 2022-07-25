
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <title>e-wak | Masuk</title>
      <link rel="icon" type="image/x-icon" href="{{asset('template')}}/dist/img/splash-fish.svg">

   <!-- Custom Styling -->
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
    <!-- Navbar Polos -->
    <nav
      class="navbar navbar-light bg-light bg-light shadow mb-5 bg-body rounded"
    >
      <div class="container-fluid d-flex justify-content-center">
        <div class="row">
          <div class="col">
            <a class="nav-link i-kan" href="/"
              ><b><i>e</i>-wak</b></a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="splash-fish mt-5" src="assets/splash-fish.svg" alt="">
        </div>
        <div class="col-md-6 col-12">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row mb-2">
              <div class="col">
                  <a href="/" class="text-center">index</a>
                  <a href="/ewak/register" class="text-center"><</a>
                {{-- <a href="/ewak/register">
                  <img src="assets/back.svg" alt="" />
                </a> --}}
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3>Masuk</h3>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputEmail1">Email </label>
              <input
                type="email"
                name="email"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Email"
                aria-describedby="emailHelp"
              />
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Password"
                id="exampleInputPassword1"
              />
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="exampleCheck1"
              />
              <label class="form-check-label" for="exampleCheck1"
                >Ingat Saya</label
              >
            </div>
           <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script>
      $(function () {
        $("input").iCheck({
          checkboxClass: "icheckbox_square-blue",
          radioClass: "iradio_square-blue",
          increaseArea: "20%" /* optional */,
        });
      });
    </script>
    <!-- Code injected by live-server -->
    <script type="text/javascript">
      // <![CDATA[  <-- For SVG support
      if ("WebSocket" in window) {
        (function () {
          function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
              var elem = sheets[i];
              var parent = elem.parentElement || head;
              parent.removeChild(elem);
              var rel = elem.rel;
              if (
                (elem.href && typeof rel != "string") ||
                rel.length == 0 ||
                rel.toLowerCase() == "stylesheet"
              ) {
                var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, "");
                elem.href =
                  url +
                  (url.indexOf("?") >= 0 ? "&" : "?") +
                  "_cacheOverride=" +
                  new Date().valueOf();
              }
              parent.appendChild(elem);
            }
          }
          var protocol =
            window.location.protocol === "http:" ? "ws://" : "wss://";
          var address =
            protocol + window.location.host + window.location.pathname + "/ws";
          var socket = new WebSocket(address);
          socket.onmessage = function (msg) {
            if (msg.data == "reload") window.location.reload();
            else if (msg.data == "refreshcss") refreshCSS();
          };
          if (
            sessionStorage &&
            !sessionStorage.getItem("IsThisFirstTime_Log_From_LiveServer")
          ) {
            console.log("Live reload enabled.");
            sessionStorage.setItem("IsThisFirstTime_Log_From_LiveServer", true);
          }
        })();
      } else {
        console.error(
          "Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading."
        );
      }
      // ]]>
    </script>
  </body>
</html>
