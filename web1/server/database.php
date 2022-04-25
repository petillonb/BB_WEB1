<?php
$Database;
function get_credentials()
{
    $json = file_get_contents("database.json");

    $creds = json_decode($json, true);
    return $creds;
}

function join_database()
{
    global $Database;
    $credentials = get_credentials();
    $Database = new mysqli($credentials["db_url"], $credentials["db_login"], $credentials["db_password"], $credentials["db_name"]);

    // Check connection
    if ($Database->connect_errno) {
        echo "Failed to connect to MySQL: " . $Database->connect_error;
        exit();
    }
}

function shutdown_db()
{
    global $Database;
    mysqli_close($Database);
}


function select_fields($table, $id = -1)
{
    global $Database;
    $query_results = array();
    if ($result = $Database->query("SELECT * FROM $table")) {
        $row = $result->fetch_assoc();
        // printf("%s %s %s\n", $row["ID"], $row["message"], $row["post_date"]);
        $query_results["total"] = $result->num_rows;
        $query_results["data"] = array();
        // WHILE $row != NULL
        // -> append to $query_results["data"]
        // Free result set
        $result->free_result();
    }
    return $query_results;
}

function insert_fields($table, $fields)
{
}
function edit_fields($table, $fields, $id = -1)
{
}
function delete_fields($table, $id)
{
}
