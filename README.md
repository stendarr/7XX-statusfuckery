# 7XX statusfuckery
This is a PHP implementation of [@joho](https://github.com/joho)'s proposed [7XX HTTP Status Codes](https://github.com/joho/7XX-rfc)

To use this, just php-include this file on every page of your website:

```<?php include "statusfuckery.php"?>```

It will then choose one of the Status Codes randomly from an array and add it to the HTTP Header.

<br><br>
Most browsers will still render the page regardless of the status code but some will think you've sent an empty response or will just be too confused.

It's also a really great way to [confuse scrapers](https://www.youtube.com/watch?v=I3pNLB3Cq24).
