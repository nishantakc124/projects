<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - ECommerce Admin</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="dashboard.css">
  <style>
    .nav-link.active, .nav-link:hover {
  background: #27272a;
  color: #fff;
}
  </style>
</head>
<body class="dashboard-bg">
  <?php include './sidebar.php' ?>
  </div>
  <main class="dashboard-main">
    <h1 class="dashboard-title">Dashboard Overview</h1>
    <p class="dashboard-subtitle">Welcome back! Here's what's happening with your store.</p>
    <div class="dashboard-cards">
      <div class="dashboard-card">
        <div class="card-label">Total Revenue</div>
        <div class="card-value">$45,234.67</div>
        <div class="card-subvalue positive">+12.5% from last month</div>
      </div>
      <div class="dashboard-card">
        <div class="card-label">Total Orders</div>
        <div class="card-value">1,234</div>
        <div class="card-subvalue positive">+8.3% from last month</div>
      </div>
      <div class="dashboard-card">
        <div class="card-label">Total Customers</div>
        <div class="card-value">567</div>
        <div class="card-subvalue positive">+15.7% from last month</div>
      </div>
      <div class="dashboard-card">
        <div class="card-label">Total Products</div>
        <div class="card-value">89</div>
        <div class="card-subvalue positive">+5.2% from last month</div>
      </div>
    </div>
    <div class="dashboard-row">
      <div class="dashboard-panel dashboard-revenue">
        <div class="panel-title">Monthly Revenue</div>
        <div class="panel-subtitle">Revenue trends over the last 6 months</div>
        <div class="revenue-chart">
          <div class="bar" style="height: 42%"><span>Jan<br>$4200</span></div>
          <div class="bar" style="height: 38%"><span>Feb<br>$3800</span></div>
          <div class="bar" style="height: 52%"><span>Mar<br>$5200</span></div>
          <div class="bar" style="height: 46%"><span>Apr<br>$4600</span></div>
          <div class="bar" style="height: 58%"><span>May<br>$5800</span></div>
          <div class="bar" style="height: 62%"><span>Jun<br>$6200</span></div>
        </div>
      </div>
      <div class="dashboard-panel dashboard-actions">
        <div class="panel-title">Quick Actions</div>
        <button class="action-btn primary-btn" onclick="window.location.href='./product.php'">+ Add New Product</button>
        <button class="action-btn" onclick="window.location.href='./orders.php'">View Recent Orders</button>
        <button class="action-btn" onclick="window.location.href='./Customers.php'">Manage Customers</button>
        <button class="action-btn">View Analytics</button>
      </div>
    </div>
    <div class="dashboard-row">
      <div class="dashboard-panel dashboard-orders">
        <div class="panel-title">Recent Orders</div>
        <div class="orders-list">
          <div class="order-row"><span>Order #ORD-001</span><span class="order-amount">$324.98</span></div>
          <div class="order-row"><span>Order #ORD-002</span><span class="order-amount">$89.99</span></div>
          <div class="order-row"><span>Order #ORD-003</span><span class="order-amount">$159.97</span></div>
        </div>
      </div>
      <div class="dashboard-panel dashboard-stock">
        <div class="panel-title">Low Stock Alert</div>
        <div class="stock-row">Laptop Stand <span class="stock-warning">23 left</span></div>
        <div class="stock-row">Coffee Mug <span class="stock-danger">Out of stock</span></div>
      </div>
      <div class="dashboard-panel dashboard-top-products">
        <div class="panel-title">Top Products</div>
        <div class="top-product-row">Smartphone Case <span class="top-product-count">456 sold</span></div>
        <div class="top-product-row">Wireless Headphones <span class="top-product-count">234 sold</span></div>
      </div>
    </div>
  </main>
</body>
</html>
