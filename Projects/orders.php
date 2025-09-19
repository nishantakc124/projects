<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orders - ECommerce Admin</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="orders.css">
</head>
<body class="dashboard-bg">
  <?php include './sidebar.php' ?>
  <main class="dashboard-main">
  <div class="content-wrap">
  <div class="products-header orders-header">
      <div>
        <h1 class="dashboard-title">Orders</h1>
        <p class="dashboard-subtitle">Track and manage customer orders.</p>
      </div>
      <button class="export-btn">Export Orders</button>
  </div>

    <div class="search-bar">
      <input type="text" placeholder="Search orders...">
    </div>

    <div class="dashboard-panel orders-panel">
      <div class="panel-title">Recent Orders</div>
      <div class="panel-subtitle">5 orders found</div>
      <div class="inventory-table-wrap">
        <table class="inventory-table orders-table">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Customer</th>
              <th>Date</th>
              <th>Items</th>
              <th>Total</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>#ORD-001</strong></td>
              <td>John Smith</td>
              <td>1/15/2024</td>
              <td>2</td>
              <td>$324.98</td>
              <td><span class="status-badge completed">Completed</span></td>
              <td><button class="action-icon view">👁️</button></td>
            </tr>
            <tr>
              <td><strong>#ORD-002</strong></td>
              <td>Sarah Johnson</td>
              <td>1/14/2024</td>
              <td>1</td>
              <td>$89.99</td>
              <td><span class="status-badge processing">Processing</span></td>
              <td><button class="action-icon view">👁️</button></td>
            </tr>
            <tr>
              <td><strong>#ORD-003</strong></td>
              <td>Mike Davis</td>
              <td>1/13/2024</td>
              <td>3</td>
              <td>$159.97</td>
              <td><span class="status-badge shipped">Shipped</span></td>
              <td><button class="action-icon view">👁️</button></td>
            </tr>
            <tr>
              <td><strong>#ORD-004</strong></td>
              <td>Emily Brown</td>
              <td>1/12/2024</td>
              <td>2</td>
              <td>$44.98</td>
              <td><span class="status-badge pending">Pending</span></td>
              <td><button class="action-icon view">👁️</button></td>
            </tr>
            <tr>
              <td><strong>#ORD-005</strong></td>
              <td>David Wilson</td>
              <td>1/11/2024</td>
              <td>1</td>
              <td>$299.99</td>
              <td><span class="status-badge completed">Completed</span></td>
              <td><button class="action-icon view">👁️</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  <div class="dashboard-row stats-row">
      <div class="dashboard-panel stat-card">
        <div class="summary-card active small">2<br><span>Completed</span></div>
      </div>
      <div class="dashboard-panel stat-card">
        <div class="summary-card processing small">1<br><span>Processing</span></div>
      </div>
      <div class="dashboard-panel stat-card">
        <div class="summary-card shipped small">1<br><span>Shipped</span></div>
      </div>
      <div class="dashboard-panel stat-card">
        <div class="summary-card pending small">1<br><span>Pending</span></div>
      </div>
    </div>
    </div>
  </main>
</body>
</html>