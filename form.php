<!DOCTYPE HTML>
<html>

<head>
  <title>MyForm</title>
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
      margin-top: 5px;
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

    h3 {
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    a {
      text-decoration: none;
    }

    p {
      text-align: center;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <h3>MyForm</h3>
  <form method="POST" action="create.php" enctype='multipart/form-data'>
    <input placeholder="Product Name" type="text" name="prod_name" required><br>
    
    <input type='file' name='files[]' multiple />
    <input placeholder="Product money" type="text" name="money" required><br>
    <input placeholder="Product location" type="text" name="location" required><br>
    <input placeholder="Product category" type="text" name="category" required><br>
    <button>Save</button>
  </form>
  <hr>
  <a href='read.php'>
    <p>View Existing Data</p>
  </a>
</body>

</html>