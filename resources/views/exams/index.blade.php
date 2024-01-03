<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExamTimetable</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }

        .timetable {
            display: none;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        @media screen and (max-width: 600px) {
            table {
                overflow-x: auto;
            }
        }


        /* Apply styles to the <strong> elements */
        strong {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        @extends('layout')

        @section('content')
        <div class="form-group col-md-12">
            <label for="standard">Select Standard:</label>
            <select id="standard" name="standard" required onchange="showTimetable()">
                <option value="11">Standard 11</option>
                <option value="12">Standard 12</option>
            </select>
        </div>

    <div id="timetable11" class="timetable">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">Standard: 11</th>
                </tr>
                <tr>
                    <th>Exam name:</th>
                    <td>November 2023</td>
                </tr>
                <tr>
                    <th>Exam start date:</th>
                    <td>16/11/2023</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Exam end date:</th>
                    <td>29/11/2023</td>
                </tr>
                <tr>
                    <th>Mark:</th>
                    <td>20</td>
                </tr>
                <tr>
                    <th>Passing Mark:</th>
                    <td>7</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Date</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>16/11/2023</td>
                    <td>Account</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>17/11/2023</td>
                    <td>BA</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>18/11/2023</td>
                    <td>State</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>19/11/2023</td>
                    <td>Economics</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>20/11/2023</td>
                    <td>Sp</td> <!-- Replace with the actual subject name -->
                </tr>
                <tr>
                    <td>6</td>
                    <td>21/11/2023</td>
                    <td>English</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>22/11/2023</td>
                    <td>Gujarati</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="timetable12" class="timetable">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">Standard: 12</th>
                </tr>
                <tr>
                    <th>Exam name:</th>
                    <td>March 2023</td>
                </tr>
                <tr>
                    <th>Exam start date:</th>
                    <td>12/3/2023</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Exam end date:</th>
                    <td>30/3/2023</td>
                </tr>
                <tr>
                    <th>Mark:</th>
                    <td>50</td>
                </tr>
                <tr>
                    <th>Passing Mark:</th>
                    <td>18</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Date</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
               <tr>

                    <td>1</td>
                    <td>EXAM DATE NOT A FIX</td>
                    <td>PROGRESS..IN..WORK</td>
                </tr>
                {{-- <tr>

                    <td>1</td>
                    <td>16/11/2023</td>
                    <td>Account</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>17/11/2023</td>
                    <td>BA</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>18/11/2023</td>
                    <td>State</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>19/11/2023</td>
                    <td>Economics</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>20/11/2023</td>
                    <td>Sp</td> <!-- Replace with the actual subject name -->
                </tr>
                <tr>
                    <td>6</td>
                    <td>21/11/2023</td>
                    <td>English</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>22/11/2023</td>
                    <td>Gujarati</td>
                </tr> --}}

            </tbody>
        </table>
    </div>
    <script>
        function showTimetable() {
            var selectedValue = document.getElementById("standard").value;
            document.getElementById("timetable11").style.display = (selectedValue === "11") ? "block" : "none";
            document.getElementById("timetable12").style.display = (selectedValue === "12") ? "block" : "none";
        }
    </script>
    @endsection
</div>
</body>

</html>
