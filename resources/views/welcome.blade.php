<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="icon" src=> --}}
    <link rel="icon" type="image/png" href="{{asset('images/tabimg.png')}}" class="">
    <title>IshworDeep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background: #1B2430;
        }

        button {
            opacity: .5;
            transition: opacity .5s ease-in-out;
        }

        button:hover {
            opacity: 1;
        }

        .text-focus-in {
            -webkit-animation: text-focus-in 2s cubic-bezier(.645, .045, .355, 1.000) forwards;
            animation: text-focus-in 1.5s cubic-bezier(.645, .045, .355, 1.000) forwards
        }

        .swing-in-top-fwd {
            -webkit-animation: swing-in-top-fwd 4s cubic-bezier(.175, .885, .32, 1.275) both;
            animation: swing-in-top-fwd 3s cubic-bezier(.175, .885, .32, 1.275) both
        }


        @-webkit-keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0
            }

            100% {
                -webkit-filter: blur(0);
                filter: blur(0);
                opacity: 1
            }
        }

        @keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0
            }

            100% {
                -webkit-filter: blur(0);
                filter: blur(0);
                opacity: 1
            }
        }


        @-webkit-keyframes swing-in-top-fwd {
            0% {
                -webkit-transform: rotateX(-100deg);
                transform: rotateX(-100deg);
                -webkit-transform-origin: top;
                transform-origin: top;
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                -webkit-transform-origin: top;
                transform-origin: top;
                opacity: 1
            }
        }

        @keyframes swing-in-top-fwd {
            0% {
                -webkit-transform: rotateX(-100deg);
                transform: rotateX(-100deg);
                -webkit-transform-origin: top;
                transform-origin: top;
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                -webkit-transform-origin: top;
                transform-origin: top;
                opacity: 1
            }
        }

    </style>
</head>
<body class=" text-light ">
    <div class="container ">
        <div class="row">
            <div class="col-12 flex-end text-light d-flex justify-content-end mt-2">
                <p><i class="fa-solid fa-envelope px-3"></i> ishwor055@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div style="width: 150px;">
            <img src="{{asset('images/id.png')}}" alt="Ishwor deep" class="swing-in-top-fwd img-thumbnail rounded-circle ">
        </div>
        <h1 class="text-focus-in">Ishwor Deep</h1>
        <p>Hello World !</p>
        <div class="mt-4">
            <a href="https://www.facebook.com/ishwordeep"><button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa-brands fa-facebook"></i></button></a>
            <a href="https://www.instagram.com/ishwordeep/"><button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa-brands fa-instagram"></i></button></a>
            <a href="https://github.com/ishwordeep"><button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Github"><i class="fa-brands fa-github"></i></button></a>
            <a href="https://www.linkedin.com/in/ishwordeep/"><button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa-brands fa-linkedin"></i></button></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
</body>
</html>
