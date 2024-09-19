<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>重設密碼</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong" />
    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        table,
        td {
            mso-table-lspace: 0 !important;
            mso-table-rspace: 0 !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        a {
            text-decoration: none;
        }

        *[x-apple-data-detectors],
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        .im {
            color: inherit !important;
        }

        img.g-img+div {
            display: none !important;
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u~div .email-container {
                min-width: 320px !important;
            }
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
            }
        }

        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
            }
        }
    </style>
    <style>
        .primary {
            background: #2c3e50;
        }

        .bg_white {
            background: #ecf0f1;
        }

        .bg_light {
            background: #bdc3c7;
        }

        .bg_black {
            background: #2c3e50;
        }

        .bg_dark {
            background: #34495e;
        }

        .email-section {
            padding: 2.5em;
        }

        /*BUTTON*/
        .btn {
            padding: 20px 25px;
        }

        .btn.btn-primary {
            border-radius: 10px;
            background: #d35400;
            color: #ffffff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Playfair Display", serif;
            color: #000000;
            margin-top: 0;
        }

        body {
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, 0.4);
        }

        a {
            color: #2980b9;
        }

        table {}

        /*LOGO*/
        .logo h1 {
            margin: 0;
        }

        .logo h1 a {
            color: #ecf0f1;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            font-family: "Montserrat", sans-serif;
        }

        /*HERO*/
        .hero {
            position: relative;
        }

        .hero img {}

        .hero .text {
            color: #ecf0f1;
        }

        .hero .text h2 {
            color: #255966;
            font-size: 24px;
            margin-bottom: 25px;
        }

        .hero .text h3 {
            color: #255966;
            font-size: 20px;
            margin-bottom: 25px;
        }

        .hero-bg {
            background-color: #e5e5f7;
            opacity: 0.8;
            background-image: radial-gradient(#000000 0.5px, #9e9e9e 0.5px);
            background-size: 10px 10px;
            height: 400px;
        }

        .heading-section {
            background-color: #06374fa8;
            padding: 10px;
        }

        .heading-section .subheading::after {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -10px;
            content: "";
            width: 80%;
            height: 2px;
            background: #f3a333;
            margin: 0 auto;
        }

        .heading-section .subheading {
            margin-bottom: 20px !important;
            display: inline-block;
            text-align: center;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(214, 205, 205, 0.78);
            position: relative;
            width: 100%;
        }

        /* CARD */
        .card {
            background: #4e4e6d7e;
            max-width: 400px;
            padding: 20px;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center items horizontally */
            justify-content: center;
            /* Center items vertically */
            text-align: center;
            /* Ensure text is centered */
        }

        .card .form-group {
            width: 100%;
            text-align: left;
            margin-bottom: 15px;
        }

        .card label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #e4dfdf;
            font-weight: bold;
        }

        .card .input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .card .input.invalid {
            border-color: #e74c3c;
        }

        .card .btn {
            background: #3498db;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 100%;
            max-width: 200px;
        }

        .card .btn:disabled {
            background: #bdc3c7;
            cursor: not-allowed;
        }

        .card .input-error {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
        }

        /*FOOTER*/
        .footer {
            color: rgba(255, 255, 255, 0.5);
        }

        .footer .heading {
            color: #ffffff;
            font-size: 20px;
        }

        .footer .heading2 {
            color: #ffffff;
            font-size: 14px;
        }

        .footer ul {
            margin: 0;
            padding: 0;
        }

        .footer ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: rgba(255, 255, 255, 1);
        }

        @media screen and (max-width: 500px) {
            .icon {
                text-align: left;
            }

            .text-services {
                padding-left: 0;
                padding-right: 20px;
                text-align: left;
            }

            .hero .text h1 {
                color: #000000;
                font-size: 20px;
                margin-bottom: 20px;
            }

            .hero .text h2 {
                color: rgba(0, 0, 0, 0.4);
                font-size: 18px;
                margin-bottom: 20px;
            }

            .hero .text h3 {
                color: rgba(0, 0, 0, 0.4);
                font-size: 16px;
                margin-bottom: 20px;
            }

            .card {
                background: #4e4e6d7e;
                max-width: 400px;
                padding: 20px;
                margin: 30px auto;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .card .form-group {
                width: 100%;
                text-align: left;
                margin-bottom: 10px;
            }

            .card label {
                font-size: 12px;
                margin-bottom: 5px;
                color: #e4dfdf;
                font-weight: bold;
            }

            .card .input {
                width: 100%;
                font-size: 12px;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            .card .input.invalid {
                border-color: #e74c3c;
            }

            .card .btn {
                background: #3498db;
                color: #ffffff;
                padding: 10px;
                border-radius: 5px;
                text-align: center;
                font-size: 16px;
                border: none;
                cursor: pointer;
                width: 100%;
                max-width: 150px;
            }

            .card .btn:disabled {
                background: #bdc3c7;
                cursor: not-allowed;
            }

            .card .input-error {
                color: #e74c3c;
                font-size: 12px;
                margin-top: 5px;
            }
        }
    </style>
</head>

<body>
    <div style="
        width: 100%;
        margin: 0;
        padding: 0 !important;
        mso-line-height-rule: exactly;
        background-color: #222222b0;
    ">
        <div style="max-width: 600px; margin: 0 auto" class="email-container">
            <!-- BEGIN BODY -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto">
                <tr>
                    <td class="primary logo" style="padding: 1em 2.5em; text-align: center">
                        <h1><a href="#">易期付</a></h1>
                    </td>
                </tr>
                <!-- end tr -->
                <tr>
                    <td valign="middle" class="hero" style="
                                background-image: url(https://pic56.photophoto.cn/20200729/0008020276514272_b.jpg);
                                background-size: cover;
                                height: 400px;
                            ">
                        <table>
                            <tr>
                                <td>
                                    <div class="text" style="
                                                padding: 0 3em;
                                                text-align: center;
                                            ">
                                        <h1>密碼重設</h1>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <table role="presentation" cellspacing="0" cellpadding="0" width="100%">
                        <td class="bg_white">
                            <div class="heading-section">
                                <span class="subheading">輸入以下資訊以重設您的密碼</span>
                                <div class="card">
                                    <form action="{{ route('password.reset.submit') }}" method="POST"
                                        onsubmit="return resetPassword(event)">
                                        @csrf
                                        <div class="form-group">
                                            <label for="idNumber">請輸入身分證字號</label>
                                            <input class="input" type="text" id="idNumber" name="idNumber"
                                                placeholder="請輸入身分證字號" />
                                            <span id="idNumberError" class="input-error" role="alert" style="
                                                        color: rgb(241, 95, 46);
                                                        display: none;
                                                    "></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">請輸入新密碼</label>
                                            <input class="input" type="password" id="password" name="password"
                                                placeholder="請輸入新密碼" />
                                            <span id="passwordError" class="input-error" role="alert" style="
                                                        color: rgb(241, 95, 46);
                                                        display: none;
                                                    "></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="passwordRepeat">重複輸入新密碼</label>
                                            <input id="passwordRepeat" type="password"
                                                class="input @error('password_confirmation') is-invalid @else is-valid @enderror"
                                                name="password_confirmation" placeholder="重複輸入新密碼" />
                                            <span id="passwordRepeatError" class="input-error" role="alert" style="
                                                        color: rgb(241, 95, 46);
                                                        display: none;
                                                    "></span>
                                        </div>
                                        <button class="btn" id="reset-btn" disabled>
                                            重設密碼
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </table>
                </tr>
            </table>
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto">
                <tr>
                    <td valign="middle" class="primary footer email-section">
                        <table>
                            <tr>
                                <td valign="top" width="50%" style="padding-top: 20px">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td style="
                                                        text-align: center;
                                                        padding-right: 10px;
                                                    ">
                                                <h3 class="heading">
                                                    易期付
                                                </h3>
                                                <p class="heading2">
                                                    提供無卡分期服務
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td valign="top" width="50%" style="padding-top: 20px">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td style="
                                                        text-align: center;
                                                        padding-left: 5px;
                                                        padding-right: 5px;
                                                    ">
                                                <h3 class="heading">
                                                    好交貸
                                                </h3>
                                                <ul>
                                                    <li>
                                                        <span class="text heading2">提供二胎借款服務</span>
                                                    </li>
                                                    <li>
                                                        <span class="text heading2">+2 392 3929
                                                            210</span>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <td valign="top" width="100%">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: center" class="heading2">
                                            <p>
                                                &copy; 2024 英富開發. All
                                                Rights Reserved
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </table>
                    </td>
                </tr>
                <!-- end: tr -->
            </table>
        </div>
    </div>
</body>

<script>
    function validateForm() {
        const idNumber = document
            .getElementById("idNumber")
            .value.toUpperCase()
            .trim();
        const password = document.getElementById("password").value.trim();
        const passwordRepeat = document
            .getElementById("passwordRepeat")
            .value.trim();
        const resetBtn = document.getElementById("reset-btn");

        let isValid = true;

        document.getElementById("idNumberError").style.display = "none";
        document.getElementById("passwordError").style.display = "none";
        document.getElementById("passwordRepeatError").style.display =
            "none";

        if (idNumber === "") {
            document.getElementById("idNumberError").textContent =
                "請輸入身分證字號";
            document.getElementById("idNumberError").style.display =
                "block";
            isValid = false;
        } else if (idNumber.length !== 10) {
            document.getElementById("idNumberError").textContent =
                "身分證字號格式錯誤";
            document.getElementById("idNumberError").style.display =
                "block";
            isValid = false;
        }

        if (password === "") {
            document.getElementById("passwordError").textContent =
                "請輸入新密碼";
            document.getElementById("passwordError").style.display =
                "block";
            isValid = false;
        }

        if (passwordRepeat === "") {
            document.getElementById("passwordRepeatError").textContent =
                "再次輸入新密碼";
            document.getElementById("passwordRepeatError").style.display =
                "block";
            isValid = false;
        } else if (password !== passwordRepeat) {
            document.getElementById("passwordRepeatError").textContent =
                "兩次密碼不相同";
            document.getElementById("passwordRepeatError").style.display =
                "block";
            isValid = false;
        }

        resetBtn.disabled = !isValid;
    }

    document
        .getElementById("idNumber")
        .addEventListener("input", function (event) {
            event.target.value = event.target.value.toUpperCase();
        });
    document
        .getElementById("idNumber")
        .addEventListener("input", validateForm);
    document
        .getElementById("password")
        .addEventListener("input", validateForm);
    document
        .getElementById("passwordRepeat")
        .addEventListener("input", validateForm);

    function resetPassword(event) {
        event.preventDefault();
        var idNumber = document
            .getElementById("idNumber")
            .value.toUpperCase();
        var password = document.getElementById("password").value;
        fetch("/reset-password", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify({
                idNumber: idNumber,
                password: password,
            }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.code === 1) {
                    alert("密碼重設成功");
                    window.close();
                } else {
                    alert(
                        "密碼重設失敗: " +
                            (data.data?.message || "未知錯誤")
                    );
                }
            })
            .catch((error) => console.error("Error:", error));

        return false;
    }
</script>

</html>