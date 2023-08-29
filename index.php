<!DOCTYPE html>
<html lang="en">

<head>
    <!--CSS past Stat-->
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .hedr {
            display: flex;
            justify-content: space-between;
            background-color: Gray;
            align-items: center;
            padding: 1rem 2rem;
        }

        body {
            background-color: black;
        }

        .funtion-one,
        .funtion-two {
            margin-top: 3rem;
            width: 10rem;
            height: 9rem;
            flex-shrink: 0;
            border-radius: 3rem;
            background-color: Gray;
            font-size: 9pt;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 3rem 2rem;
            color: white;
            border-color: white;
            border: 1px solid;

        }

        .funtion-one :hover {
            background-color: black;

        }

        .funtion-two :hover {
            background-color: black;

        }


        .full-body {
            display: flex;
            justify-content: space-evenly;
        }
    </style>
    <!--CSS past End-->
</head>
<!--Hedar Part "HTML" Start-->

<body>
    <div class="hedr">
        <h1>Home Work</h1>
        <h3>Class - 2</h3>
    </div>
    <!--Hedar Part "HTML" End-->


    <dive class="full-body">
        <div class="fast-row">

            <!-- Funtion-1 "PHP" and some "HTML" Part-->

            <div class="funtion-one">
                <h1>1.Addition</h1>

                <!--"PHP" Start-->

                <?php
                function addition($date, $rice, $fish, $vegetable = "0")
                {
                    $result = $rice + $fish + $vegetable;
                    echo "$date Total Cost $result Tk";
                    echo "<br>";
                }
                addition('1.20.2023', 10, 10, 10, 10);
                addition('6.15.2023', 16, 46, 12);
                addition('15.8.2023', 54, 645, 67);

                ?>
                <!--"PHP" End-->
            </div>



            <!-- Funtion-2 "PHP" and some "HTML" Part-->

            <div class="funtion-two">
                <h1>2.Subtraction</h1>

                <!--"PHP" Start-->

                <?php
                function subtraction($sell_price, $purchase_price)
                {
                    $result = $sell_price - $purchase_price;
                    echo "Net Profit $result Tk";
                    echo "<br>";
                }

                subtraction(100, 70);
                subtraction(200, 160);
                subtraction(500, 268)
                ?>

                <!--"PHP" End-->
            </div>


            <!-- Funtion-3 "PHP" and some "HTML" Part-->

            <div class="funtion-one">
                <h1>3.Print Maximum Value</h1>

                <!--"PHP" Start-->

                <?php

                function find_the_maximum_value($number_one, $number_two, $number_three)
                {
                    $result = (max($number_one, $number_two, $number_three));
                    echo "The maximum value is: $result";
                    echo "<br>";
                }

                find_the_maximum_value(12, 50, 80);
                find_the_maximum_value(56, 94, 84);
                find_the_maximum_value(19, 41, 12);


                ?>
                <!--"PHP" End-->
            </div>

            <!-- Funtion-4 "PHP" and some "HTML" Part-->

            <div class="funtion-one">
                <h1>4.Print Minimum Value</h1>

                <!--"PHP" Start-->

                <?php

                function find_the_minimum_value($number_one, $number_two, $number_three)
                {
                    $result = (min($number_one, $number_two, $number_three));
                    echo "The minimum value is: $result";
                    echo "<br>";
                }

                find_the_minimum_value(12, 50, 80);
                find_the_minimum_value(56, 94, 84);
                find_the_minimum_value(19, 41, 12);


                ?>
                <!--"PHP" End-->
            </div>

            <!-- Funtion-5 "PHP" and some "HTML" Part-->

            <div class="funtion-one">
                <h1>5.Addition, subtraction, multiplication, division</h1>

                <!--"PHP" Start-->

                <?php

                function value($number_one, $number_two, $number_three, $number_four, $numer_five)
                {
                    $result = $number_one + $number_two - $number_three * $number_four / $numer_five;
                    echo "The minimum value is: $result";
                    echo "<br>";
                }

                value(80, 20, 50, 2, 2);
                value(580, 20, 50, 2, 2);
                value(180, 20, 50, 2, 2);


                ?>
                <!--"PHP" End-->
            </div>


        </div>



        <div class="second_row">

            <!-- Funtion-6 "PHP" and some "HTML" Part-->

            <div class="funtion-one">
                <h1>6.Print Capital</h1>

                <!--"PHP" Start-->

                <?php

                function print_Capital($name)
                {
                    $result = strtoupper($name);
                    echo "Name: $result";
                    echo "<br>";
                }

                print_Capital('Ananda Roy');
                print_Capital('Nur Mostakim Sayem');
                print_Capital('KM.Heal');
                print_Capital('Rakib');
                print_Capital('Rafsan');



                ?>
                <!--"PHP" End-->


            </div>


            <!-- Funtion-7 "PHP" and some "HTML" Part-->

            <div class="funtion-one">
                <h1>7.Multiplication</h1>

                <!--"PHP" Start-->

                <?php

                function multiplication($number_one, $number_two)
                {
                    $result = $number_one * $number_two;
                    echo "Result : $result";
                    echo "<br>";
                }

                multiplication(5, 10);
                multiplication(20, 6);
                multiplication(30, 10);


                ?>
                <!--"PHP" End-->


            </div>


            <!-- Funtion-8 "PHP" and some "HTML" Part-->

            <div class="funtion-one">
                <h1>8.Division</h1>

                <!--"PHP" Start-->

                <?php

                function division($number_one, $number_two)
                {
                    $result = $number_one / $number_two;
                    echo "Result : $result";
                    echo "<br>";
                }

                division(5, 10);
                division(20, 6);
                division(30, 10);


                ?>
                <!--"PHP" End-->


            </div>

            <!-- Funtion-9 "PHP" and some "HTML" Part-->

            <div class="funtion-one">
                <h1>9.Squre</h1>

                <!--"PHP" Start-->

                <?php

                function squre($number_one, $number_two)
                {
                    $result = $number_one ** $number_two;
                    echo "Result : $result";
                    echo "<br>";
                }

                squre(8, 2);
                squre(3, 3);
                squre(4, 4);


                ?>
                <!--"PHP" End-->


            </div>

            <!-- Funtion-10 "PHP" and some "HTML" Part-->

            <div class="funtion-one">
                <h1>10.Print Lower</h1>

                <!--"PHP" Start-->

                <?php

                function print_lower($name)
                {
                    $result = strtolower($name);
                    echo "Name: $result";
                    echo "<br>";
                }

                print_lower('Ananda Roy');
                print_lower('Nur Mostakim Sayem');
                print_lower('KM.Heal');
                print_lower('Rakib');
                print_lower('Rafsan');



                ?>
                <!--"PHP" End-->


            </div>

        </div>






    </dive>
</body>

</html>