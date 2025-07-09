<?php

// ✅ PHP-তে try এবং catch ব্লক ব্যবহার করা হয় error (exception) ধরার জন্য, যেন প্রোগ্রাম হঠাৎ থেমে না যায় এবং আমরা সুন্দরভাবে error handle করতে পারি।

try {
    $condition = false;
    if (!$condition) {
        throw new Exception("Condition is not true");
    }
    echo "Condition is true";
} catch (Exception $e) {
    echo "" . $e->getMessage();
}

// Output : Condition is not true