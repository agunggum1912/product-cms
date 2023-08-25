<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <title>[Vascomm] Daftar</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style type="text/css">
        html {
            width: 100%;
        }

        ::-moz-selection {
            background: #696cff;
            color: #ffffff;
        }

        ::selection {
            background: #696cff;
            color: #ffffff;
        }

        body {
            background-color: #696cff6a;
            margin: 0;
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
            background-color: #f5f6f6;
        }

        .ExternalClass {
            width: 100%;
            background-color: #f5f6f6;
        }

        a {
            color: #21c5f5;
            text-decoration: none;
            font-style: normal;
        }

        a:hover {
            color: #505050;
            text-decoration: underline;
            font-style: normal;
        }

        p,
        div {
            margin: 0 !important;
        }

        table {
            border-collapse: collapse;
        }

        @media only screen and (max-width: 640px) {
            table table {
                width: 100% !important;
            }

            td[class="full_width"] {
                width: 100% !important;
            }

            div[class="div_scale"] {
                width: 440px !important;
                margin: 0 auto !important;
            }

            table[class="table_scale"] {
                width: 440px !important;
                margin: 0 auto !important;
            }

            table[class="featured_area"] {
                width: 454px !important;
                margin: 0 auto !important;
            }

            td[class="td_scale"] {
                width: 440px !important;
                margin: 0 auto !important;
            }

            img[class="img_scale"] {
                width: 100% !important;
                height: auto !important;
            }

            img[class="divider"] {
                width: 440px !important;
                height: 2px !important;
            }

            table[class="spacer"] {
                display: none !important;
            }

            td[class="spacer"] {
                display: none !important;
            }

            td[class="center"] {
                text-align: center !important;
            }

            table[class="full"] {
                width: 400px !important;
                margin-left: 20px !important;
                margin-right: 20px !important;
            }

            img[class="divider"] {
                width: 113px !important;
                height: 8px !important;
            }
        }

        @media only screen and (max-width: 479px) {
            table table {
                width: 100% !important;
            }

            td[class="full_width"] {
                width: 100% !important;
                display: block;
            }

            div[class="div_scale"] {
                width: 280px !important;
                margin: 0 auto !important;
            }

            table[class="table_scale"] {
                width: 280px !important;
                margin: 0 auto !important;
            }

            table[class="featured_area"] {
                width: 290px !important;
                margin: 0 auto !important;
            }

            td[class="td_scale"] {
                width: 280px !important;
                margin: 0 auto !important;
            }

            img[class="img_scale"] {
                width: 100% !important;
                height: auto !important;
            }

            img[class="divider"] {
                width: 280px !important;
                height: 2px !important;
            }

            table[class="spacer"] {
                display: none !important;
            }

            td[class="spacer"] {
                display: none !important;
            }

            td[class="center"] {
                text-align: center !important;
            }

            table[class="full"] {
                width: 240px !important;
                margin-left: 20px !important;
                margin-right: 20px !important;
            }

            img[class="divider"] {
                width: 113px !important;
                height: 8px !important;
            }
        }
    </style>
</head>
<body style="background-color: 696cff6a">
    <!-- START OF HEADER BLOCK-->
    <table width="100%" align="center" style="background-color: 696cff6a" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td>Hai {{ $data->name }},</td>
            <td>Terimakasih sudah mendaftar di Vascomm :)</td>
            <td>berikut password kamu <b>{{ $data->password }}</b></td>
        </tr>
    </table> <!-- END OF HEADER BLOCK-->
    
</body>
</html>