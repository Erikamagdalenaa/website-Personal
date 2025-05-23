<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tabel Perkalian 10x10</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      padding: 40px;
      text-align: center;
    }

    h1 {
      color: #333;
    }

    table {
      margin: 20px auto;
      border-collapse: collapse;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px 18px;
      text-align: center;
      font-weight: 500;
    }

    th {
      background-color: #ACE1AF;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e4f6d2;
    }
  </style>
</head>
<body>

  <h1>Tabel Perkalian 10 × 10</h1>
  <table id="tabel-perkalian"></table>

  <script>
    const table = document.getElementById("tabel-perkalian");

    let html = "<tr><th>×</th>";
    for (let i = 1; i <= 10; i++) {
      html += `<th>${i}</th>`;
    }
    html += "</tr>";

    for (let i = 1; i <= 10; i++) {
      html += `<tr><th>${i}</th>`;
      for (let j = 1; j <= 10; j++) {
        html += `<td>${i * j}</td>`;
      }
      html += "</tr>";
    }

    table.innerHTML = html;
  </script>

</body>
</html>
