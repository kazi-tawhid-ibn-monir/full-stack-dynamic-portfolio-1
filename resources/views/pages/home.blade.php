<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .products {
            display: flex;
            gap: 40px;
        }

        .product {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            width: 220px;
            background-color: #f9f9f9;
        }

        img {
            border-radius: 10px;
        }

        input[type="number"] {
            width: 60px;
            text-align: center;
        }

        button {
            margin-top: 5px;
            padding: 5px 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .cart {
            margin-top: 30px;
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            background-color: #f0f8ff;
        }
    </style>
</head>

<body>

    <h1> Nihal vai er Shuuuuuopping </h1>

    <div class="products">

        <div class="product">
            <img src="https://herfootballhub.com/wp-content/uploads/2023/09/fbl-award-ballon-dor-2022-scaled.jpg"
                 alt="Product 1" width="200"><br>
            <h3>2026 Ballon d'Or</h3>
            <p>Price: 7$</p>
            <label>Qty:</label>
            <input type="number" id="qty1" value="1" min="1"><br>
            <button onclick="addToCart(7, 'qty1')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="https://static.vecteezy.com/system/resources/previews/021/081/915/non_2x/golden-soccer-trophy-in-a-football-field-png.png"
                 alt="Product 2" width="200"><br>
            <h3>League Trophy</h3>
            <p>Price: 10 $</p>
            <label>Qty:</label>
            <input type="number" id="qty2" value="1" min="1"><br>
            <button onclick="addToCart(10, 'qty2')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="https://tse1.mm.bing.net/th/id/OIP.lhLsrwxeHjSWB9hlnoFcNwHaE7?rs=1&pid=ImgDetMain&o=7&rm=3"
                 alt="Product 3" width="200"><br>
            <h3>FIFA World Cup 2026</h3>
            <p>Price: 15 $</p>
            <label>Qty:</label>
            <input type="number" id="qty3" value="1" min="1"><br>
            <button onclick="addToCart(15, 'qty3')">Add to Cart</button>
        </div>

    </div>

    <div class="cart">
        <h2> Cart Details</h2>
        <p>Total Items: <span id="itemCount">0</span></p>
        <p>Total Price: $ <span id="totalPrice">0</span></p>
    </div>

    <script>
        let itemCount = 0;
        let totalPrice = 0;

        function addToCart(price, qtyId) {
            let quantity = parseInt(document.getElementById(qtyId).value);
            itemCount += quantity;
            totalPrice += price * quantity;
            document.getElementById("itemCount").textContent = itemCount;
            document.getElementById("totalPrice").textContent = totalPrice;
        }
    </script>

</body>
</html>
