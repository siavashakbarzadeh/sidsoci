<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <style>
        body {
            font-family: "Arial";
            margin: 0px;
            padding: 0px;
        }
        .container{
            margin: 10px auto 2px;


        }
        .row{

            width:100%;
            /*padding: 12px 0px;*/
            border: solid 1px black;
        }

        @media print {
            .no-print,
            .no-print * {
                display: none !important;
            }
        }


        table {
            width: 100%;
            position: relative;
            border-collapse: collapse;
        }

    </style>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>SB Admin 2 - Dashboard</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div style="width: 40%;min-height: auto; float: left;border-right: solid 1px black;">
            <p style="padding: 10px;">
                <span style="width: 70%;float: left;margin-top: -4px;">
                    <span style="text-transform: uppercase;font-size: 10px;">conti correnti postali</span> -
                    <span style="text-transform: capitalize;font-size: 10px;">ricevuta di versamento </span>
                </span>
                <span style="width: 30%;float: right;font-size: 10px;">
                    <span style="float: right;">banco <b>posta</b></span>
                </span>
            </p>


        </div>
        <div style="width: 60%;min-height: auto;float: left; ">
            <p style="padding: 10px;">
                <span style="width: 70%;float: left;margin-top: -4px;">
                    <span style="text-transform: uppercase;font-size: 10px;">conti correnti postali</span> -
                    <span style="text-transform: capitalize;font-size: 10px;">ricevuta di accredito </span>
                </span>
                <span style="width: 30%;float: right;font-size: 10px;">
                    <span style="float: right;">banco <b>posta</b></span>
                </span>
            </p>

        </div>
    </div>
    <div class="row">
{{--        40%--}}
                <div style="width: 40%;height: 500px; float: left;border-right: solid 1px black;">
                    <p style="padding: 16px;">
{{--                        <img src="../../../public/img/euro.jpeg" alt="" style="width: 30px;height: 30px;">--}}
                        <span class="bg-dark" style="display: inline-block; background: black;width: 25px;height: 25px;color: white;
                        padding: 5px;text-align: center;font-size: 25px;">€</span>
                        <span>sul C/C n. &nbsp;&nbsp;&nbsp;&nbsp; <b>88043005</b></span>
                        <span style="margin-left: 70px;">di Euro &nbsp;&nbsp;<b>10.00</b>  </span>
                        <p style="text-transform: uppercase;font-size: 9px;padding: 11px;margin-top: -10px">
                        importo in lettere: _________________________________________________
                        </p>

                        <fieldset style="border: solid 1px black;padding: 10px;margin:0px 10px;border-radius: 5px;max-height: 50px;">
                            <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">intestato a</b></legend>
                            <p style="font-weight: bold;font-size: 13px;padding: 2px 20px;text-transform: uppercase;font-weight: bolder;border-bottom: solid 1px black;">società italiana di diabetologia</p>

                        </fieldset>
                    <fieldset style="border: solid 1px black;padding: 10px;margin:12px 10px;border-radius: 5px;max-height: 30px;">
                        <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">causale</b></legend>
                        <p style="font-size: 13px;padding: 2px 30px;text-transform: none;border-bottom: solid 1px black;">pagamento quota/e associativale</p>

                    </fieldset>
                    <fieldset style="border: solid 1px black;padding: 10px;margin:12px 10px;border-radius: 5px;height: auto;width: 50%;">
                        <p style="font-weight: bold;text-transform: capitalize;border-bottom: 1px solid black;font-size: 11px;padding-top: 1px;padding-bottom: 0px;">{{$member->surname ?? ''}} {{$member->name ?? ''}}</p>
                        <p style="text-transform: uppercase;font-size: 8px;font-weight: bolder;margin-top: -5px;padding-top: 1px;padding-bottom: 0px;">via-piazza</p>
                        <p style="font-weight: bold;text-transform: capitalize;border-bottom: 1px solid black;font-size: 11px;padding-top: 1px;padding-bottom: 0px;">{{$member->residence->residence ?? ''}}</p>
                        <p style="text-transform: uppercase;font-size: 8px;font-weight: bolder;margin-top: -5px;padding-top: 1px;padding-bottom: 0px;">cap</p>
                        <p style="font-weight: bold;text-transform: capitalize;border-bottom: 1px solid black;font-size: 11px;padding-top: 1px;padding-bottom: 0px;">{{$member->residence->cap ?? ''}}</p>
                        <p style="text-transform: uppercase;font-size: 8px;font-weight: bolder;margin-top: -5px;padding-top: 1px;padding-bottom: 0px;">localita</p>
                        <p style="font-weight: bold;text-transform: capitalize;border-bottom: 1px solid black;font-size: 11px;padding-top: 1px;padding-bottom: 0px;">{{$member->residence->city ?? ''}}</p>

                    </fieldset>

                    </p>
{{--                    insert here--}}
                    <div style="margin:-13px 0px;padding: 4px;clear: both;font-weight: bold;height:20px;width: 96%;"  >
                    <span style="width: 100%;font-size: 8px;text-transform: uppercase;margin-right: 30px;list-style-type: none;font-weight: bold;text-align: right;">

                    <li style="margin-top: -12px;">bollo dell'ufficio postale</li>


                    </span>
                    </div>


