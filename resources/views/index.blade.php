
<?php


if (mail("amine.benzaggagh@icloud.com", "Mail", "Server sending mail...")) {
    echo "Mail sent";
} else {
    echo "Mail not sent";
}