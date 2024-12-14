<?php

final class DatabaseConnection {
    public function connect() {
        echo "Connecting to the database.\n";
    }
}


class ExtendedDatabaseConnection extends DatabaseConnection {  
    // This will produce an error
}

?>
