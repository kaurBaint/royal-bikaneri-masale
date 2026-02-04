<?php
session_start();
include '../config.php';

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

$log_file = '../contact_log.txt';

// Debug: Check if we can access the log file
if (!file_exists($log_file)) {
    // Create empty log file if it doesn't exist
    file_put_contents($log_file, '');
}
$contacts = [];
$success_contacts = [];

// Read contact log file
if (file_exists($log_file)) {
    $lines = file($log_file, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        if (!empty(trim($line))) {
            $contact_data = json_decode($line, true);
            if ($contact_data) {
                if (isset($contact_data['status']) && $contact_data['status'] === 'mail_failed') {
                    $contacts[] = $contact_data;
                } else {
                    $success_contacts[] = $contact_data;
                }
            }
        }
    }
}

// Sort by timestamp (newest first)
usort($contacts, function($a, $b) {
    return strtotime($b['timestamp']) - strtotime($a['timestamp']);
});

usort($success_contacts, function($a, $b) {
    return strtotime($b['timestamp']) - strtotime($a['timestamp']);
});

// Handle actions
if ($_POST) {
    if (isset($_POST['mark_contacted'])) {
        $contact_id = $_POST['contact_id'];
        // Mark as contacted logic can be added here
        $message = "Contact marked as contacted!";
        $messageType = "success";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Logs - Royal Bikaneri Masale Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8f6f0 0%, #f0ede5 100%);
            font-family: 'Poppins', sans-serif;
        }
        
        .admin-header {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 30%, #CD853F 60%, #D2691E 100%);
            color: white;
            padding: 20px 0;
            margin-bottom: 30px;
        }
        
        .contact-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
        }
        
        .contact-header {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
            color: white;
            padding: 15px 20px;
        }
        
        .contact-body {
            padding: 20px;
        }
        
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .info-item i {
            margin-right: 10px;
            color: #8B4513;
            width: 20px;
        }
        
        .message-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #8B4513;
            margin-bottom: 20px;
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .btn-action {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-whatsapp {
            background: #25D366;
            color: white;
            border: none;
        }
        
        .btn-whatsapp:hover {
            background: #128C7E;
            color: white;
        }
        
        .btn-email {
            background: #007bff;
            color: white;
            border: none;
        }
        
        .btn-email:hover {
            background: #0056b3;
            color: white;
        }
        
        .btn-call {
            background: #28a745;
            color: white;
            border: none;
        }
        
        .btn-call:hover {
            background: #1e7e34;
            color: white;
        }
        
        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .status-failed {
            background: #f8d7da;
            color: #721c24;
        }
        
        .status-success {
            background: #d4edda;
            color: #155724;
        }
        
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 30px;
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #8B4513;
        }
        
        .stats-label {
            color: #666;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2><i class="fas fa-envelope"></i> Contact Logs</h2>
                    <p class="mb-0">Manage customer contact inquiries</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="dashboard.php" class="btn btn-light">
                        <i class="fas fa-arrow-left"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php if (isset($message)): ?>
            <div class="alert alert-<?php echo $messageType; ?> alert-dismissible fade show">
                <i class="fas fa-<?php echo $messageType == 'success' ? 'check-circle' : 'exclamation-triangle'; ?>"></i>
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <!-- Statistics -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="stats-number"><?php echo count($contacts); ?></div>
                    <div class="stats-label">Failed Mail Contacts</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="stats-number"><?php echo count($success_contacts); ?></div>
                    <div class="stats-label">Successful Mail Contacts</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="stats-number"><?php echo count($contacts) + count($success_contacts); ?></div>
                    <div class="stats-label">Total Contacts</div>
                </div>
            </div>
        </div>

        <!-- Failed Mail Contacts -->
        <?php if (!empty($contacts)): ?>
            <h3 class="mb-4"><i class="fas fa-exclamation-triangle text-warning"></i> Failed Mail Contacts (Need Follow-up)</h3>
            <?php foreach ($contacts as $index => $contact): ?>
                <div class="contact-card">
                    <div class="contact-header">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="mb-0">
                                    <i class="fas fa-user"></i> <?php echo htmlspecialchars($contact['name']); ?>
                                </h5>
                                <small><?php echo date('M d, Y H:i', strtotime($contact['timestamp'])); ?></small>
                            </div>
                            <div class="col-md-4 text-end">
                                <span class="status-badge status-failed">
                                    <i class="fas fa-exclamation-triangle"></i> Mail Failed
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-body">
                        <div class="contact-info">
                            <div class="info-item">
                                <i class="fas fa-envelope"></i>
                                <strong>Email:</strong> <?php echo htmlspecialchars($contact['email']); ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <strong>Phone:</strong> <?php echo htmlspecialchars($contact['phone']); ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-tag"></i>
                                <strong>Subject:</strong> <?php echo htmlspecialchars($contact['subject']); ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <strong>Time:</strong> <?php echo date('M d, Y H:i:s', strtotime($contact['timestamp'])); ?>
                            </div>
                        </div>
                        
                        <div class="message-box">
                            <h6><i class="fas fa-comment"></i> Message:</h6>
                            <p class="mb-0"><?php echo nl2br(htmlspecialchars($contact['message'])); ?></p>
                        </div>
                        
                        <div class="action-buttons">
                            <a href="https://wa.me/91<?php echo preg_replace('/[^0-9]/', '', $contact['phone']); ?>?text=Hello <?php echo urlencode($contact['name']); ?>, thank you for contacting Royal Bikaneri Masale. How can I help you?" 
                               class="btn btn-action btn-whatsapp" target="_blank">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                            <a href="mailto:<?php echo $contact['email']; ?>?subject=Re: <?php echo urlencode($contact['subject']); ?>&body=Hello <?php echo urlencode($contact['name']); ?>,%0D%0A%0D%0AThank you for contacting Royal Bikaneri Masale.%0D%0A%0D%0AYour message: <?php echo urlencode($contact['message']); ?>%0D%0A%0D%0AWe will get back to you soon.%0D%0A%0D%0ABest regards,%0D%0ARoyal Bikaneri Masale Team" 
                               class="btn btn-action btn-email">
                                <i class="fas fa-envelope"></i> Email
                            </a>
                            <a href="tel:+91<?php echo preg_replace('/[^0-9]/', '', $contact['phone']); ?>" 
                               class="btn btn-action btn-call">
                                <i class="fas fa-phone"></i> Call
                            </a>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="contact_id" value="<?php echo $index; ?>">
                                <button type="submit" name="mark_contacted" class="btn btn-action btn-success">
                                    <i class="fas fa-check"></i> Mark Contacted
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i> No failed mail contacts found.
            </div>
        <?php endif; ?>

        <!-- Successful Mail Contacts -->
        <?php if (!empty($success_contacts)): ?>
            <h3 class="mb-4 mt-5"><i class="fas fa-check-circle text-success"></i> Successful Mail Contacts</h3>
            <?php foreach ($success_contacts as $index => $contact): ?>
                <div class="contact-card">
                    <div class="contact-header">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="mb-0">
                                    <i class="fas fa-user"></i> <?php echo htmlspecialchars($contact['name']); ?>
                                </h5>
                                <small><?php echo date('M d, Y H:i', strtotime($contact['timestamp'])); ?></small>
                            </div>
                            <div class="col-md-4 text-end">
                                <span class="status-badge status-success">
                                    <i class="fas fa-check-circle"></i> Mail Sent
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-body">
                        <div class="contact-info">
                            <div class="info-item">
                                <i class="fas fa-envelope"></i>
                                <strong>Email:</strong> <?php echo htmlspecialchars($contact['email']); ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <strong>Phone:</strong> <?php echo htmlspecialchars($contact['phone']); ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-tag"></i>
                                <strong>Subject:</strong> <?php echo htmlspecialchars($contact['subject']); ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <strong>Time:</strong> <?php echo date('M d, Y H:i:s', strtotime($contact['timestamp'])); ?>
                            </div>
                        </div>
                        
                        <div class="message-box">
                            <h6><i class="fas fa-comment"></i> Message:</h6>
                            <p class="mb-0"><?php echo nl2br(htmlspecialchars($contact['message'])); ?></p>
                        </div>
                        
                        <div class="action-buttons">
                            <a href="https://wa.me/91<?php echo preg_replace('/[^0-9]/', '', $contact['phone']); ?>?text=Hello <?php echo urlencode($contact['name']); ?>, thank you for contacting Royal Bikaneri Masale. How can I help you?" 
                               class="btn btn-action btn-whatsapp" target="_blank">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                            <a href="mailto:<?php echo $contact['email']; ?>?subject=Re: <?php echo urlencode($contact['subject']); ?>&body=Hello <?php echo urlencode($contact['name']); ?>,%0D%0A%0D%0AThank you for contacting Royal Bikaneri Masale.%0D%0A%0D%0AYour message: <?php echo urlencode($contact['message']); ?>%0D%0A%0D%0AWe will get back to you soon.%0D%0A%0D%0ABest regards,%0D%0ARoyal Bikaneri Masale Team" 
                               class="btn btn-action btn-email">
                                <i class="fas fa-envelope"></i> Email
                            </a>
                            <a href="tel:+91<?php echo preg_replace('/[^0-9]/', '', $contact['phone']); ?>" 
                               class="btn btn-action btn-call">
                                <i class="fas fa-phone"></i> Call
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if (empty($contacts) && empty($success_contacts)): ?>
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle"></i> No contact logs found.
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
