<?php
session_start();
include './database.php';
$email = $_SESSION['email'];
$sql = "SELECT * FROM logins WHERE email='$email'";
$result = $conn->query($sql);
$log = $result->fetch_assoc();
if ($log) {
    $fullname = $log["fullname"];
    $email = $log["email"];
    $phone = $log["phone"];
    $password = $log["password"];
    $username = $log["username"];
    $website = $log["website"];
    $company = $log["company"];
    $address = $log["address"];
    $id = $log["ID"];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $address = htmlspecialchars(trim($_POST['address']));
    $website = htmlspecialchars(trim($_POST['website']));
    $username = htmlspecialchars(trim($_POST['username']));
    $company = htmlspecialchars(trim($_POST['company']));


    $sql1 = "UPDATE logins SET fullname='$fullname', email='$email', password='$password', phone='$phone', address='$address', website='$website', username='$username', company='$company' WHERE ID='$id'";
    var_dump($conn->query($sql1));
    $result1 = $conn->query($sql1);
    if ($result1 === TRUE) {
        header('location:./dashboard.php');
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - ECommerce Admin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="seeting.css">
</head>

<body class="dashboard-bg">
    <?php include './sidebar.php'; ?>
    <main class="dashboard-main">
        <h1 class="dashboard-title page-title">Settings</h1>
        <div class="dashboard-subtitle page-subtitle">Manage your account settings and preferences</div>
        <div class="settings-container">
            <div class="settings-sections">
                <!-- Profile Information -->
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                    <section class="settings-card">
                        <div class="settings-header">
                            <span class="settings-icon"><img
                                    src="https://img.icons8.com/ios-filled/32/ffffff/user.png" /></span>
                            <span class="settings-title">Profile Information</span>
                        </div>
                        <div class="settings-subtitle">Update your personal information and contact details</div>
                        <div class="settings-form grid-2">
                            <div>
                                <label>Full Name</label>
                                <input type="text" placeholder="John" value="<?php echo $fullname; ?>" name="fullname">
                            </div>
                            <div>
                                <label>User Name</label>
                                <input type="text" placeholder="Doe" value="<?php echo $username; ?>" name="username">
                            </div>
                            <div class="span-full">
                                <label class="label-icon"><img
                                        src="https://img.icons8.com/ios-filled/16/9b9b9f/new-post.png" /> Email
                                    Address</label>
                                <input type="email" placeholder="john.doe@example.com" value="<?php echo $email; ?>"
                                    name="email">
                            </div>
                            <div class="span-full">
                                <label class="label-icon"><img
                                        src="https://img.icons8.com/ios-filled/16/9b9b9f/phone.png" /> Phone
                                    Number</label>
                                <input type="text" placeholder="+1 (555) 123-4567" value="<?php echo $phone; ?>" name="phone">
                            </div>
                            <div class="span-full">
                                <label class="label-icon"><img
                                        src="https://img.icons8.com/ios-filled/16/9b9b9f/address.png" /> Address</label>
                                <input type="text" placeholder="123 Main St, New York, NY 10001"
                                    value="<?php echo $address; ?>"
                                    name="address">
                            </div>
                            <div>
                                <label class="label-icon"><img
                                        src="https://img.icons8.com/ios-filled/16/9b9b9f/domain.png" /> Company</label>
                                <input type="text" placeholder="ECommerce Store"
                                    value="<?php echo $company; ?>"
                                    name="company">
                            </div>
                            <div>
                                <label class="label-icon"><img
                                        src="https://img.icons8.com/ios-filled/16/9b9b9f/domain.png" /> Website</label>
                                <input type="text" placeholder="https://mystore.com"
                                    value="<?php echo $website; ?>"
                                    name="website">
                            </div>

                        </div>
                    </section>
                    Security
                    <section class="settings-card">
                        <div class="settings-header">
                            <label class="label-icon"><img <span class="settings-icon"><img
                                    src="https://img.icons8.com/ios-filled/32/ffffff/shield.png" /></span>
                                <span class="settings-title">Security</span>
                        </div>
                        <div class="settings-subtitle">Manage your password and security preferences</div>
                        <div class="settings-form">
                            <div class="password-field">
                                <label>Current Password</label>
                                <input id="current-password" type="password" placeholder="Enter current password" name="password" value="<?php echo $password; ?>">
                            </div>
                            <div class="grid-2">
                                <div>
                                    <label>New Password</label>
                                    <input id="new-password" type="password" placeholder="Enter new password">
                                </div>
                                <!-- <div>
                                    <label>Confirm Password</label>
                                    <input id="confirm-password" type="password" placeholder="Confirm new password">
                                </div> -->
                            </div>
                        </div>
                        <div class="settings-2fa-card">
                            <div class="settings-2fa-left">
                                <div class="settings-2fa-title">Two-Factor Authentication</div>
                                <div class="settings-2fa-desc">Add an extra layer of security</div>
                            </div>
                            <div class="settings-2fa-status enabled">Enabled</div>
                        </div>
                    </section>

                    <!-- Notifications -->
                    <section class="settings-card">
                        <div class="settings-header">
                            <span class="settings-icon"><img
                                    src="https://img.icons8.com/ios-filled/32/ffffff/bell.png" /></span>
                            <span class="settings-title">Notifications</span>
                        </div>
                        <div>
                            <div class="settings-subtitle">Choose how you want to be notified about important events
                            </div>
                            <div class="settings-toggles">
                                <div class="settings-toggle">
                                    <div>
                                        <label>Order Updates</label>
                                        <div class="toggle-desc">Get notified about new orders and status changes</div>
                                    </div>
                                    <input type="checkbox" checked>
                                </div>

                                <div class="settings-toggle">
                                    <div>
                                        <label>Marketing Emails</label>
                                        <div class="toggle-desc">Receive promotional content and product updates</div>
                                    </div>
                                    <input type="checkbox">
                                </div>

                                <div class="settings-toggle">
                                    <div>
                                        <label>Push Notifications</label>
                                        <div class="toggle-desc">Receive push notifications in your browser</div>
                                    </div>
                                    <input type="checkbox" checked>
                                </div>

                                <div class="settings-toggle">
                                    <div>
                                        <label>SMS Alerts</label>
                                        <div class="toggle-desc">Get important alerts via text message</div>
                                    </div>
                                    <input type="checkbox">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Preferences -->
                    <section class="settings-card">
                        <div class="settings-header">
                            <span class="settings-icon"><img
                                    src="https://img.icons8.com/ios-filled/32/ffffff/moon-symbol.png" /></span>
                            <span class="settings-title">Preferences</span>
                        </div>
                        <div class="settings-subtitle">Customize your dashboard experience</div>
                        <div class="settings-form grid-2">
                            <div>
                                <label>Language</label>
                                <select>
                                    <option>English</option>
                                    <option>Spanish</option>
                                </select>
                            </div>
                            <div>
                                <label>Timezone</label>
                                <select>
                                    <option>EST (UTC-5)</option>
                                    <option>GMT (UTC+0)</option>
                                </select>
                            </div>
                            <div class="span-full">
                                <div class="settings-toggle toggle-left">
                                    <div>
                                        <label>Dark Mode</label>
                                        <div class="toggle-desc">Use dark theme for the dashboard</div>
                                    </div>
                                    <input type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Billing & Subscription -->
                    <section class="settings-card">
                        <div class="settings-header">
                            <span class="settings-icon"><img
                                    src="https://img.icons8.com/ios-filled/32/ffffff/bank-cards.png" /></span>
                            <span class="settings-title">Billing & Subscription</span>
                        </div>
                        <div class="settings-subtitle">Manage your subscription and payment methods</div>
                        
                        <div class="settings-plan-card">
                            <div>
                                <div class="plan-title">Current Plan</div>
                                <div class="plan-subtitle">Professional Plan - $99/month</div>
                            </div>
                            <div class="settings-plan-status active">Active</div>
                        </div>
                        <div class="settings-billing-info">
                            <div>
                                <div class="billing-title">Payment Method</div>
                                <div class="billing-sub">•••• •••• •••• 4242<br>Expires 12/25</div>
                            </div>
                            <div>
                                <div class="billing-title">Next Billing Date</div>
                                <div class="billing-sub">January 15, 2024<br>$99.00 USD</div>
                            </div>
                        </div>
                    </section>
                    <!-- Save Button handled inside the Profile form -->
                    <div class="settings-footer">
                        <button class="primary-btn" type="submit"><span class="btn-icon">🔒</span> Save All
                            Changes</button>
                    </div>

                </form>

                

            </div>
        </div>
    </main>
</body>

</html>