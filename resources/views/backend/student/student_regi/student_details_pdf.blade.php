<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Student Registration Card</title>
    <style>
      /* table{
          border-collapse: collapse;
      }
      h2 h3{
          margin: 0;
          padding: 0;
      }
      table{
          width: 100%;
          margin-bottom: 1rem;
          background-color: transparent;
      }
      table th,
      table td{
          margin: 0.75rem;
          vertical-align: top;
          border-top: 1px solid #dee2e6;
      }
      table thead th{
          vertical-align: bottom;
          border-bottom: 2px solid #dee2e6;
      }
      table tbody + tbody{
          background-color: #ffffff;
      }
      table-bordered{
          border: 1px solid #dee2e6;
      }
      table-bordered th,
      table-bordered td{
          border: 1px solid #dee2e6;
      }
      table-bordered thead th,
      table-bordered thead td{
          border-bottom-width: 2px;
      }
      .text-center{
          text-align: center;
      }
      .text-right{
          text-align: right;
      }
      .table-bordered thead th, .table-bordered td, .table-bordered th{
          border: 1px solid #000!important;
      }
      .table-bordered thead th{
          background-color: #cacaca;
      } */

      .col-md-12.wrapper tr td {
            border: 1px solid #000;
        }
    </style>
  </head>
  <body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table width="80%">
                    <tr>
                        <td width="33%" class="text-center">
                            <img src="{{url('public/upload/slogo.png')}}" alt="logo" width="120px" height="100px">
                        </td>
                        <td class="text-center" width="63%">
                           <h4> <strong>Primary School</strong></h4>
                           <h4> <strong>Dhaka, Bangladesh</strong></h4>
                           <h4> <strong>www.kamalhossen.com</strong></h4>
                        </td>
                        <td class="text-center">
                            <img src="{{url('public/upload/backend_imgs/'.$details['student']['image'])}}" alt="student-image" width="100px" height="120px">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12 text-center">
                <h5 style="font-weight: bold">Student Registration Card</h5>
            </div>
            <div class="col-md-12 wrapper">
                <table border="1" width="100%">
                    <tbody>
                        <tr>
                            <td style="width: 50%;">Student Name</td>
                            <td>{{$details['student']['name']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Father's Name</td>
                            <td>{{$details['student']['fname']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Mother's Name</td>
                            <td>{{$details['student']['mname']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Year</td>
                            <td>{{$details['year']['name']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Class</td>
                            <td>{{$details['student_class']['name']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Id No</td>
                            <td>{{$details['student']['id_no']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Roll No</td>
                            <td>{{$details->roll}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Mobile No:</td>
                            <td>{{$details['student']['mobile']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Address:</td>
                            <td>{{$details['student']['address']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Gender:</td>
                            <td>{{$details['student']['gender']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">Religion:</td>
                            <td>{{$details['student']['religion']}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Birth Day:</td>
                            <td>{{$details['student']['dob']}}</td>
                        </tr>
                    </tbody>
                </table>
                <i style="font-size: 10px;float-right">
                Print Date: {{date("d M Y")}}</i>
            </div>
            <br>
            <div class="col-md-12">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td width="30%"></td>
                            <td width="30%"></td>
                            <td style="width:40%;text-align:center">
                                <hr style="border:solid 1px;width:60%;color:#000;margin-bottom:0;">
                                <p style="text-align:center">Principal/Head Master</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>