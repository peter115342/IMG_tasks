<?php
public static function efficientMethod($user_id) {
    $user = User::find($user_id);
    if (!$user) {
        return null;
    }

    $courses = Course::where('active', 1)->get();
    
    $author_courses = [];
    $all_certificates = [];
    $phpCertificates = [];

    foreach ($courses as $course) {
        if ($course->author_id == $user->id) {
            $author_courses[] = $course;
        }

        $certificate = $course->certificate;
        $all_certificates[] = $certificate;

        if (stripos($certificate->name, 'php') !== false) {
            $phpCertificates[] = $certificate;
        }
    }

    return [
        'author_courses' => $author_courses,
        'all_certificates' => $all_certificates,
        'phpCertificates' => $phpCertificates
    ];
}
