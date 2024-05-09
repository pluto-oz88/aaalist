<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>AAALIST</title>

  <link rel="shortcut icon" type="image/png" href="apple-touch-icon.png">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <style>
    * {
      box-sizing: border-box;
    }

    a:link {
      color: green;
      background-color: transparent;
      text-decoration: none;
    }

    a:visited {
      color: white;
      background-color: transparent;
      text-decoration: none;
    }

    a:hover {
      color: red;
      background-color: transparent;
      text-decoration: underline;
    }

    a:active {
      color: yellow;
      background-color: transparent;
      text-decoration: underline;
    }

    table {
      position: relative;

    }

    .screen-col button {
      background-color: aquamarine;
    }

    .buttonHolder {
      text-align: center;
    }

    thead {
      height: 40px;
    }

    th {

      position: sticky;
      top: 0;
    }

    .tlinks {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      font-size: 9px;
      width: 100%;
      max-width: 580px;
      margin: 0 auto;
    }

    .tlinks td,
    .tlinks th {
      border: 1px solid #ddd;
      padding: 0px;
    }

    .tlinks tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .tlinks td:hover {
      background-color: yellow;
    }

    .tlinks td a:hover {
      color: blue;
    }

    .tlinks th {
      padding-top: 6px;
      padding-bottom: 6px;
      text-align: left;
      background-color: rebeccapurple;
      color: white;
    }

    .tlinks td a {
      /* Make the whole cell clickable */
      display: block;
      width: 100%;
      height: 100%;
      margin: 0;
      text-decoration: none;
      color: black;
    }

    .tit1 h4 {
      width: 100%;
    }

    .tit2 {
      width: 50%;
      float: left
    }

    .tit1 h4,
    .tit2 h4,
    h3 {
      margin: 2px;
      text-align: center;
    }

    .padcell {
      padding: 4px;
    }


    .screen-width {
      margin: 0 auto;
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {

      .screen-col {
        background: beige;
      }

      .tlinks {
        font-size: 14px;
      }

    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {

      .screen-col {
        background: lightblue;
      }

      .tlinks {
        font-size: 16px;
      }

    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
      .screen-col {
        background: orange;
      }
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
      .screen-col {
        background: pink;
      }
    }

    #sw {
      text-align: center;
    }
  </style>
</head>

<body class="screen-col">

  <table class="tlinks" align="center" border="0">
    <thead>
      <tr>
        <th width="18%">
          <h2 align="center">WWW</h2>
        </th>
        <th width="16%"><a href="http://192.168.0.229:8848">
            <h3>Prepros</h3>
            <div class="tit1">
              <h4>output</h4>
            </div>
          </a>
        </th>
        <th width="34%" colspan="2">
          <h3 align="center">Local Network</h3>
          <div class="tit2">
            <h4>GDOZ</h4>
          </div>
          <div class="tit2">
            <h4>Gdwebber</h4>
          </div>
        </th>


        <th width="16%">
          <h3 align="center">HP<br>COMPUTER</h3>
        </th>

        <th width="16%">
          <h3 align="center">MAC<br>COMPUTER</h3>
        </th>
      </tr>
    </thead>
    <tbody>

      <?php include 'aatable.php'; ?>

    </tbody>
  </table>

  <script>
    var txt = "";
    txt += " <p> inWidth-" + window.innerWidth;
    txt += " inHeight-" + window.innerHeight;
    txt += " outWidth-" + window.outerWidth;
    txt += " outHeight-" + window.outerHeight + "</p>";

    document.getElementById("sw").innerHTML = txt;
  </script>



</body>

</html>