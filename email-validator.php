<?php
/**
 * Advanced Email Validator
 * Comprehensive email validation and verification
 */

class EmailValidator {
    
    // List of known disposable email providers
    private $disposableProviders = [
        '10minutemail.com', 'tempmail.org', 'guerrillamail.com',
        'mailinator.com', 'yopmail.com', 'temp-mail.org',
        'throwaway.email', 'getnada.com', 'maildrop.cc',
        '33mail.com', 'emailondeck.com', 'fakeinbox.com'
    ];
    
    // List of trusted email providers
    private $trustedProviders = [
        'gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com',
        'live.com', 'msn.com', 'aol.com', 'icloud.com',
        'mail.com', 'zoho.com', 'protonmail.com'
    ];
    
    /**
     * Validate email address with multiple checks
     */
    public function validateEmail($email) {
        $result = [
            'valid' => false,
            'sanitized' => '',
            'issues' => []
        ];
        
        // Basic sanitization
        $email = trim(strtolower($email));
        $result['sanitized'] = $email;
        
        // Check if email is empty
        if (empty($email)) {
            $result['issues'][] = 'Email is empty';
            return $result;
        }
        
        // Basic format validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result['issues'][] = 'Invalid email format';
            return $result;
        }
        
        // Extract domain
        $domain = substr(strrchr($email, "@"), 1);
        
        // Check for disposable email
        if (in_array($domain, $this->disposableProviders)) {
            $result['issues'][] = 'Disposable email provider not allowed';
            return $result;
        }
        
        // Check domain format
        if (!$this->isValidDomain($domain)) {
            $result['issues'][] = 'Invalid domain format';
            return $result;
        }
        
        // Check if domain has MX record
        if (!$this->checkMXRecord($domain)) {
            $result['issues'][] = 'Domain does not accept emails (no MX record)';
            return $result;
        }
        
        // Additional security checks
        if ($this->hasSuspiciousPatterns($email)) {
            $result['issues'][] = 'Email contains suspicious patterns';
            return $result;
        }
        
        // If we reach here, email is valid
        $result['valid'] = true;
        $result['trusted'] = in_array($domain, $this->trustedProviders);
        
        return $result;
    }
    
    /**
     * Check if domain is valid
     */
    private function isValidDomain($domain) {
        // Basic domain format check
        if (!preg_match('/^[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]?\.[a-zA-Z]{2,}$/', $domain)) {
            return false;
        }
        
        // Check for suspicious domain patterns
        if (preg_match('/\d{4,}/', $domain)) { // Too many consecutive numbers
            return false;
        }
        
        return true;
    }
    
    /**
     * Check if domain has MX record
     */
    private function checkMXRecord($domain) {
        // Skip MX check in development or if DNS functions are not available
        if (!function_exists('checkdnsrr')) {
            return true;
        }
        
        try {
            return checkdnsrr($domain, 'MX') || checkdnsrr($domain, 'A');
        } catch (Exception $e) {
            // If DNS check fails, allow the email (could be network issue)
            return true;
        }
    }
    
    /**
     * Check for suspicious patterns in email
     */
    private function hasSuspiciousPatterns($email) {
        $suspiciousPatterns = [
            '/[a-z]\d{8,}@/', // Username with too many numbers
            '/\+.{20,}@/', // Very long plus addressing
            '/\.{2,}/', // Multiple consecutive dots
            '/^[^@]{50,}@/', // Username too long
        ];
        
        foreach ($suspiciousPatterns as $pattern) {
            if (preg_match($pattern, $email)) {
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * Suggest corrections for common email mistakes
     */
    public function suggestCorrection($email) {
        $commonMistakes = [
            'gmai.com' => 'gmail.com',
            'gmial.com' => 'gmail.com',
            'gmail.co' => 'gmail.com',
            'yahoo.co' => 'yahoo.com',
            'hotmai.com' => 'hotmail.com',
            'hotmial.com' => 'hotmail.com',
            'outlok.com' => 'outlook.com'
        ];
        
        $domain = substr(strrchr($email, "@"), 1);
        
        if (isset($commonMistakes[$domain])) {
            return str_replace($domain, $commonMistakes[$domain], $email);
        }
        
        return null;
    }
}
?>
