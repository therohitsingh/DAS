


<html>
<head>
    <meta charset="utf-8">
    <title>MedicalReport</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <h4 class="mb-0"><a href="/" class=" sidebar-brand brand-logo text-white h2 mb-0"><strong>HealthGuru<span class="text-danger">.</span></strong></a></h4>
                        </td>

                        <td>
                             Name :- {{$data->patname}} <br>
                             Email :- {{$data->patmail}} <br>
@foreach($data1 as $datas)
Phone: {{$datas->mobile}}
                            @endforeach

                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            Doctor Name: Dr.{{$data->docname}}<br>
                            Doctor Email: {{$data->docmail}}<br>
                            Specialization: {{$data->docspel}}<br>
                            Created: {{$data->created_at}}<br>
                        </td>

                        <td>
                            @foreach($data1 as $datas)
                           Gender :- {{$datas->gender}} <br>
                            Address :- {{$datas->address}} <br>
                            @endforeach
                             Blood Group :- {{$data->patblood}}

                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Medical Report
            </td>

            <td>

            </td>
        </tr>

        <tr class="item">
            <td>
                Symptoms
            </td>

            <td>
                {{$data->symp}}
            </td>

        </tr>
        <tr class="item">
            <td>
                Medical History
            </td>

            <td>
                {{$data->medhist}}
            </td>
        </tr>

        <tr class="heading">
            <td>
                Treatment
            </td>

            <td>

            </td>
        </tr>

        <tr class="item">
            <td>
                Priscription
            </td>

            <td>
                {{$data->priscrip}}
            </td>
        </tr>
        <tr class="item">
            <td>
                Medicines
            </td>

            <td>
                {{$data->medic}}
            </td>
        </tr>

        <tr class="heading">
            <td>
                Payment
            </td>

            <td>
                Price
            </td>
        </tr>



        <tr class="total">
            <td>
                Treatment Fees
            </td>

            <td>
                Total: {{$data->docfee}}
            </td>
        </tr>
    </table>
</div>
</body>
</html>
