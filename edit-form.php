<!DOCTYPE HTML>
<html>

<head>
    <title>Edit your info</title>
    <style>
        input[type=text] {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            text-align: center;
            margin: auto;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 80%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h3 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

<body>
    <h3>Edit your Product Information</h3>
    <form method="POST" action="update.php" enctype='multipart/form-data'>
        <input type="text" name="name" placeholder="Product Name" value="<?php echo $_GET["prod_name"] ?>"><br>
        <input type="hidden" name="user_ID" value="<?php echo $_GET["thisID"] ?>"><br>
        <input type='file' name='files[]' multiple />
        <input type="text" name="money" placeholder="Product Money" value="<?php echo $_GET["money"] ?>" required><br>
        <input type="text" name="location" placeholder="Product Loation" value="<?php echo $_GET["location"] ?>" required><br>
        <input type="text" name="category" placeholder="Product Category" value="<?php echo $_GET["category"] ?>" required><br>
        <button>Save Changes</button>
    </form>
</body>

</html>