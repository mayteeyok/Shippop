<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Search Algorithm Application - Shippop Examination</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style type="text/css">
        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="examination.php" method="get">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">
                    <h1>Search Algorithm Application</h1>
                </div>
                <div class="col-md-3"></div>
            </div><br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    List: <input type="text" id="list" name="list" class="form-control" />
                </div>
                <div class="col-md-4"></div>
            </div><br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    Search: <input type="text" id="search" name="search" class="form-control" />
                </div>
                <div class="col-md-4"></div>
            </div><br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    Search Type: <select id="search_type" name="search_type" class="form-control">
                        <option value="option1">
                            Linear Search
                        </option>
                        <option value="option2">
                            Binary Search
                        </option>
                        <option value="option3">
                            Bubble Search
                        </option>
                    </select>
                </div>
                <div class="col-md-4"></div>
            </div><br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <input type="submit" id="button" name="button" class="btn btn-success btn-block" value="Search" />
                </div>
                <div class="col-md-4"></div>
            </div><br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <a href="examination.php">
                        <input type="button" id="buttonReset" name="buttonReset" class="btn btn-danger btn-block" value="Reset" />
                    </a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form><br />

        <div class="row">
            <div class="col-md-12">
                <h3>Result</h3>
                <div class="text-center" style="border: 1px solid #000000; height: auto; width: auto;">
                    <?PHP
                    function bubble_sort($my_array, $search_value)
                    {
                        do {
                            $swapped = false;
                            for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++) {
                                if ($my_array[$i] > $my_array[$i + 1]) {
                                    list($my_array[$i + 1], $my_array[$i]) =
                                        array($my_array[$i], $my_array[$i + 1]);
                                    $swapped = true;
                                }
                            }
                        } while ($swapped);
                        return $my_array;
                    }

                    $list = "";
                    if ((isset($_REQUEST["list"]) && $_REQUEST["list"] != "") && (isset($_REQUEST["search"]) && $_REQUEST["search"] != "")) {
                        echo "List: [" . $_REQUEST["list"] . "]<br />";
                        echo "Search: " . $_REQUEST["search"] . "<br />";
                        echo "Result :::<br />";
                        $list = explode(",", $_REQUEST["list"]);
                        $new_list = array();
                        foreach ($list as $res) {
                            array_push($new_list, $res);
                        }
                        if ($_REQUEST["search_type"] == "option1") {
                            for ($i = 0; $i <= count($list) - 1; $i++) {
                                $j = $i + 1;
                                if ($_REQUEST["search"] == $list[$i]) {
                                    echo "<span style='color: green;'><strong>Round: " . $j . " ===> " . $_REQUEST["search"] . " = " . $list[$i] . " found !!</strong></span><br />";
                                    exit();
                                } else {
                                    echo "<span style='color: red;'>Round: " . $j . " ===> " . $_REQUEST["search"] . " != " . $list[$i] . "</span><br />";
                                }
                            }
                        } else if ($_REQUEST["search_type"] == "option2") {
                            for ($i = 0; $i <= count($list) - 1; $i++) {
                                $j = $i + 1;
                                if ($_REQUEST["search"] == $list[$i]) {
                                    echo "<span style='color: green;'><strong>Round: " . $j . " ===> " . $_REQUEST["search"] . " = " . $list[$i] . " found !!</strong></span><br />";
                                    exit();
                                } else {
                                    echo "<span style='color: red;'>Round: " . $j . " ===> " . $_REQUEST["search"] . " != " . $list[$i] . "</span><br />";
                                }
                            }
                        } else if ($_REQUEST["search_type"] == "option3") {
                            echo "Bubble Result Array: " . implode(',', bubble_sort($new_list, $_REQUEST["search"])) . "<br />";
                            $new_sort_array = bubble_sort($new_list, $_REQUEST["search"]);
                            for ($i = 0; $i <= count($new_sort_array) - 1; $i++) {
                                $j = $i + 1;
                                if ($_REQUEST["search"] == $new_sort_array[$i]) {
                                    echo "<span style='color: green;'><strong>Round: " . $j . " ===> " . $_REQUEST["search"] . " = " . $new_sort_array[$i] . " found !!</strong></span><br />";
                                    exit();
                                } else {
                                    echo "<span style='color: red;'>Round: " . $j . " ===> " . $_REQUEST["search"] . " != " . $new_sort_array[$i] . "</span><br />";
                                }
                            }
                        }
                    } else {
                        echo "";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>