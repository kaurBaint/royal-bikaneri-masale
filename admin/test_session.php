<?php
session_start();
include '../config.php';

echo "<h2>Session Debug Information</h2>";
echo "<p><strong>Session ID:</strong> " . session_id() . "</p>";
echo "<p><strong>Session Status:</strong> " . (session_status() === PHP_SESSION_ACTIVE ? 'Active' : 'Inactive') . "</p>";
echo "<p><strong>Admin Session Variable:</strong> " . (isset($_SESSION['admin']) ? $_SESSION['admin'] : 'Not Set') . "</p>";
echo "<p><strong>All Session Variables:</strong></p>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<h3>File Access Test</h3>";
$log_file = '../contact_log.txt';
echo "<p><strong>Log File Path:</strong> " . $log_file . "</p>";
echo "<p><strong>File Exists:</strong> " . (file_exists($log_file) ? 'Yes' : 'No') . "</p>";
echo "<p><strong>File Readable:</strong> " . (is_readable($log_file) ? 'Yes' : 'No') . "</p>";
echo "<p><strong>File Writable:</strong> " . (is_writable($log_file) ? 'Yes' : 'No') . "</p>";

if (file_exists($log_file)) {
    echo "<p><strong>File Size:</strong> " . filesize($log_file) . " bytes</p>";
    echo "<p><strong>File Content:</strong></p>";
    echo "<pre>";
    echo htmlspecialchars(file_get_contents($log_file));
    echo "</pre>";
}

echo "<p><a href='dashboard.php'>Back to Dashboard</a></p>";
echo "<p><a href='contact_logs.php'>Go to Contact Logs</a></p>";
?>
