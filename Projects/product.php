<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products - ECommerce Admin</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="product.css">
</head>
<body class="dashboard-bg">
 <?php include './sidebar.php' ?>
  <main class="dashboard-main">
    <div class="products-header">
      <div>
        <h1 class="dashboard-title">Products</h1>
        <p class="dashboard-subtitle">Manage your product inventory and pricing.</p>
      </div>
      <button class="add-product-btn">+ Add Product</button>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Search products...">
    </div>
    <div class="dashboard-panel" style="margin-bottom:2rem;">
      <div class="inventory-header" style="display:flex;justify-content:space-between;align-items:center;">
        <h2>Product Inventory</h2>
        <span class="inventory-count">5 products found</span>
      </div>
  <div class="inventory-table-wrap">
  <table class="inventory-table">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Sales</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Wireless Headphones</td>
            <td>Electronics</td>
            <td>$299.99</td>
            <td>45</td>
            <td>234</td>
            <td><span class="status-badge active">Active</span></td>
            <td>
              <button class="action-icon edit">✏️</button>
              <button class="action-icon delete">🗑️</button>
            </td>
          </tr>
          <tr>
            <td>Smartphone Case</td>
            <td>Accessories</td>
            <td>$24.99</td>
            <td>156</td>
            <td>456</td>
            <td><span class="status-badge active">Active</span></td>
            <td>
              <button class="action-icon edit">✏️</button>
              <button class="action-icon delete">🗑️</button>
            </td>
          </tr>
          <tr>
            <td>Laptop Stand</td>
            <td>Electronics</td>
            <td>$89.99</td>
            <td>23</td>
            <td>89</td>
            <td><span class="status-badge low">Low Stock</span></td>
            <td>
              <button class="action-icon edit">✏️</button>
              <button class="action-icon delete">🗑️</button>
            </td>
          </tr>
          <tr>
            <td>Coffee Mug</td>
            <td>Home</td>
            <td>$19.99</td>
            <td>0</td>
            <td>167</td>
            <td><span class="status-badge out">Out of Stock</span></td>
            <td>
              <button class="action-icon edit">✏️</button>
              <button class="action-icon delete">🗑️</button>
            </td>
          </tr>
          <tr>
            <td>Gaming Mouse</td>
            <td>Electronics</td>
            <td>$79.99</td>
            <td>78</td>
            <td>123</td>
            <td><span class="status-badge active">Active</span></td>
            <td>
              <button class="action-icon edit">✏️</button>
              <button class="action-icon delete">🗑️</button>
            </td>
          </tr>
        </tbody>
  </table>
  </div>
    </div>
    <div class="dashboard-row">
      <div class="dashboard-panel summary-panel">
        <div class="summary-card active">3<br><span>Active Products</span></div>
      </div>
      <div class="dashboard-panel summary-panel">
        <div class="summary-card low">1<br><span>Low Stock</span></div>
      </div>
      <div class="dashboard-panel summary-panel">
        <div class="summary-card out">1<br><span>Out of Stock</span></div>
      </div>
    </div>
  </main>
</body>
</html>
