<?php
public static function efficientMethod($user_id)
{
    $user = User::findOrFail($user_id);

    $courses = Course::where('active', 1)
        ->with('certificate')
        ->get();
    
    $author_courses = $courses->where('author_id', $user->id);
    $all_certificates = $courses->pluck('certificate');
    $phpCertificates = $all_certificates->filter(function ($certificate) {
        return stripos($certificate->name, 'php') !== false;
    });

    return [
        'author_courses' => $author_courses->values(),
        'all_certificates' => $all_certificates->values(),
        'phpCertificates' => $phpCertificates->values()
    ];
}
