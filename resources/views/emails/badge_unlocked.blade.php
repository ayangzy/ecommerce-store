<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet" />
    <title>Badge Unlocked</title>

    <style type="text/css" rel="stylesheet" media="all">
        /* Base ------------------------------ */

        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            /* Safari/Chrome, other WebKit */
            -moz-box-sizing: border-box;
            /* Firefox, other Gecko */
            -o-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            width: 100% !important;
            height: 100%;
            margin: 0;
            /* background-color: #000; */
            -webkit-text-size-adjust: none;
            font-family: "Muli", sans-serif;
        }

        p,
        ul,
        ol,
        blockquote {
            text-align: left;
        }

        a img {
            border: none;
        }

        td {
            word-break: break-word;
        }

        html,
        body,
        div,
        span,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        em,
        img,
        strong,
        i,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        nav,
        section,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            vertical-align: baseline;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        nav,
        section,
        /* td, */
        tr,
        table,
        tbody {
            display: block;
        }

        ol,
        ul {
            list-style: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        a {
            color: #000;
            text-decoration: none;
        }

        .email-wrapper {
            max-width: 600px;
            margin: 10px auto;
            padding: 30px 0;
            /* background: #000; */
        }

        .email-wrapper__body {
            background: #fff;
            margin: 0 auto;
            max-width: 678px;
            min-height: 300px;
            border-radius: 20px;
            display: block;
        }

        .email-content {
            margin: 0 auto;
        }

        .greetings {
            font-weight: 500;
            font-size: 16px;
            line-height: 35px;

            color: #032041;
        }

        .table-data {
            padding-bottom: 20px;
            color: #60626b;
            font-size: 15px;
            line-height: 27px;
            display: block;
        }

        .header {
            text-align: center;
            padding: 30px;
        }

        .text {
            font-size: 15px;
            line-height: 20px;
            color: #575a65;
        }

        .banner {
            width: 100%;
        }

        .link-button {
            background: #006156;
            border-radius: 5px;
            color: #fff;
            padding: 20px 20px;
            width: 100%;
            display: block;
            max-width: 400px;
            font-size: 20px;
            margin: 30px auto;
            font-weight: 600;
            text-align: center;
            width: 424px;
            height: 68px;
        }

        .footer {
            padding: 20px 20px;
            display: block;
            text-align: center;
            background: #bcd4e3;
        }

        .footer td {
            display: block;
        }

        .footer .text {
            text-align: center;
            font-size: 12px;
            line-height: 20px;
            color: #032041;
            max-width: 400px;
            padding: 20px 0;
            margin: 0 auto;
        }

        .social-handle-row td {
            margin: 30px 10px;
            display: inline-table;
        }

        .social-handle-row img {
            height: 15px;
        }

        table {
            border-collapse: separate;
            border-spacing: 10px 10px;
        }

        .grid {
            padding: 20px;
            line-height: 20px;
            color: #032041;
            font-size: 12px;
        }

        .block {
            display: block;
        }

    </style>
</head>

<body>
    <table class="email-wrapper" cellspacing="0" cellpadding="0" border="0">
        <tbody style="display: block" class="email-wrapper__body">
            <tr style="display: block">
                <td valign="top" style="display: block">
                    <!-- EMAIL CONTENT -->
                    <table class="email-content">
                        <tbody>

                            <tr style="padding: 00px">
                                <td style="text-align: center" class="table-data">
                                    <h2 style="
                        color: #032041;
                        font-weight: 800;
                        font-size: 24px;
                        line-height: 40px;
                        text-align: center;
                        letter-spacing: 0.02em;
                        padding-top: 10px;
                      ">
                                        Badge Unlocked Summary
                                    </h2>
                                </td>
                                <td class="block">
                                    <img src="https://res.cloudinary.com/logic360/image/upload/v1684939921/banner_e-commerce-website-development_mfqj82.jpg" class="banner">
                                </td>
                                <td class="table-data" style="padding-top: 20px">
                                    <h3 class="greetings">
                                        Dear

                                        {{ $data['user']->first_name . ' '. $data['user']->last_name}}
                                    </h3>
                                </td>
                                <td class="table-data">
                                    Congratulations! You have earned the <b> {{ $data['badge_name'] }} badge</b> . This badge
                                    signifies your achievements and progress in our system.

                                    Keep up the great work! Thank you for being a valued member of our community.
                                </td>

                                <td class="table-data">
                                    Thanks for choosing Bumpa<br />
                                    <p style="
                        font-weight: 800;
                        font-size: 14px;
                        line-height: 28px;
                      ">
                                        The Bumpa Team.
                                    </p>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>

    </table>
</body>

</html>
