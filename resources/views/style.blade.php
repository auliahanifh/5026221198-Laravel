<html>
    <head>
        <title>Latihan CSS</title>
        <style>
            body{
                font-family: sans-serif;
                background-color: darkolivegreen;
            }
            a:link{
                text-decoration: none;
                color: blueviolet;
            }
            a:visited{
                text-decoration: none;
                color: blueviolet;
            }
            a:hover{
                font-size: larger;
                color: coral;
                text-decoration: underline;
            }

            .headingungu{
                color: rebeccapurple;
            }

            .parratakanan{
                text-align: right;
            }

            .partengah{
                text-align: center;
            }

        </style>
    </head>
    <body>
        <h1 style="color: blanchedalmond;">Welcome!</h1>
        <h1 class="headingungu">Welcome!</h1>
        <p style="font-size: small; color: aqua;">Departemen Sistem Informasi ITS</p>
        <p class="parratakanan">Departemen Sistem Informasi ITS 2</p>
        <p class="partengah">Departemen Sistem Informasi ITS 3</p>
        <a href="{{ url('https://www.google.com')}}" target="_blank">Google</a>
        <a href="{{ url('https://my.its.ac.id')}}" target="_blank">ITS</a>
        <a href="{{ url('he')}}">File Pertemuan Pertama</a>
    </body>
</html>
