<?php
/**
 * Advanced Spam Filter for Contact Forms
 * Enhanced spam detection with multiple layers of protection
 */

require_once 'config.php';

class SpamFilter {
    
    // Comprehensive spam keywords
    private $spamKeywords = [
        // Financial spam
        'loan', 'free money', 'cash advance', 'credit repair', 'debt relief',
        'earn money', 'make money fast', 'financial freedom', 'get rich quick',
        'investment opportunity', 'guaranteed income', 'payday loan',
        
        // Generic spam
        'free', 'winner', 'congratulations', 'prize', 'urgent', 'act now',
        'limited time', 'exclusive offer', 'click here', 'buy now',
        'order now', 'call now', 'don\'t wait', 'hurry up',
        
        // Medical spam
        'viagra', 'cialis', 'weight loss', 'diet pills', 'pharmacy',
        'prescription', 'medical', 'cure',
        
        // SEO/Marketing spam
        'seo services', 'website ranking', 'google ranking', 'traffic',
        'marketing services', 'social media', 'followers', 'likes',
        
        // Adult content
        'dating', 'hookup', 'singles', 'adult',
        
        // Cryptocurrency
        'bitcoin', 'crypto', 'cryptocurrency', 'trading', 'forex',
        
        // Common Hindi/Punjabi spam words
        'paise kamao', 'jaldi paisa', 'free paisa', 'loot', 'guaranteed'
    ];
    
    // Suspicious patterns
    private $suspiciousPatterns = [
        '/\b\d{10,}\b/', // Long numbers (phone numbers in content)
        '/[A-Z]{5,}/', // Excessive caps
        '/[!]{3,}/', // Multiple exclamation marks
        '/\$\d+/', // Dollar amounts
        '/\d+%\s*(off|discount)/', // Percentage discounts
        '/http[s]?:\/\/[^\s]+/', // URLs in message
        '/www\.[^\s]+/', // WWW links
        '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', // Email addresses in content
    ];
    
    // Check if content is spam
    public function isSpam($content, $email = '', $name = '') {
        $spamScore = 0;
        $content = strtolower(trim($content));
        
        // Empty content check
        if (empty($content)) {
            return true;
        }
        
        // Check for spam keywords
        foreach ($this->spamKeywords as $keyword) {
            if (strpos($content, strtolower($keyword)) !== false) {
                $spamScore += 2;
            }
        }
        
        // Check for suspicious patterns
        foreach ($this->suspiciousPatterns as $pattern) {
            if (preg_match($pattern, $content)) {
                $spamScore += 3;
            }
        }
        
        // Check message length (too short or too long can be spam)
        $wordCount = str_word_count($content);
        if ($wordCount < 3 || $wordCount > 500) {
            $spamScore += 2;
        }
        
        // Check for excessive repetition
        $words = explode(' ', $content);
        $wordFreq = array_count_values($words);
        foreach ($wordFreq as $freq) {
            if ($freq > 5) { // Same word repeated more than 5 times
                $spamScore += 3;
                break;
            }
        }
        
        // Email-based checks
        if (!empty($email)) {
            // Check for disposable email domains
            $disposableDomains = [
                '10minutemail.com', 'tempmail.org', 'guerrillamail.com',
                'mailinator.com', 'yopmail.com', 'temp-mail.org',
                'throwaway.email', 'getnada.com', 'maildrop.cc'
            ];
            
            $emailDomain = substr(strrchr($email, "@"), 1);
            if (in_array(strtolower($emailDomain), $disposableDomains)) {
                $spamScore += 5;
            }
            
            // Check for suspicious email patterns
            if (preg_match('/\d{6,}/', $email)) { // Too many numbers in email
                $spamScore += 2;
            }
        }
        
        // Name-based checks
        if (!empty($name)) {
            $name = strtolower(trim($name));
            
            // Check for suspicious name patterns
            if (preg_match('/\d+/', $name)) { // Numbers in name
                $spamScore += 2;
            }
            
            if (strlen($name) < 2 || strlen($name) > 50) {
                $spamScore += 2;
            }
        }
        
        // Return true if spam score exceeds threshold
        return $spamScore >= SPAM_SCORE_THRESHOLD;
    }
    
    // Clean and sanitize input
    public function sanitizeInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        return $input;
    }
    
    // Rate limiting check
    public function checkRateLimit($ip, $timeWindow = null, $maxAttempts = null) {
        $timeWindow = $timeWindow ?? RATE_LIMIT_WINDOW;
        $maxAttempts = $maxAttempts ?? RATE_LIMIT_ATTEMPTS;
        
        $rateLimitFile = LOGS_DIR . 'rate_limit.json';
        $currentTime = time();
        
        // Read existing data
        $data = [];
        if (file_exists($rateLimitFile)) {
            $content = file_get_contents($rateLimitFile);
            $data = json_decode($content, true) ?: [];
        }
        
        // Clean old entries
        foreach ($data as $storedIp => $attempts) {
            $data[$storedIp] = array_filter($attempts, function($timestamp) use ($currentTime, $timeWindow) {
                return ($currentTime - $timestamp) < $timeWindow;
            });
            
            if (empty($data[$storedIp])) {
                unset($data[$storedIp]);
            }
        }
        
        // Check current IP
        if (!isset($data[$ip])) {
            $data[$ip] = [];
        }
        
        if (count($data[$ip]) >= $maxAttempts) {
            return false; // Rate limit exceeded
        }
        
        // Add current attempt
        $data[$ip][] = $currentTime;
        
        // Save data
        file_put_contents($rateLimitFile, json_encode($data), LOCK_EX);
        
        return true; // Within rate limit
    }
    
    // Log spam attempts
    public function logSpamAttempt($data, $reason = 'General spam detection') {
        $logFile = LOGS_DIR . 'spam_log.txt';
        $timestamp = date('Y-m-d H:i:s');
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
        
        $logEntry = "=== SPAM DETECTED ===\n";
        $logEntry .= "Time: $timestamp\n";
        $logEntry .= "IP: $ip\n";
        $logEntry .= "Reason: $reason\n";
        $logEntry .= "Data: " . json_encode($data, JSON_UNESCAPED_UNICODE) . "\n";
        $logEntry .= "========================\n\n";
        
        file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
    }
}
?>
