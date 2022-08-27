<body>

    <table style="max-width:600px; margin: 0 auto; padding: 10px; border-collapse: collapse;">

        <tr>
            <td style="background: linear-gradient(90deg, rgba(0, 12, 18, 1) 0%, rgba(0, 12, 18, 0.6855336735757549) 50%, rgba(0, 12, 18, 1) 100%); text-align: left; padding: 0; width: 100%;">
                <a href="https://nameless-wave-76836.herokuapp.com" style="text-decoration: none;">
                    <div style="display: flex;flex-direction: row;align-items: center;margin: 5px 0;">
                        <a href="https://localhost:3000/" style="display: flex;flex-direction: row;align-items: center;margin: 5px 0 0 20px; text-decoration: none;">
                            <div style="">
                                <img style="width: 50px" src="https://i.postimg.cc/JtVH20S7/logo-blanco.png">
                            </div>
                            <div>
                                <p style="margin-left: 5px;color: #eeeeee;font-family:'Noto Sans', sans-serif;">Project <span style="color:#fe4747;">Laravel</span></p>
                            </div>
                        </a>
                    </div> <!-- Fin logo -->
                </a>
            </td>
        </tr>

        <tr>
            <td style="background-color: #eeeeee">
                <div style="color: #000C12; margin: 4% 10% 2%; text-align: center;font-family: sans-serif">
                    <h2 style="color: #fe4747; margin: 0 0 7px">¡Hola {{$mailer22['nombre']}}!</h2>
                    <p style="margin: 10px auto; font-size: 15px">Nos ha llegado una notificacion en <span style="color: #fe4747; font-weight: bold;">Project Laravel</span></p>
                    <p style="margin: 2px; font-size: 15px">Nos has enviado un mensaje mediante nuestro formulario</p>
                    <p style="margin: 2px; font-size: 15px">El mensaje enviado es el siguiente</p>
                    <p style="margin: 2px; font-size: 15px"><b>Nombre: </b>{{$mailer22['nombre']}}</p>
                    <p style="margin: 2px; font-size: 15px"><b>Email: </b>{{$mailer22['email']}}</p>
                    <p style="margin: 2px; font-size: 15px"><b>Mensaje: </b>{{$mailer22['mensaje']}}</p>
                    <div style="width: 100%; text-align: center; margin: 40px auto;">
                        <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #fe4747;" href="{{route('contacto.index')}}"><span style="font-weight: bold;">Ir a la pagina</span></a>
                    </div>
                </div>
            </td>
        </tr>

    </table>

</body>