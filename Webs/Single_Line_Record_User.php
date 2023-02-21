<?php
session_start();

include('./dbconfig.php');

if (isset($_SESSION['newEmail'])) {
    $Session_email = $_SESSION['newEmail'];
    echo $Session_email;
    $select = "SELECT  * from users WHERE email='$Session_email'  ";
    $query = mysqli_query($conn, $select);
    $data = mysqli_fetch_assoc($query);


    // getting info of institue name  from database 
    $info = "SELECT * FROM institute WHERE instituteReferenceID='$data[referBY]'";
    $infoQuery = mysqli_query($conn, $info);
    $infoData = mysqli_fetch_assoc($infoQuery);
} else {
    header("location:./login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/userprofile.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Typing School</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<style>
    .row {
        margin-left: 0px;
        margin-right: 0px;
    }

    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
    }

    table caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
    }

    table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .35em;
    }

    table th,
    table td {
        padding: .625em;
        text-align: center;
    }

    table th {
        font-size: .85em;
        letter-spacing: .1em;
        text-transform: uppercase;
    }

    @media screen and (max-width: 600px) {
        table {
            border: 0;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            border: none;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        table tr {
            border-bottom: 3px solid #ddd;
            display: block;
            margin-bottom: .625em;
        }

        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: .8em;
            text-align: right;
        }

        table td::before {
            /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }

        table td:last-child {
            border-bottom: 0;
        }
    }
</style>

<body>

    <!--header-->
    <?php
    include('./header.php')
    ?>
    <div class="page-content page-container" id="page-content" style="margin-top: 100px;">
        <div class="padding">
            <div class="row  d-flex justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">WPM</th>
                            <th scope="col">CPM</th>
                            <th scope="col">Accuracy</th>
                            <th scope="col">Error</th>
                            <!-- <th scope="col">P_Name</th> -->
                            <th scope="col">P_Time</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- code to fetch data from data base siplay in loop -->
                        <?php
                        $select = "SELECT * FROM single_line_record WHERE user='$Session_email' ";
                        $query = mysqli_query($conn, $select);
                        $num = mysqli_num_rows($query);
                        if ($num > 0) {
                            $i = 1;
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo "<tr>
                                <td data-label='#'>$i</td>
                                <td data-label='WPM'>$data[wpm]</td>
                                <td data-label='CPM'>$data[cpm]</td>
                                <td data-label='Accuracy'>$data[accuracy]%</td>
                                <td data-label='Error'>$data[error]</td>
                                <td data-label='Passage_Time'>$data[time]m</td>
                                <td data-label='Date'>$data[date]</td>
                            </tr>";
                                $i++;
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/SearchButton.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
            if ($(e.target).hasClass('external')) {
                return;
            }
            e.preventDefault();
            $('#menu').removeClass('active');
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });

        // search button js

        const basicAutocomplete = document.querySelector('#search-autocomplete');
        const data = ['One', 'Two', 'Three', 'Four', 'Five'];
        const dataFilter = (value) => {
            return data.filter((item) => {
                return item.toLowerCase().startsWith(value.toLowerCase());
            });
        };

        new mdb.Autocomplete(basicAutocomplete, {
            filter: dataFilter
        });
    </script>
</body>

</html>