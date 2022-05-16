<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Them San Pham</h2>
            </div>

            <div class="card-body">
                <form method="POST" onsubmit="addFeedback(event)" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên Sinh Viên</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label> <br>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Số Điện Thoại</label>
                        <input type="number" name="sdt" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Phản Hồi</label>
                        <input type="text" name="feedback" class="form-control" required>
                    </div>

                    <div>
                        <button name="sbm" class="btn btn-success" type="submit">Gửi Phản Hồi</button>
                        <a class="btn btn-outline-info" href="index.php?page_layout=danhsach">List Feedback</a>
                    </div>
                    <h3 class="text-center" id="result"></h3>

                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    function addFeedback(e) {
        e.preventDefault()
        const name = e.target.name.value
        const email = e.target.email.value
        const sdt = e.target.sdt.value
        const feedback = e.target.feedback.value
        if (!email || !sdt || !feedback || !name) {
            document.getElementById("result").innerHTML = "Chua du thong tin";
            return;
        } else {
            const errPost = $.ajax({
                type: 'post',
                url: "xulythem.php",
                data: {
                    name,
                    email,
                    sdt,
                    feedback
                },

                success: (data) => {
                    document.getElementById("result").innerHTML = data;

                }
            });


        }
    }
    </script>
</body>

</html>