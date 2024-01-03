<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <style>


        img {
            max-width: 100%;
            height: auto;
        }

        .container-fluid {
            padding: 20px;
        }

        .header {
            border: 1px solid rgb(7, 0, 0);
            text-align: center;
            padding: 20px;
            background-color: #3498db;
            /* Updated Header background color */
            color: #fff;
            /* Updated Header text color */
            background-image: linear-gradient(orange, white, lime);
        }

        .header table {
            width: 100%;
        }

        .header h1,
        .header h4,
        .header h5 {
            margin: 0;
        }

        .header h6 {
            margin-bottom: 20px;
        }

        .content {
            border: 1px solid rgb(160, 158, 158);
            text-align: center;
            padding: 20px;
            background-color: #3498db;
            /* Updated Content background color */
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
        }

        .content th,
        .content td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .content th {
            background-color: #e74c3c;
            /* Updated Header background color for table */
            color: #fff;
            /* Updated Header text color */
        }

        .secondcontent {
            border: 1px solid rgb(12, 12, 12);
            text-align: center;
            padding: 20px;
            color: #0f0f0f;
            background-color: #3498db;
            /* Updated Second content background color */
        }

        .secondcontent table {
            width: 100%;
            border-collapse: collapse;
        }

        .secondcontent td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .secondimage {
            width: 150px;
            height: auto;
        }

        .center-table {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="header">
            <table class="center-table">
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td colspan="2">
                                    <img src="{{ asset('SADBHAVNA_SCHOOL.jpg') }}" alt="School Image">
                                </td>
                                <td>
                                    <h1><strong>SADBHAVANA SCHOOL</strong></h1>
                                    <h6>School Address : HALVAD IN SARA, ROD</h6>
                                    <h4>Exam Name - (Session 2020-21)</h4>
                                    <h5>Get Yours At :<span style="color: blue;"> www.resultthosting.net</span></h5>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <br>
                        <table class="secondcontent">
                            <tr>
                                <td>
                                    <h5>Student Name: Sandip</h5>
                                </td>
                                <td>Date of Birth: 06/07/2004</td>
                                <td rowspan="3" class="secondimage">
                                    <img src="{{ asset('MY PHOTO.jpg') }}" alt="No Photo"
                                        style="width: 100px; height: 100px; border-radius: 5px;">
                                </td>
                            </tr>
                            <tr>
                                <td>Father Name: Tribhovanbhai</td>
                                <td>Standard: 12</td>
                            </tr>
                            <tr>
                                <td>Code ID: 123</td>
                                <td>Class: A</td>
                            </tr>
                        </table>

                        <br><br>
                        <table class="content" border="1px">
                            <tr>
                                <th>no</th>
                                <th><strong>subject</strong></th>
                                <th>total mark</th>
                                <th>passingmark</th>
                                <th>mark</th>
                                <th>grade</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>hindi</td>
                                <td>20</td>
                                <td>7</td>
                                <td>19</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>hindi</td>
                                <td>20</td>
                                <td>7</td>
                                <td>19</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>hindi</td>
                                <td>20</td>
                                <td>7</td>
                                <td>19</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>hindi</td>
                                <td>20</td>
                                <td>7</td>
                                <td>19</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>hindi</td>
                                <td>20</td>
                                <td>7</td>
                                <td>19</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td colspan="4" style="align=center">total mark :<strong> 500 </strong>into </td>
                                <td><strong>50</strong></td>
                                <td><strong>over all grade :A+</strong></td>
                            </tr>
                        </table>
                        <br>
                        <table class="content">
                            <tr>
                                <td>
                                    <h4>result:pass</h4>
                                </td>
                                <td>
                                    <h4>parcentage: 99%</h4>
                                </td>
                                <td>
                                    <h4>rank: 1 </h4>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table class="content">
                            <tr>
                                <td>
                                    <h4>class teacher sign :</h4>
                                </td>
                                <td>
                                    <h4>principal sign :</h4>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