{{--                    enteha--}}
                    <div style="width: 100%;height:60px;border-right: solid 1px black;border-left: solid 1px black;border-bottom: solid 1px black;margin-top: 60px;">

                    </div>
                 </div>
{{--        60%--}}
        <div style="width: 60%;height: 500px;float: left;">
            <p style="padding: 10px;">
{{--                <img src="../../../public/img/euro.jpeg" alt="" style="width: 30px;height: 30px;">--}}
                <span class="bg-dark" style="display: inline-block; background: black;width: 25px;height: 25px;color: white;
                        padding: 5px;text-align: center;font-size: 25px;">€</span>
                <span>sul C/C n. &nbsp;&nbsp;&nbsp;&nbsp; <b>88043005</b></span>
                <span style="margin-left: 120px;">di Euro &nbsp;&nbsp;&nbsp;&nbsp;<b>{{$member->member_payments->amount ?? ''}}</b> </span>
            </p>
            <p style="text-transform: uppercase;font-size: 9px;padding: 11px;">
                <b style="font-weight: bolder;font-size: 14px;">TD &nbsp;123 </b>
                &nbsp;&nbsp;&nbsp;&nbsp;importo in lettere: __________________________________________________
            </p>
            <fieldset style="border: solid 1px black;padding: 10px;margin:-7px 25px;border-radius: 5px;max-height: 50px;">
            <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">intestato a</b></legend>
            <p style="font-weight: bold;font-size: 16px;padding: 2px 50px;text-transform: uppercase;font-weight: bolder;border-bottom: solid 1px black;">
                società italiana di diabetologia
            </p>

            </fieldset>
            <fieldset style="border: solid 1px black;padding: 10px;margin:18px 25px;border-radius: 5px;max-height: 30px;">
                <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">causale</b></legend>
                <p style="font-size: 14px;padding: 2px 100px;text-transform: none;border-bottom: solid 1px black;">pagamento quota/e associativale</p>
            </fieldset>
            <div style="height:90px;width: 30%;margin-left: 10px;float: left;padding-top:30px;text-align: center;">
            &nbsp;<b style="font-size: 20px;">{{$member->id}}</b>
            </div>
{{--            65%--}}
            <div style="height:auto;width: 65%;float: right;">
                <fieldset style="border: solid 1px black;padding: 10px;margin:-7px 25px;border-radius: 5px;max-height: 50px;">
                    <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">eseguito da</b></legend>
                    <p style="font-weight: bold;font-size: 14px;padding: 2px 50px;text-transform: uppercase;font-weight: bolder;border-bottom: solid 1px black;">
                        {{$member->surname ?? ''}} {{$member->name ?? ''}}
                    </p>

                </fieldset>
                <fieldset style="border: solid 1px black;padding:0px 10px;margin: 20px 25px;border-radius: 5px;max-height: 50px;">
                    <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">via-piazza</b></legend>
                    <p style="font-weight: 200;font-size: 11px;padding: 2px 50px;text-transform: uppercase;font-weight: bolder;">
                        {{$member->residence->residence ?? ''}}
                    </p>

                </fieldset>
                <div  style="padding:0px;margin: 20px 25px;max-height: 50px;width: 89%;">
                    <fieldset style="border: solid 1px black;padding:4px 0px;margin: 20px 0px;border-radius: 5px;max-height: 25px;width: 30%;">
                        <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">cap</b></legend>
                        <p style="font-weight: 200;font-size: 11px;padding: 2px 50px;text-transform: uppercase;">
                            {{$member->residence->cap ?? ''}}
                        </p>

                    </fieldset>
                    <fieldset style="border: solid 1px black;padding:4px 0px;margin: -55px 10px;border-radius: 5px;max-height: 25px;width: 60%;float: right">
                        <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">localita</b></legend>
                        <p style="font-weight: 200;font-size: 11px;padding: 2px 50px;text-transform: uppercase;">
                            {{$member->residence->city ?? ''}}
                        </p>

                    </fieldset>
                </div>
            </div>
{{--            khate nahaie--}}
            <div style="margin:-53px 0px 0px; ;padding: -30px 4px 0px;clear: both;font-weight: bold;height:20px;width: 100%;"  >
                <span style="width: 40%;font-size: 8px;text-transform: uppercase;padding-left: 10px;list-style-type: none;font-weight: bold;">

                    <li>bollo dell'ufficio postale</li>

                    <li style="font-size: 7px;text-transform: none;padding-left: 15px;">codice bancoPosta</li>
                </span>
                <span style="width: 60%;font-size: 8px;text-transform: uppercase;padding-left: 10px;list-style-type: none;float: right;margin-top: -23px;font-weight: bold;">

                    <li>importante:non scrivere nella zona sottostcinte</li>

                    <li style="font-size: 7px;text-transform: none;padding-left: 84px;">importo in euro &nbsp;&nbsp;  numero conto &nbsp;&nbsp;  tipo documento</li>
                </span>
            </div>
            <div style="width: 95%;padding-right:30px;border-right: solid 1px black;border-bottom: solid 1px black;height: 61px;clear: both;margin-top: -110px;font-weight: bold;font-size: 22px;text-align: right;">
                <span style="margin-top: 10px;display: inline-block;">123 ></span>
            </div>
        </div>
    </div>
    <div style="position: fixed;top: 345px;right: -78px;width: 230px;height: 20px;transform: rotate(-90deg);font-size: 7px;">
        Mod CH 8 ter-Mod12409A-ed1/10-EP1902/EP1903-St.[3]
    </div>
                    {{--    <div class="row">--}}
{{--
{{--        <div style="width: 60%;min-height: auto;float: left;border: solid 1px red; background: #1cc88a ">--}}
{{--

{{--                <fieldset style="border: solid 1px black;padding: 10px;margin:-7px 10px;border-radius: 5px;max-height: 50px;">--}}
{{--                    <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">intestato a</b></legend>--}}
{{--                    <p style="font-weight: bold;font-size: 16px;padding: 2px 50px;text-transform: uppercase;font-weight: bolder;border-bottom: solid 1px black;">--}}
{{--                        società italiana di diabetologia--}}
{{--                    </p>--}}

{{--                </fieldset>--}}
{{--                <fieldset style="border: solid 1px black;padding: 10px;margin:18px 10px;border-radius: 5px;max-height: 30px;">--}}
{{--                    <legend style="text-transform: uppercase;font-size: 9px;width: auto;"><b style="text-transform: uppercase;border: none;">causale</b></legend>--}}
{{--                    <p style="font-size: 14px;padding: 2px 100px;text-transform: none;border-bottom: solid 1px black;">pagamento quota/e associativale</p>--}}
{{--                </fieldset>--}}
{{--                <div style="height:90px;width: 30%;margin-left: 10px;float: left;padding-top:30px;text-align: center;">--}}
{{--                    &nbsp;<b style="font-size: 20px;">{{$member->id}}</b>--}}
{{--                </div>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--                    <br>--}}



{{--                </div>--}}
{{--            <p style="padding-left: 50px; padding-left:20px;margin: -10px 0px 0px 10px;width:93%;clear: both;height: auto;border: solid 1px yellow;">--}}
{{--            <div style="text-transform: uppercase;font-size: 8px;font-weight: bold;width: 30%;float: left;margin-top: 2px;padding-left: 10px; ">--}}
{{--                <span style="margin-bottom: 2px;list-style-type: none;">bollo dell'ufficio postale</span><br/>--}}
{{--                <span style="font-size: 7px;font-weight: bold;list-style-type: none;margin-left: 20px;">codice bancoposta</span>--}}
{{--            </div>--}}
{{--            <div style="text-transform: uppercase;font-size: 8px;font-weight: bold;float: right;width: 70%">--}}
{{--                <span style="margin-bottom: 2px;list-style-type: none;font-size: 11px;">importante: non scrivere nella  zona sottostante</span><br/>--}}
{{--                <span style="font-size: 7px;font-weight: bold;list-style-type: none;margin-left: 20px;display: inline-block;padding-left: 46px;">   &nbsp;&nbsp;<span style="padding-left:50px;">importo in euro</span> &nbsp;&nbsp;numero conto &nbsp;&nbsp;tipo documento</span>--}}
{{--            </div>--}}
{{--            </p>--}}









</div>



{{--<table style="margin: 300px 10px 10px;">--}}
{{--    <tr style="border: 1px solid black">--}}
{{--        <td style="width: 50% ;border: 1px solid black"><span style="text-transform: uppercase;font-weight: 800;font-size: 10px;text-align: left;">conti correnti postali</span>.ricevuta di versamento banco posta</td>--}}
{{--        <td style="width: 50%;text-align: right;font-size: 8px;padding-left: 60px;"> banco <span style="font-weight: bolder;">posta</span> </td>--}}
{{--    </tr>--}}
{{--    <tr style="border: 1px solid black">--}}
{{--        <td style="width: 50% ;border: 1px solid red">--}}
{{--            <div class="bg-success">sul c/c n. 88043005</div>--}}
{{--            <div class="bg-success">di Euro 10.00</div>--}}
{{--            <div class="bg-danger">importo in lettere</div>--}}
{{--            <div class="bg-danger">intestato a</div>--}}
{{--            <div class="bg-success">società italiana di diabetologia</div>--}}
{{--            <div class="bg-danger">causale:</div>--}}
{{--            <div class="bg-success">eseguto da:{{$member->surname ?? ''}} {{$member->name ?? ''}}</div>--}}
{{--            <div class="bg-success">via-piazza:{{$member->residence->residence ?? ''}}</div>--}}
{{--            <div class="bg-success">Cap:{{$member->residence->cap ?? ''}}</div>--}}
{{--            <div class="bg-success">localita:{{$member->residence->city ?? ''}}</div>--}}
{{--            conti correnti postali.ricevuta di versamento banco posta--}}
{{--        </td>--}}
{{--        <td style="width: 50%; height: 180px">--}}
{{--            <div class="bg-danger">sul c/c n. 88043005</div>--}}
{{--            <div class="bg-success">di Euro 10.00</div>--}}
{{--            conti correnti postali.ricevuta di versamento banco posta--}}
{{--        </td>--}}
{{--    </tr>--}}
{{--    <tr style="border: 1px solid black;">--}}
{{--        <td style="width: 50% ;border: 1px solid black"></td>--}}
{{--        <td style="width: 50%; text-align: right; height: 80px">123></td>--}}
{{--    </tr>--}}
{{--</table>--}}
{{--<div class="card">--}}
{{--    dgsgsdf--}}
{{--</div>--}}



</body>
</html>
