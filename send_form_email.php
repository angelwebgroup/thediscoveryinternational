<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $referer = $_SERVER['HTTP_REFERER'] ?? 'index.php';
    $formType = $_GET['form'] ?? $_POST['form_type'] ?? 'contact';

    // Recipients list from centralized config
    $recipients = !empty($school['admin_emails']) 
        ? implode(', ', $school['admin_emails']) 
        : 'thediscoveryinternational@gmail.com';

    if ($formType === 'admission') {
        // Online Admission Form Processing
        $studentFirst = htmlspecialchars(trim($_POST['first_name'] ?? ''));
        $studentLast  = htmlspecialchars(trim($_POST['last_name'] ?? ''));
        $studentName  = trim("$studentFirst $studentLast");
        $aadharNo     = htmlspecialchars(trim($_POST['aadhar_no'] ?? ''));
        $fatherName   = htmlspecialchars(trim($_POST['father_name'] ?? ''));
        $classApplied = htmlspecialchars(trim($_POST['class'] ?? ''));
        $prevSchool   = htmlspecialchars(trim($_POST['prev_school'] ?? ''));
        $whatsapp     = htmlspecialchars(trim($_POST['whatsapp'] ?? ''));
        $contactNo    = htmlspecialchars(trim($_POST['contact_no'] ?? ''));
        $email        = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $address      = htmlspecialchars(trim($_POST['address'] ?? ''));
        $city         = htmlspecialchars(trim($_POST['city'] ?? ''));
        $state        = htmlspecialchars(trim($_POST['state'] ?? ''));
        $message      = htmlspecialchars(trim($_POST['message'] ?? ''));

        if (empty($studentFirst) || empty($fatherName) || empty($contactNo) || empty($classApplied)) {
            $_SESSION['form_error'] = "Please fill in all required fields marked with *.";
            header("Location: " . $referer);
            exit;
        }

        $subject = "New Online Admission Registration: $studentName ($classApplied) - The Discovery International School";

        $body = "=======================================================\n";
        $body .= "NEW ONLINE ADMISSION REGISTRATION\n";
        $body .= "The Discovery International School, Prithla (Session {$school['session']})\n";
        $body .= "=======================================================\n\n";
        $body .= "Student Name:        $studentName\n";
        $body .= "Student Aadhaar No:  $aadharNo\n";
        $body .= "Father's Name:       $fatherName\n";
        $body .= "Class Applying For:  $classApplied\n";
        $body .= "Previous School:     $prevSchool\n";
        $body .= "WhatsApp Number:     $whatsapp\n";
        $body .= "Contact Number:      $contactNo\n";
        $body .= "Email:               $email\n";
        $body .= "Residential Address: $address, $city, $state\n";
        $body .= "Additional Message:  $message\n\n";
        $body .= "Submission Time:     " . date('d-M-Y H:i:s T') . "\n";
        $body .= "Client IP:           " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";

    } else {
        // General Contact Form Processing
        $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
        $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
        $classInterest = htmlspecialchars(trim($_POST['class_interest'] ?? ''));
        $message = htmlspecialchars(trim($_POST['message'] ?? ''));

        if (empty($name) || empty($phone) || empty($message)) {
            $_SESSION['form_error'] = "Please fill in all required fields.";
            header("Location: " . $referer);
            exit;
        }

        $subject = "New Inquiry from $name - The Discovery International School";

        $body = "=======================================================\n";
        $body .= "NEW CONTACT US INQUIRY\n";
        $body .= "The Discovery International School, Prithla\n";
        $body .= "=======================================================\n\n";
        $body .= "Name:           $name\n";
        $body .= "Email:          $email\n";
        $body .= "Phone:          $phone\n";
        $body .= "Class Interest: $classInterest\n";
        $body .= "Message:\n$message\n\n";
        $body .= "Submission Time: " . date('d-M-Y H:i:s T') . "\n";
        $body .= "Client IP:       " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
    }

    $headers = "From: " . ($school['email']) . "\r\n";
    if (!empty($email)) {
        $headers .= "Reply-To: $email\r\n";
    }
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send mail safely (or queue)
    @mail($recipients, $subject, $body, $headers);

    $_SESSION['form_success'] = "Thank you! Your information has been submitted successfully to The Discovery International School. Our office will contact you shortly.";
    header("Location: " . $referer);
    exit;
} else {
    header("Location: index.php");
    exit;
}
