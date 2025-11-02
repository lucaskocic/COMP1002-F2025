<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="UTF-8" />
  <title>Order Confirmation</title>
</head>

<body>
  <h1>Thank You for Your Order!</h1>
  <p>Your pizza order has been received. Here's a summary:</p>
  <ul>
    <li>Name: <?php echo htmlspecialchars($_POST["name"]); ?></li>
    <li>Email: <?php echo htmlspecialchars($_POST["email"]); ?></li>
    <li>Phone: <?php echo htmlspecialchars($_POST["phone"]); ?></li>
    <li>Number of Pizzas: <?php echo htmlspecialchars($_POST["quantity"]); ?></li>
    <li>Size: <?php echo htmlspecialchars($_POST["size"]); ?></li>
    <li>Shape: <?php echo htmlspecialchars($_POST["shape"]); ?></li>
    <li>Crust: <?php echo htmlspecialchars($_POST["crust"]); ?></li>
    <li>Order Type: <?php echo htmlspecialchars($_POST["order_type"]); ?></li>
  </ul>
</body>

</html>
