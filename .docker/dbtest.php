<?php
// dbtest.php
// This script tests the database connection using the DATABASE_URL environment variable.

require_once __DIR__ . '/vendor/autoload.php';  // Ensure the path is correct.

use Dotenv\Dotenv;

// Load environment variables from the .env file.
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Retrieve the DATABASE_URL from environment variables.
$dbUrl = getenv('DATABASE_URL');

if (!$dbUrl) {
    echo "Error: DATABASE_URL environment variable is not set.\n";
    exit(1);
}

// Parse the DATABASE_URL. Expected format: 
// mysql://username:password@host:port/dbname?query_string
$parts = parse_url($dbUrl);
if (!$parts) {
    echo "Error: Failed to parse DATABASE_URL.";
    exit(1);
}

// Extract connection details.
$scheme   = $parts['scheme'] ?? 'mysql';
$username = $parts['user'] ?? '';
$password = $parts['pass'] ?? '';
$host     = $parts['host'] ?? '127.0.0.1';
$port     = $parts['port'] ?? 3306;
$dbname   = isset($parts['path']) ? ltrim($parts['path'], '/') : '';

// Optional: Parse query parameters if needed (for charset, etc.)
parse_str($parts['query'] ?? '', $queryParams);
$charset = $queryParams['charset'] ?? 'utf8mb4';

// Build the DSN string.
$dsn = "$scheme:host=$host;port=$port;dbname=$dbname;charset=$charset";

try {
    // Create a new PDO instance.
    $pdo = new PDO($dsn, $username, $password);
    // Set error mode to exceptions.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Successfully connected to the database: $dbname";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit(1);
}
