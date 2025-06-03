<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fffaf0;
            padding: 20px;
        }
        .kotak {
            background-color: #fdf0f5;
            border: 2px solid #ff69b4;
            border-radius: 10px;
            padding: 20px;
            width: 450px;
        }
        img {
            width: 260px;
            margin-top: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 6px;
            margin-top: 4px;
            box-sizing: border-box;
        }
        button {
            margin-top: 15px;
            padding: 8px 16px;
            background-color: #ff69b4;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .hasil {
            margin-top: 15px;
            background-color: #ffe4ec;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <h2>Hitung Belah Ketupat</h2>
        <form id="formKetupat">
            <label for="d1">Diagonal 1 (d₁):</label>
            <input type="number" id="d1" name="d1" required>

            <label for="d2">Diagonal 2 (d₂):</label>
            <input type="number" id="d2" name="d2" required>

            <label for="sisi">Sisi:</label>
            <input type="number" id="sisi" name="sisi" required>

            <button type="submit">Hitung</button>
        </form>

        <div class="hasil" id="hasil"></div>

        <img src="belahketupat.jpeg" alt="Gambar Belah Ketupat">
    </div>

    <br>
    <a href="index.php">Home</a>
    <h1>Belah Ketupat</h1>

    <script>
        document.getElementById('formKetupat').addEventListener('submit', function(e) {
            e.preventDefault();

            const d1 = parseFloat(document.getElementById('d1').value);
            const d2 = parseFloat(document.getElementById('d2').value);
            const sisi = parseFloat(document.getElementById('sisi').value);

            const luas = 0.5 * d1 * d2;
            const keliling = 4 * sisi;

            document.getElementById('hasil').innerHTML = `
                <strong>Hasil:</strong><br>
                Luas = ${luas}<br>
                Keliling = ${keliling}
            `;
        });
    </script>
</body>
</html>