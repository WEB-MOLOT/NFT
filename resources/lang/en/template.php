<?php

use App\Models\Messages\Message;

return [
    'message' => [
        'subject' => [
            Message::SUBJECT_ICO => 'Update ICO',
            Message::SUBJECT_AIRDROP => 'Update Airdrop',
            Message::SUBJECT_FEEDBACK => 'Feedback',
            Message::SUBJECT_AD => 'Advertising',
            Message::SUBJECT_BUSINESS => 'Business',
            Message::SUBJECT_REPORT => 'Report a problem',
            Message::SUBJECT_OTHER => 'Other'
        ]
    ]
];
