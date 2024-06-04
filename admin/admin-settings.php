<div class="wrap">
    <h1>SmartMail Assistant SEO Settings</h1>
    <form method="post" action="options.php">
        <?php
        settings_fields('smartmail_assistant_seo_options');
        do_settings_sections('smartmail_assistant_seo');
        submit_button();
        ?>
    </form>
    <style>
        .wrap {
            max-width: 800px;
            margin: auto;
        }
        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        form {
            background: #fff;
            border: 1px solid #ccd0d4;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        }
        table.form-table {
            width: 100%;
        }
        table.form-table th {
            width: 25%;
            padding: 10px;
        }
        table.form-table td {
            width: 75%;
            padding: 10px;
        }
        .submit {
            text-align: center;
        }
    </style>
</div>
