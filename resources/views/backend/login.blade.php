<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IMMOBILIER, Moulay-Bousselham</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="/img/badre-logo.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
</head>

<body>

    <section class="ftco-section">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    @if (session()->has('error'))
                        <div class="alert alert-damger">{{ session()->get('error') }}</div>
                    @endif
                    <h3 class="text-center mb-4">Have an account?</h3>
                    <form action="{{ route('login.login') }}" method="POST" class="login-form">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control rounded-left" name="email" placeholder="E-mail"
                                required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left" name="password"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get
                                Started</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <script>
        var img;
        $(document).ready(() => {
            $('#formFileMultiple').change(function() {
                // const file = this.files[0];
                // console.log(file + this.files.length);
                // alert(this.files.length);
                $("#box_list_images").html("");
                $("#box_image").html("");
                for (let i = 0; i < this.files.length; i++) {

                    if (this.files[i]) {
                        let reader = new FileReader();
                        reader.onload = function(event) {
                            // console.log(event.target.result);
                            img = $("<img onclick='showImage(event)' style='width:40px; margin: 0 3px; cursor: pointer;' src=" +
                                event.target.result + " />");
                            $("#box_list_images").append(img);
                            if (i == 0) {
                                $("#box_image").append($(
                                    "<img id='imgPreview' style='max-width:100%;' src=" + event
                                    .target.result + " />"));
                            }
                        }

                        reader.readAsDataURL(this.files[i]);
                    }
                }
            });
        });

        function showImage(event) {
            $('#imgPreview').attr('src', event.target.src);
        }

        function detailsshowImage(event) {
            $('#DetailsimgPreview').attr('src', event.target.src);
        }
    </script>
</body>

</html>
