<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['account'])) {;
} else {
    header("Location: signin.php");
}
require_once("../DB.php");
$update = false;
if (isset($_GET['ID'])) {
    $update = true;
    $id = $_GET['ID'];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->query('SET CHARACTER SET utf8');
    $conn->query("SET collation_connection = 'utf8mb4_unicode_ci'");


    $stmt = $conn->prepare("SELECT src,title,top,type,end_date,attach,content FROM news WHERE ID = ? ");
    $stmt->bind_param("s", $id); //i - integer；d - double；s - string；b - BLOB
    if ($stmt->execute()) {
        $stmt->bind_result($src, $title, $top, $type, $end_date, $attach, $content);
        if (!$stmt->fetch() || $src != 0) {
            $stmt->close();
            $conn->close(); // 關閉資料庫連結
            header("Location: ../management.php?tab=post");
            exit();
        }
        $stmt->close();
    }

    $conn->close(); // 關閉資料庫連結
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="../resources/images/ncue-csie-logo.png" />
    <title>國立彰化師範大學資訊工程學系</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/setting.css">
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <?php require_once("../template/gotop.php"); ?>
    <?php require_once("../template/navbar.php"); ?>
    <script>
        $("#nav-item-management").addClass("active");
    </script>

    <div class='container' style='margin-top: 20px;'>
        <div style="display:flex;justify-content: space-between;">
            <div style="display:flex;">
                <div style="margin: auto 7px auto 0;display: flex;height: 25px;">
                    <div style="width: 10px;background-color: #ff3366;height: 100%;margin-left: 2px;"></div>
                </div>
                <div style="margin: auto;"><a href="../management.php">管理頁面</a> > <a href="../management.php?tab=post">公告</a></div>
            </div>
            <div>
                嗨～ <?php echo $_SESSION['name'] ?> 老師
                <button type="button" class="btn btn-outline-primary" onclick="document.location.href='logout.php'">登出 </button>
            </div>
        </div>
    </div>
    <section>
        <script>
            if (!!window["ActiveXObject"] || "ActiveXObject" in window) {
                $("section").append("<div class='container' style='width:100%;text-align:center;color:red'><h4>注意!!部分功能無法在IE瀏覽器正常使用!!</h4></div>");
            }
        </script>
        <div id="data_table" class="container" style="overflow:auto">
            <form action="news_ajax.php" id="form1" method="post" enctype="multipart/form-data">

                <table class="table table-hover table-bordered">
                    <tbody>
                        <input style="display:none" type="text" name="oper" value="0">
                        <input style="display:none" type="text" name="ID" value="<?php echo @$_GET['ID'] ?>">
                        <input style="display:none" type="text" name="poster" value="<?php echo $_SESSION['name'] ?>">
                        <tr>
                            <td>主旨</td>
                            <td>
                                <input type="text" name="title" value="<?php echo @$title ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>置頂</td>
                            <td>
                                <select name="top">
                                    <option value="0" <?php if (@$top === 0) echo "selected"; ?>></option>
                                    <option value="1" <?php if (@$top === 1) echo "selected"; ?>>置頂</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>公告類型</td>
                            <td>
                                <select name="type" required>
                                    <?php
                                    if (!isset($type))
                                        echo "<option disabled hidden selected></option>";
                                    $type_array = array("教務", "學務", "徵才", "獎學金", "活動", "其他");
                                    for ($i = 0; $i < 6; $i++)
                                        if ($i === @$type)
                                            echo "<option value=\"" . $i . "\" selected>" . $type_array[$i] . "</option>";
                                        else
                                            echo "<option value=\"" . $i . "\">" . $type_array[$i] . "</option>";

                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="word-break:keep-all">截止日期<br />(yyyy-mm-dd)</td>
                            <td>
                                <input id="end_date" type="date" name="end_date" value="<?php echo @$end_date ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>附件</td>
                            <td>
                                <?php
                                $json_Array = json_decode(@$attach, true);
                                if ($json_Array != null) {
                                    $count = count($json_Array);
                                    for ($i = 0; $i < $count; $i++) {
                                        echo "<div>";
                                        echo "<button class='btn btn-danger btn-sm' onclick='removeFileLink(this)'>X</button>";
                                        echo "<a href='" . $json_Array[$i]['path'] . "'>" . $json_Array[$i]['filename'] . "</a>";
                                        echo "<input type='text' name='file_path[]' style='display:none' value='" . $json_Array[$i]['path'] . "' required readonly>";
                                        echo "<input type='text' name='file_name[]' style='display:none' value='" . $json_Array[$i]['filename'] . "' required readonly>";
                                        echo "</div>";
                                    }
                                }
                                ?>
                                <!--<div>
                                    <button onclick='$(this).parent().remove()'>X</button>
                                    <a href="#">test</a>
                                    <input type='text' name='file_path[]' style='display:none' required readonly>
                                    <input type='text' name='file_name[]' style='display:none' required readonly>
                                </div>-->
                                <div>
                                    <button class="btn btn-danger btn-sm" onclick="removeFileLink(this)">X</button>
                                    <input type="file" name="my_file[]">
                                </div>



                                <button onclick="addFileLink(this)" class="btn btn-primary btn-sm">新增檔案</button>
                                <script>
                                    function addFileLink(obj) {
                                        $("<div><button class='btn btn-danger btn-sm' onclick='removeFileLink(this)'>X</button> <input type='file' name='my_file[]'></div>").insertBefore($(obj));
                                    }

                                    function removeFileLink(obj) {
                                        if (confirm("確定刪除？"))
                                            $(obj).parent().remove();
                                    }
                                </script>

                            </td>
                        </tr>
                        <tr>
                            <td>公告內容</td>
                            <td>
                                <textarea name="content" id="editor"><?php echo @$content ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <input id="submit_btn" type="submit" class="btn btn-success" value="送出">
                                <button type="button" class="btn btn-danger" onclick="goback();">返回</button>
                                <script>
                                    function goback() {
                                        if (confirm("直接返回資料將不會儲存"))
                                            document.location.href = "../management.php?tab=post";
                                    }
                                </script>
                            </td>
                        </tr>



                    </tbody>
                </table>
            </form>

        </div>

    </section>
    <?php include("../template/footer.php"); ?>
    <script src="../js/ckeditor/ckeditor.js"></script>
    <script src="../js/ckeditor/zh.js"></script>
    <script src="../js/ckfinder/ckfinder.js"></script>
    <script>
        try {
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    // The language code is defined in the https://en.wikipedia.org/wiki/ISO_639-1 standard.
                    language: 'zh',
                    ckfinder: {
                        uploadUrl: '../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json'
                    },
                })
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        } catch (e) {
            ;
        }
    </script>

    <link href="../css/toastr.min.css" rel="stylesheet" />
    <script src="../js/toastr.min.js"></script>

    <script>
        $("#form1").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            today = "<?php echo date('Y-m-d'); ?>";
            today = today.replace(/-/g, "/");
            endDate = $("#end_date").val();
            if (endDate !== "")
                endDate = endDate.replace(/-/g, "/");
            if ((endDate === "" || Date.parse(endDate).valueOf() < Date.parse(today).valueOf()) && !confirm("截止日期早於今天日期？"))
                return;
            if (confirm('送出資料？')) {

                var form = $(this);
                var url = form.attr('action');
                var formdata = new FormData($("#form1")[0]);

                filesize = 0;
                allsize = 0;
                // Display the key/value pairs
                for (var pair of formdata.entries()) {
                    if (typeof pair[1] === "object")
                        filesize += pair[1].size;
                    typeof pair[1] === "string" ? allsize += pair[1].length : allsize += pair[1].size;
                }
                if (filesize >= 83886080) //80MB
                {
                    alert("檔案大小不可超過80MB!!");
                    return;
                } else if (allsize >= 104857600) //100MB
                {
                    alert("表單大小不可超過100MB!!");
                    return;
                }

                $("#submit_btn").after("<button type='button' class='btn btn-success' style='width: 57.6px;height: 37.6px;padding:1px'><img class='btn btn-success' src='../resources/images/loading.gif' style='height:30px;border:0px'></button>");
                $("#submit_btn").remove();
                $.ajax({
                    type: "POST",
                    url: url,
                    data: formdata, // serializes the form's elements.
                    contentType: false,
                    dataType: "json",
                    cache: false,
                    processData: false,
                    success: function(data) {
                        //var myobj = JSON.parse('{ "hello":"world" }');
                        toastr.options = {
                            "closeButton": true
                        }
                        if (data.error) {
                            toastr.error(data.error.msg, "Error");
                            //throw data.error.msg;
                        } else {
                            $.ajax({
                                type: "GET",
                                url: "http://www.google.com/ping?sitemap=http://www.csie.ncue.edu.tw/csie/search.xml"
                            });
                            toastr.success(data.success.msg, "Success");
                            $.post("/csie/web-push.php", {
                                message: data.data.message,
                                url: data.data.url
                            } /*, function(data) {}, "json"*/ );
                            setTimeout("window.location.replace('../management.php?tab=post')", 1000);
                        }
                    },
                    error: function(jqXHR, exception) {
                        if (jqXHR.status === 200)
                            toastr.error(jqXHR.responseText, "Error");
                        else {
							toastr.error(jqXHR.responseText, "Error"); // testing
                            // toastr.error("錯誤代碼：" + jqXHR.status, "Error");
						}

                    },
                });
            }

        });
    </script>
</body>

</html>