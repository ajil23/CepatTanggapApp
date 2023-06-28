<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .picture {
            height: 125px;
            width: 350px;
            display: block;
            margin-top: auto;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            border-radius: 20px;
            border: 0;
            font-size: 1.8rem;
            font-weight: 600;
            margin: 1rem 0;
            padding: 2rem 3rem;
            white-space: nowrap;
            cursor: pointer;
        }

        .btn--primary {
            background: #03DE74;
            color: white;
        }

        .btn--primary:hover {
            background: #04bb63;
        }

        .btn--block {
            width: 100%;
            display: inline-block;
        }

        @media screen and (min-width:1024px) {
            .btn {
                font-size: 1.5rem;
            }
        }

        .footer__copy {
            text-align: center;
            font-size: .75rem;
            color: hsl(var(--hue), 4%, 55%);;
            margin: 5rem 0 1rem;
        }
    </style>
    <title>Pasien</title>
</head>
<div class="picture-container">
    <img class="picture" src="{{asset('backend/img/logo-2.png')}}" alt="CepatTanggap Logo">
</div>
<button type="button" class="btn btn--primary btn--block">
    Panggil Ambulans
</button>
<button type="button" class="btn btn--primary btn--block">
    Panggil Nakes
</button>
<button type="button" class="btn btn--primary btn--block">
    Pengaturan Profil
</button>
<p class="footer__copy">&#169; Aone. All rigths reserved</p>
</body>

</html>